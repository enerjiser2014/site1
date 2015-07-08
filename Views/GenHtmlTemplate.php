<?php

// некоторые идеи для реализации
// предварительная проверка шаблона
// проверка существования файлов.

namespace App\Views;

use App\Classes\Exceptions\E404;

class GenHtmlTemplate
{
    private static $arr;
    private static $confPath;
    private static $nextPath;

    private static function loadConf($path, $confName)
    {
        self::$arr = include($path . $confName . '.inc');
        self::$confPath = $path;
        self::$nextPath = $path .$confName . '/';

    }
    private static function htmlToBuffer($templateName)
    {
        ob_start();
        include ($templateName);
        $buf = ob_get_contents();
        ob_end_clean();
        return $buf;
    }
    public static function  processHtml($path, $templateName)
    {
        self::loadConf($path, $templateName);
        $buf = self::htmlToBuffer($path . $templateName . '.html');
        return  self::catHtml(self::catHtml(self::catHtml($buf))); //тупой хак - на меня смотрит маньяк с топором :)
    }


    private static function catHtml($buf)
    {
        foreach(self::$arr as $k => $v) {
            if (0 === strpos($k,'@@file@@') ) {
                if ( false == file_exists(self::$nextPath . $v)) {
                    echo self::$nextPath . $v;
                    //throw new E404('catHtml:<br> Ошибка в имени файла внутри шаблона.');
                }
                $v = self::htmlToBuffer( self::$nextPath . $v ) ;
                $buf = str_replace('{' . $k . '}', $v, $buf);
            }
            else {
                $buf = str_replace('{' . $k . '}', $v, $buf);
            }
        }
    return $buf;
    }
}

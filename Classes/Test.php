<?php

namespace App\Classes;

class Test
{
    protected static $someval;

    protected function __construct()
    {

    }

    protected function __clone()
    {

    }

    public static function getInstance($new = false)
    {
      //    static $instance = null;
      //  if (null === $instance || $new) {
            $instance = new static;
            return $instance;
    //    }
    }

    public function hello()
    {
        echo 'Hello World!' . self::$someval . '<br>';
    }

    public function setSomeval($x)
    {
        self::$someval = $x;
    }
}
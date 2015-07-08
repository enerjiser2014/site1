<?php

namespace App\Views;

class View
{
    use \App\Traits\TMagicGetSet;

    public function displayNews($template)
    {
        // MakeHeader(); {title}, {header}, {meta}
        // MakeMenu();
        // MakeNews();
        // MakeArticle();
        // MakeBanner();
        // MakeFooter();
        echo GenHtmlTemplate::processHtml(__DIR__ . '/Templates/', 'template');

        foreach ($this->items as $v) {
            echo '<strong>' . $v->title . '</strong><br>';
            echo $v->text . '<br><br>';
            echo '<br>';
        }
    }

    public function displayArticle($temlpalte)
    {
        echo '<strong>' . $this->items->title . '</strong><br>';
        echo $this->items->text;
    }

    public function displayAdmin($template)
    {
        echo GenHtmlTemplate::processHtml(__DIR__ . '/Templates/', 'admin');
    }

    private function makeHeader()
    {

    }

}
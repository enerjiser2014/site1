<?php

namespace App\Views;

class View
{
    use \App\Traits\TMagicGetSet;

    public function displayNews($template)
    {
        foreach($this->items as $v) {
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
        echo '<strong>Здесь будет админка</strong>';
    }
}
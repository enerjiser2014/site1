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
}
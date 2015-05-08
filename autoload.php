<?php

function __autoload($classname)
{
   // echo hello . ' ' . $classname . '<br>';
    $classpart = explode('\\',$classname);
    if (false==strpos('//',$classname)):
        $classpart = explode('\\',$classname);
        if ('App' == $classpart[0]):
            unset($classpart[0]);
            $load = __DIR__ . '/' . implode('/', $classpart) . '.php';
            echo $load . '<br>';
            require $load;
        endif;
    endif;
}


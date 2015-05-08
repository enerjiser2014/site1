<?php

namespace App\Classes\Exceptions;

class E403Exception
    extends E404Exception
{
    public function log($filename)
    {
        // здесь будет запись файла
    }
}
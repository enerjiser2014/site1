<?php

namespace App\Classes\Exceptions;

class E404Exception
    extends Exception
{
    public function redirect($name)
    {
        session_start();
        $_SESSION['error'] = 'Файл ' .$name . 'не найден';
        header('Location: ./error.php');
    }
}
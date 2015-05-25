<?php

// Антипаттерн Singleton

namespace App\Classes;

class Singleton
{
    private static $instance;
    private $newproperty;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function Foo(){
        $this->newproperty = 'string';
    }

    public function Bar(){
        return $this->newproperty;
    }

    public function reset()
    {
        $this->newproperty = null;
    }

    private function __construct()
    {

    }

    private  function __wakeup()
    {

    }

    private function __clone()
    {

    }
}

<?php

namespace App\Classes;

final class SingletonRegistry
{
    private $properties = [];
    private static $instance;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function set($key, $value)
    {
        if (!array_key_exists($key,
            self::getInstance()->properties)
        ) {
            self::getInstance()->properties[$key] = $value;
            return true;
        }
        return false;
    }

    public function get($key)
    {
        if (array_key_exists($key,
            self::getInstance()->properties)
        ) {
            return self::getInstance()->properties[$key];
        }
        return false;
    }

    public function remove($key)
    {
        if (array_key_exists($key,
            self::getInstance()->properties)
        ) {
            unset(self::getInstance()->properties[$key]);
        }
    }


    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}



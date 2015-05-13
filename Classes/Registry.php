<?php

namespace App\Classes;

class Registry
{
    protected static $registryArray = [];

    public static function set($key, $value)
    {
        if (!array_key_exists($key,self::$registryArray)) {
            self::$registryArray[$key] = $value;
        }
    }

    public static function get($key)
    {
        if (array_key_exists($key, self::$registryArray)) {
            return self::$registryArray[$key];
        }
        return false;
    }

    public static function remove($key)
    {
        if (array_key_exists($key, self::$registryArray)) {
            unset(self::$registryArray[$key]);
            return true;
        }
        return false;
    }

    private  function __construct()
    {

    }

}

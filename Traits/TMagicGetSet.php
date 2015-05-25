<?php

namespace App\Traits;

trait TMagicGetSet
{
    protected $id;
    protected $magicProp = [];

    public function __get($name)
    {
        if ('id' == $name) {
            return $this->id;
        }
        return $this->magicProp[$name];
    }

    public function __set($name, $value)
    {
        $this->magicProp[$name] = $value;
    }
}
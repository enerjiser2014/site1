<?php

namespace App\Models;

abstract class Model
{
    protected $magicProp = [];
    protected $id;

    public function __get($name)
    {
        return $this->magicProp[$name];
    }

    public function __set($name, $value)
    {
        $this->magicProp[$name] = $value;
    }

}


<?php

namespace App\Interfaces;

interface IActiveRecord
{
    public function save();
    public function delete();
}
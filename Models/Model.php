<?php

namespace App\Models;
use App\Traits\TMagicGetSet as TMagicGetSet;
use App\Traits\TActiveRecord as TActiveRecord;

abstract class Model
{
    use TMagicGetSet;
    use TActiveRecord;
    protected $id;
}


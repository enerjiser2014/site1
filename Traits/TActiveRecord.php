<?php

namespace App\Traits;

use App\Db\Db as Db;
use App\Classes\Conf as Conf;

trait TActiveRecord
{
    abstract protected function getTable();

    protected  function getAllRecords()
    {
        $sql = 'SELECT * FROM ' . $this->getTable();
        $db = new Db(Conf::newsDb());
        return $db->getRecords(static::class, $sql);
    }


    protected  function getOneRecord($id)
    {
        $sql = 'SELECT * FROM ' . $this->getTable() . ' WHERE id=:id';
        $db = new Db(Conf::newsDb());
        $ret = $db->getRecord(static::class, $sql, [':id' => $id]);
        return $ret;
    }

}
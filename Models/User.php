<?php

namespace App\Models;
use App\Interfaces\IActiveRecord;
use App\Classes\Conf;
use App\Db\Db;

class User
    extends Model
        implements IActiveRecord
{
    protected $table = 'Users';

    protected function getTable()
    {
        return $this->table;
    }


    public function chekUserPassword($login, $password)
    {
        $db = new Db(Conf::newsDb());
        $hash = md5($password);

    }

    public function addUser($login, $password)
    {
        $db = new Db(Conf::newsDb());
        $hash = md5($password);
        $sql ='INSERT INTO `' . $this->getTable() . '`
            (`id`, `login`, `password`)
            VALUES
            (\'\',\'' . $login .'\',\'' . $hash . '\')
            ';
        return $db->sqlExec(static::class, $sql);
    }

    public function deleteUser($login, $password)
    {

    }

    public function save() {}
    public function delete() {}
}
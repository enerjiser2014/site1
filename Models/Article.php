<?php

namespace App\Models;

use App\Db\Db;
use App\Interfaces\IActiveRecord;

class Article
    extends Model implements IActiveRecord
{
    protected $table = 'Articles';
    protected function getTable()
    {
        return $this->table;
    }
    public function getAllArticles()
    {
    //    echo 'table name=' . $this->getTable() . '<br>';
        return  $this->getAllRecords();
    }
    public function getArticle($id)
    {
        return $this->getOneRecord($id);
    }

    public function save()
    {

    }

    public function delete()
    {

    }

}

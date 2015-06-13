<?php

namespace App\Models;

use App\Classes\Exceptions\E404;
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
        if (NULL == $article = $this->getOneRecord($id)) {
            throw new E404('Models\Article.php:<br>Статья не обнаружена.');
        }
        return $article;
    }

    public function save()
    {

    }

    public function delete()
    {

    }

}

<?php

namespace App\Controllers;

use App\Models\Article;

class News
{
    protected $view;
    public function __construct()
    {
        $this->view = new \App\Views\View();
    }
    public function showNews()
    {
        // Получаем данные из модели
        $myNews = new Article();
        $this->view->items = $myNews->getAllArticles();
        echo '<br>';
        $this->view->displayNews('template.html');
    }

    public function showArticle()
    {
        // Получаем данные из модели
    }


}
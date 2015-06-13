<?php

namespace App\Controllers;

use App\Models\Article;

class News
    extends Controller
{
    public function showNews()
    {
        // Получаем данные из модели
        $myNews = new Article();
        $this->view->items = $myNews->getAllArticles();
        $this->view->displayNews('template.html');
    }

    public function showArticle()
    {
        // Получаем данные из модели

        $route = explode('/',$_GET['__route']);
        $myArticle = new Article();

        $this->view->items = $myArticle->getArticle($route[2]);
        $this->view->displayArticle('template.html');
    }


}
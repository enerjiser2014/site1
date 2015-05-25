<?php

namespace App\Controllers;

use App\Models\Article;

class Admin
    extends Controller
{
    public function showAdmin()
    {
        // Здесь будет управление админкой
        $myNews = new Article();
        $this->view->items = $myNews->getAllArticles();
        $this->view->displayAdmin('admin.html');
    }
}
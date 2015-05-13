<?php

require_once __DIR__ . '/autoload.php';
use App\Classes\Conf as Conf;
use App\Classes\Registry as Registry;

Registry::set("rrr","22");
Registry::set("eee","33")u
Registry::set("fff","44");

Registry::remove("fff");

echo Registry::get("rrr");
echo Registry::get("eee");
echo Registry::get("fff");


$reg = \App\Classes\SingletonRegistry::getInstance();
$reg->set('a',111);
echo '<br>' . $reg->get('a');

$article = new \App\Models\Article();
$article->username = 'username22';
$article->save();


$test = \App\Classes\Test::getInstance();
$test->setSomeval('Ivan');
$test->hello();


$test2 = \App\Classes\Test::getInstance(false);
$test2->setSomeval('John');
$test2->hello();

$test->hello();
//echo '<br>' . $article->username;
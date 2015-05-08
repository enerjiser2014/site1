<?php

require_once __DIR__ . '/autoload.php';
use App\Classes\Conf as Conf;

$c1 = new App\Models\Model();
$db = new App\Db\Db(Conf::newsDb());


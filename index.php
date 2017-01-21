<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();

$view->news = \App\Models\Article::findAll();

// Тестировал count
//$view->test = 3;
//echo count($view);

// Тестировал интерфейс Iterator
/* foreach ($view as $key => $value) {
    var_dump($key);
    var_dump($value);
} */

$view->view(__DIR__ . '/template/template.php');
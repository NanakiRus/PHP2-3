<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();

$view->news = \App\Models\Article::findAll();

$view->view(__DIR__ . '/template/template.php');
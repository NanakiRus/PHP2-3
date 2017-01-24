<?php

require __DIR__ . '/autoload.php';

if (isset($_GET['id'])) {
    $article = \App\Models\Article::findOneById($_GET['id']);

    include __DIR__ . '/template/article.php';
}
<?php

function list_action()
{
    $articles = get_all_articles();

    require 'templates/list.php';
}

function show_action()
{
    $id = $_GET['id'];
    $article = get_article_by_id($id);

    require 'templates/show.php';
}

function not_found()
{
    header('HTTP/1.1 404 Not Found');

    require 'templates/not_found.php';
}


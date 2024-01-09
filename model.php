<?php

function open_database_connection()
{
    $connection = new PDO('mysql:host=127.0.0.1;dbname=news_db', 'root', 'password');

    return $connection;
}

function get_all_articles()
{
    $connection = open_database_connection();
    $result = $connection->query('SELECT id, title FROM article');

    $articles = [];
    while ($article = $result->fetch(PDO::FETCH_ASSOC)) {
        $articles[] = $article;
    }

    return $articles;
}

function get_article_by_id($id)
{
    $connection = open_database_connection();

    $query = 'SELECT id, title FROM article WHERE id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
}

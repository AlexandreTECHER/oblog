<?php

require_once __DIR__ . "/classes/Article.php";
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Author.php";

// Les catégories
$dataCategoriesList = [
    1 => new Category('TeamBack'),
    2 => new Category('TeamFront'),
    3 => new Category('Collaboration'),
    4 => new Category('Ma Vie De Dev')
];

// Les auteurs
$dataAuthorsList = [
    1 => new Author('Maxime'),
    2 => new Author('Anthony'),
    3 => new Author('Alexandre'),
    4 => new Author('Dario'),
    5 => new Author('Julie'),
    6 => new Author('Lucie'),
    7 => new Author('Xavier')
];

$sqlListArticles = '
    SELECT `id`, `author_id`, `category_id`, `title`, `content`, `published_date`, `views` FROM `article` WHERE 1
';

$pdo = getPdo();

$statement = $pdo->query($sqlListArticles);

$articles = $statement->fetchAll(PDO::FETCH_ASSOC);
// dump($articles);

$dataArticlesList = [];

foreach($articles as $article){

    $idCategory = $article['category_id'];
    $category = $dataCategoriesList[$idCategory];
    $author = $dataAuthorsList[$article['author_id']];

    $dataArticlesList[$article['id']] = new Article(
        $article['title'],
        $article['content'],
        $author->name,
        $article['published_date'],
        $category->name

    );
}



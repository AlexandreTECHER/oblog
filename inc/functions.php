<?php

function getPdo(){
    $pdo = new PDO(
        // data source name : où vais-je chercher les données
        'mysql:dbname=oblog;host=localhost;charset=UTF8',
        'oblog',//ID de l'utilisateur renseigné dans phpmyadmin
        'oblog', //MDP du user dans phpmyadmin
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING //permet de renseigner des erreur dans php lorsqu'il y a des erreurs dans mysql
        )
    );
    return $pdo;
}
// Fonction qui affiche les auteurs

function displayAuthorsList()
{
    include __DIR__ . '/data.php';
    foreach ($dataAuthorsList as $authorId => $authorName) {
        echo '<li class="list-group-item"><a href=?page=author&authorId=' . $authorId . '>' . $authorName->name . '</a></li>';
    }
}

function getAuthorsList()
{
    include __DIR__ . '/data.php';
    return $dataAuthorsList;
}

function getCategories($id)
{
    include __DIR__ . '/data.php';
    $category = $dataCategoriesList[$id];
    return $category;
}

function getArticlesByCategory()
{
    include __DIR__ . '/data.php';
    return $dataArticlesList;
}

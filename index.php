<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

require __DIR__ . '/inc/classes/Article.php';
require __DIR__ . '/inc/classes/Author.php';
require __DIR__ . '/inc/classes/Category.php';
require __DIR__ . '/inc/data.php';

$articleList = $dataArticlesList;

if ($page === 'article') {
    
    if (isset($_GET['articleId'])) {
        $articleId = $_GET['articleId'];
    }
    
    if(!isset($articleList[$articleId])){
        echo 'L\'article n\'existe pas';
        return false;
    }

    $articleToDisplay = $articleList[$articleId];

}

else if ($page === 'category'){

    $categoryId = $_GET['categoryId'];

    $categoryName = $dataCategoriesList[$categoryId];

    $articleList = [];

    foreach($dataArticlesList as $article){
        if($article->category === $categoryName->name){
            $articleList[] = $article;
        }
    }

}

else if($page === 'author'){

    $authorId = $_GET['authorId'];

    $authorName = $dataAuthorsList[$authorId];

    $articleList = [];

    foreach($dataArticlesList as $article){
        if($article->author === $authorName->name){
            $articleList[] = $article;
        }
    }


}

// Affichage
require __DIR__ . '/inc/templates/header.tpl.php';
require __DIR__ . "/inc/templates/{$page}.tpl.php";
require __DIR__ . '/inc/templates/footer.tpl.php';

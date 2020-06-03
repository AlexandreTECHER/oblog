<?php

// Fonction qui affiche les auteurs

function displayAuthorsList() {
    include __DIR__.'/data.php';
    foreach($dataAuthorsList as $authorId => $authorName) {
        echo '<li class="list-group-item"><a href=?page=author&authorId='.$authorId.'>'.$authorName.'</a></li>';
    }
}

function getAuthorsList() {
    include __DIR__.'/data.php';
    return $dataAuthorsList;
}
<?php

$pdo = new PDO(
    // data source name : où vais-je chercher les données
    'mysql:dbname=oblog;host=localhost;charset=UTF8',
    'root',//ID de l'utilisateur renseigné dans phpmyadmin
    'Ereul9Aeng', //MDP du user dans phpmyadmin
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING //permet de renseigner des erreur dans php lorsqu'il y a des erreurs dans mysql
    )
);

$sql = "SELECT id, title, content FROM article";

$statement = $pdo->query($sql);

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);




<?php

require_once __DIR__.'/inc/data.php';
require_once __DIR__.'/inc/functions.php';


// Point d'entrée pour la page d'accueil

// Inclusion des fichiers nécessaires

// Récupération des données nécessaires la page (si besoin)

// Affichage
require __DIR__.'/inc/templates/header.tpl.php';

/**
 * Ici je vais choisir la page à afficher en fonction 
 * du parametre GET reçu dans l'URL.
 * 
 * index.php?page=article
 * PHP va créer un tableau $_GET resseamblant à 
 * [
 *      'page' => 'article'
 * ]
 * 
 * On parra acceder à la page demander en faisant $_GET['page'];
 * Dans notre exemple : $_GET['page'] == 'article'
 * 
 * Je vais faire un enchaine de if / else avec toutes les pages dispo
 * sur le site.
 * 
 * On est ici à la reception de notre site !
 * Les pourboires sont les bienvenus.
 * 
 */
if (isset($_GET['page']) && $_GET['page'] == 'article') {
    // On charge le template correspondant au parametre GET demandé
    require __DIR__.'/inc/templates/article.tpl.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'category') {
    // On charge le template correspondant au parametre GET demandé
    require __DIR__.'/inc/templates/category.tpl.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'author') {
    // On charge le template correspondant au parametre GET demandé
    require __DIR__.'/inc/templates/author.tpl.php';
} else {
    // Dans le cas ou on envoie aucun parametre
    // bah, ne panique pas et charge la home.
    require __DIR__.'/inc/templates/home.tpl.php';
}

// Réécriture d'URL
// /news/article-usa-iran-123453 -> index.php?page=article&id=123453

require __DIR__.'/inc/templates/footer.tpl.php';
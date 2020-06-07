<?php

require __DIR__.'/vendor/autoload.php';

require_once __DIR__ . '/inc/functions.php';
require_once __DIR__ . '/inc/data.php';

require __DIR__ . '/inc/templates/header.tpl.php';

if (isset($_GET['page']) && $_GET['page'] == 'article') {
    // On charge le template correspondant au parametre GET demandé
    require __DIR__ . '/inc/templates/article.tpl.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'category') {

    // On charge le template correspondant au parametre GET demandé
    require __DIR__ . '/inc/templates/category.tpl.php';

} else if (isset($_GET['page']) && $_GET['page'] == 'author') {

    // On charge le template correspondant au parametre GET demandé
    require __DIR__ . '/inc/templates/author.tpl.php';
} else {

    require __DIR__ . '/inc/templates/home.tpl.php';
}

require __DIR__ . '/inc/templates/footer.tpl.php';

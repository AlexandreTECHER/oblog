<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Déclaration de notre font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">

  <!-- Font-Awesome CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <!-- Ma feuille de style pour mon blog -->
  <link rel="stylesheet" href="./css/style.css">

  <title>A la dérive</title>
</head>


<body>


    <!-- HEADER -->
    <header>
        <!-- NAV -->
        <nav class="navbar navbar-expand-md navbar-light">
        <!--
            Nous sommes en mobile first : par défaut notre menu est masqué !
            Je souhaite qu'il s'affiche au dela (= à partir de) d'une certainne largeur.
            navbar-expand-xxx permet d'afficher le menu en entier.
            xxx correspond à une taille (media-query) définie dans Bootstrap.
            sm => 576px
            md => 768px
            lg => 992px
            xl => 1200px
            -->
        <a class="navbar-brand" href="./">A la dérive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            Menu <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Cette partie va automatique être masquée en version mobile -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
                <?php foreach ($dataCategoriesList as $categorieId => $categorieName) : ?>
                    <li class="nav-item">
                        <a class="nav-link" 
                            href="index.php?page=category&id=<?=$categorieId?>">
                            <?=$categorieName?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
        </nav>
        <section class="text-center">
        <h1>A la dérive</h1>
        <hr />
        <p>
            Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace
        </p>
        </section>
    </header>
    <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
    <div class="container">
        <div class="row">

        <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
        <main class="col-lg-9">
<?php
    require_once __DIR__.'/../data.php';
    // Après l'include, on a une variable à notre disposition : 
    // $dataArticlesList
    // Cette variable est un tableau qui contient 4 objets.
?>


    <?php 
        // Je vais boucler sur mon tableau,
        // Comme mon tableau contient 4 éléments
        // Ma boucle va s'executer 4 fois, et elle va définir
        // a chaque itération, passage, une variable
        // $article qu contiendra un objet de type Article.
        foreach ($dataArticlesList as $id => $article) :
    ?>
    <article class="card">
        <div class="card-body">
        <h2 class="card-title">
            <a href="index.php?page=article&id=<?=$id?>">
                <?php echo $article->title ?>
            </a>
        </h2>
        <p class="card-text">
            <?php echo $article->content ?>
        </p>
        <p class="infos">
            Posté par 
            <a href="#" class="card-link">
                <?php echo $article->author ?>
            </a> 
            le 
            <time datetime="<?php echo $article->date ?>">
                <?php echo $article->date ?>
            </time> 
            dans 
            <a href="#" class="card-link">#<?php echo $article->category ?></a>
        </p>
        </div>
    </article>
    <?php
        endforeach;
    ?>

    <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
        </ul>
    </nav>
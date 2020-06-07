<?php
    require_once __DIR__.'/../data.php';
?>


    <?php foreach ($dataArticlesList as $id => $article) :?>
    
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
    <?php endforeach; ?>


    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
        </ul>
    </nav>
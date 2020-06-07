<?php
    require_once __DIR__.'/../data.php';

    $id = $_GET['id'];
    $article = $dataArticlesList[$id];

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
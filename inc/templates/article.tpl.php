<?php
    require_once __DIR__.'/../data.php';
    // Après l'include, on a une variable à notre disposition : 
    // $dataArticlesList
    // Cette variable est un tableau qui contient 4 objets.
    // Ce tableau est du type 
    /**
     * $dataArticlesList = [
     *  1 => new Article(....),
     *  2 => new Article(....),
     * ..
     * ]
     */
    // Re recupere l'id de l'article
    // /index.php?page=article&id=1
    /**
     * Mon tableau $_GET ressemble à
     * [
     *  "id" => 1
     *  "page" => "article"
     * ]
     */

    $id = $_GET['id'];
    // $article est un objet de type Article
    $article = $dataArticlesList[$id];

    // Je vais donc pouvoir l'utiliser comme un objet
    // vu que ça en est un, et donc acceder à ses propriétés
    // qui sont ici publiques (boooo).
    
    // var_dump($article);
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
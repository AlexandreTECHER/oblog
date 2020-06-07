<?php
    $id = $_GET['id'];
    $category = getCategories($id);
?>
<div class="container">
    <h1><?= $category->name ?></h1>

    <?php foreach (getArticlesByCategory() as $article) : ?>
        <?php if ($article->category === $category->name) : ?>
            <article class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        <a href="index.php?page=article&id=<?= $id ?>">
                            <?= $article->title ?>
                        </a>
                    </h2>
                    <p class="card-text">
                        <?= $article->content ?>
                    </p>
                    <p class="infos">
                        Posté par
                        <a href="#" class="card-link">
                            <?= $article->author ?>
                        </a>
                        le
                        <time datetime="<?= $article->date ?>">
                            <?= $article->date ?>
                        </time>
                        dans
                        <a href="#" class="card-link">#<?= $article->category ?></a>
                    </p>
                </div>
            </article>
        <?php endif ?>
    <?php endforeach ?>
</div>
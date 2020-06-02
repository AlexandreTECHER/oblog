<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <!-- emmet : (div.card>div.card-header>lorem5^div.card-body>lorem40^div)*4 -->

            <?php foreach ($articleList as $article) : ?>
                    <div class="card mb-4">
                        <div class="card-header"><a href="article.php"><?= $article->title ?></a></div>
                        <div class="card-body"><?= $article->content ?></div>
                        <div>Posté le <?= $article->getDateFr() ?>, par <?= $article->author ?>, dans la category #<?= $article->category ?></div>
                    </div>
            <?php endforeach ?>
        </div>

        <div class="col-lg-4 col-md-12">
            <form class="form">
                <div class="form-row">
                    <div class="col">
                        <label for="search" class="sr-only">Rechercher</label>
                        <input type="text" class="form-control mr-2" id="search">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Rechercher</button>
                    </div>
                </div>
            </form>
            <div class="card mb-4">
                <div class="card-header">Catégories</div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($dataCategoriesList as $id => $category) : ?>
                        <li class="list-group-item"><a href="index.php?page=category&categoryId=<?= $id ?>"><?= $category->name ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="card mb-4">
                <div class="card-header">Auteurs</div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($dataAuthorsList as $id => $author) : ?>
                        <li class="list-group-item"><a href="index.php?page=author&authorId=<?= $id ?>"><?= $author->name ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>
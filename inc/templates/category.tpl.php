<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <?php foreach ($articleList as $id => $article) : ?>
                <div class="card mb-4">
                    <div class="card-header"><a href="index.php?page=article&articleId=<?= $id ?>"><?= $article->title ?></a></div>
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
                <?php require __DIR__ . '/aside.tpl.php' ?>
            </div>
        </div>
    </div>
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
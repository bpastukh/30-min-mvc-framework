<?php $title = 'Articles'; ?>

<?php ob_start() ?>
<h1>Articles</h1>
<ul>
    <?php foreach ($articles as $article): ?>
    <li>
        <a href="/show.php?id=<?= $article['id'] ?>">
            <?= $article['title']; ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>
<?php $content = ob_get_clean() ?>

<?php include 'base_layout.php' ?>

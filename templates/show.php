<?php $title = 'Article ' . $id; ?>

<?php ob_start() ?>
<h1>Articles <?= $id ?></h1>
<h3><?= $article['title']; ?></h3>
<?php $content = ob_get_clean() ?>

<?php include 'base_layout.php' ?>

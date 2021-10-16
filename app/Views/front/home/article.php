<?= $this->extend('front/layout/main') ?>

<?= $this->section('title') ?>
Articulo
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Jumbotron -->
<div id="intro" class="p-5 text-center bg-light">
    <h1 class="mb-3 h2"><?= $post->title ?></h1>
</div>
<!-- Jumbotron -->
<!--Main layout-->
<main class="my-5">
    <div class="container">

        <?= $post->body ?>



    </div>
</main>
<!--Main layout-->
<?= $this->endSection() ?>
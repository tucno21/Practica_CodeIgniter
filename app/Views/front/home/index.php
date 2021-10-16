<?= $this->extend('front/layout/main') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Jumbotron -->
<div id="intro" class="p-5 text-center bg-light">
    <h1 class="mb-3 h2">BLOG DE PRUEBA</h1>
    <p class="mb-3">aprendiendo codeigniter4.1.4</p>
</div>
<!-- Jumbotron -->
<!--Main layout-->
<main class="my-5">
    <div class="container">
        <!--Section: Content-->
        <section class="text-center">
            <h4 class="mb-5"><strong>Latest posts</strong></h4>

            <?php foreach ($posts as $post) : ?>
                <div class="mb-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $post->title ?></h5>
                            <h8 class="card-title"><?= $post->nameInfo . " " . $post->surnameInfo ?></h8>
                            <p class="card-text">
                                <!-- https://www.php.net/manual/es/function.strip-tags.php -->
                                <?= strip_tags($post->body) ?>
                            </p>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </section>
        <!--Section: Content-->

        <!-- Pagination -->
        <?= $pager->links() ?>
    </div>
</main>
<!--Main layout-->
<?= $this->endSection() ?>
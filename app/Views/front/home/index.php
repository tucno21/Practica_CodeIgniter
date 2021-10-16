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
                            <p class="card-text">Publicado: <?= $post->published_at->humanize() ?></p>
                            <p class="card-text">
                                <!-- https://www.php.net/manual/es/function.strip-tags.php -->
                                <!-- https://codeigniter.com/user_guide/helpers/text_helper.html -->
                                <?= character_limiter(strip_tags($post->body), 100) ?>
                            </p>
                            <div class="">
                                <?php if (!empty($post->getCategories())) : ?>
                                    <?php foreach ($post->getCategories() as $cat) : ?>
                                        <a href=""><?= $cat->name ?></a>
                                        <!-- <a href="">c</a> -->
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
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
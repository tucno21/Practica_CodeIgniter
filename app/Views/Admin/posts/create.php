<?php
// include 'dashioDash/dashioDash.php';
// include 'dashioDash/head.php';
?>
<?= $this->include('Admin/dashioDash/head') ?>

<!--main content start-->
<section id="main-content">
    <?php $validation =  \Config\Services::validation(); ?>
    <?php session(); ?>

    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Crear categoria</h3>
        <a href="<?= base_url(route_to('post')) ?>" class="btn btn-default">Volver</a>
        <div class="row mt">
            <div class="col-lg-10">
                <div class="form-panel">

                    <form method="POST" enctype="multipart/form-data" class="form-horizontal style-form" action="<?= base_url(route_to('post_store')) ?>">
                        <?= csrf_field() ?>

                        <div class="form-group <?php if ($validation->getError('title')) : ?>has-error<?php endif ?>">
                            <label class="col-sm-2 control-label">titulo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="<?= old('title') ?>" placeholder="Titulo" />
                            </div>

                            <?php if ($validation->getError('title')) : ?>
                                <div class="col-sm-10">
                                    <p class="text-danger"><?= $validation->getError('title') ?></p>
                                </div>
                            <?php endif; ?>
                        </div>


                        <div class="form-group <?php if ($validation->getError('body')) : ?>has-error<?php endif ?>">
                            <label class="col-sm-2 control-label">Cuerpo</label>
                            <div class="col-sm-10">
                                <textarea id="textarea" class="form-control" name="body" placeholder="body" value="<?= old('body') ?>"></textarea>
                            </div>

                            <?php if ($validation->getError('body')) : ?>
                                <div class="col-sm-10">
                                    <p class="text-danger"><?= $validation->getError('body') ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php if ($validation->getError('cover')) : ?>has-error<?php endif ?>">
                            <label class="col-sm-2 control-label">Imagen</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="cover" />
                            </div>

                            <?php if ($validation->getError('cover')) : ?>
                                <div class="col-sm-10">
                                    <p class="text-danger"><?= $validation->getError('cover') ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php if ($validation->getError('published_at')) : ?>has-error<?php endif ?>">
                            <label class="col-sm-2 control-label">Fecha de publicacion</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="published_at" />
                            </div>

                            <?php if ($validation->getError('published_at')) : ?>
                                <div class="col-sm-10">
                                    <p class="text-danger"><?= $validation->getError('published_at') ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php if ($validation->getError('categories')) : ?>has-error<?php endif ?>">
                            <label class="col-sm-2 control-label">Categorias</label>

                            <div class="col-sm-10">
                                <?php foreach ($categories as $category) : ?>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="categories[]" value="<?= $category->id ?>">
                                        <?= $category->name ?>
                                    </label>
                                <?php endforeach; ?>
                            </div>

                            <?php if ($validation->getError('categories')) : ?>
                                <div class="col-sm-10">
                                    <p class="text-danger"><?= $validation->getError('categories') ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <input type="submit" class="btn btn-success" value="Crear Post">


                    </form>
                </div>
            </div>
            <!-- col-lg-12-->

        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->

<?= $this->include('Admin/dashioDash/footer') ?>
<?php
// include 'dashioDash/footer.php';
?>
<?php
// include 'dashioDash/dashioDash.php';
// include 'dashioDash/head.php';
?>
<?= $this->include('Admin/dashioDash/head') ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Crear categoria</h3>
        <a href="<?= base_url(route_to('categorias')) ?>" class="btn btn-default">Volver</a>
        <div class="row mt">
            <div class="col-lg-10">
                <div class="form-panel">


                    <form class="form-horizontal style-form" method="POST">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <input type="submit" class="btn btn-success" value="Crear">


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
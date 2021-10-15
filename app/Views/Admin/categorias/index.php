<?php
// include 'dashioDash/dashioDash.php';
// include 'dashioDash/head.php';
?>
<?= $this->include('Admin/dashioDash/head') ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Lista de Categorias</h3>
        <a href="<?= base_url(route_to('categoria_crear')) ?>" class="btn btn-default">Crear</a>
        <div class="row mt">

            <div class="content-panel">
                <div class="adv-table ">
                    <table cellpadding="0" cellspacing="0" border="0" class="table display table-bordered" id="hidden-table-info">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>categorias</th>
                                <th>Fecha de creación</th>
                                <th>Fecha de actualización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category) : ?>
                                <tr>
                                    <td><?= $category->id ?></td>
                                    <td><?= $category->name ?></td>
                                    <td><?= $category->created_at ?></td>
                                    <td><?= $category->updated_at ?></td>
                                    <td>
                                        <a class="btn btn-default" href=""><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-default" href=""><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>:?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- page end-->

        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->

<?= $this->include('Admin/dashioDash/footer') ?>
<?php
// include 'dashioDash/footer.php';
?>
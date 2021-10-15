<?= $this->extend('front/layout/main') ?>

<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img4.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1n">Last name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m1">Mother's name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1n1">Father's name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Address</label>
                                </div>

                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                    <h6 class="mb-0 me-4">Gender: </h6>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <select class="select">
                                            <option value="1">State</option>
                                            <option value="2">Option 1</option>
                                            <option value="3">Option 2</option>
                                            <option value="4">Option 3</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <select class="select">
                                            <option value="1">City</option>
                                            <option value="2">Option 1</option>
                                            <option value="3">Option 2</option>
                                            <option value="4">Option 3</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example9" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example9">DOB</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example90" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example90">Pincode</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example99" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example99">Course</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example97" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example97">Email ID</label>
                                </div>

                                <div class="d-flex justify-content-end pt-3">
                                    <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                    <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<div class="container py-4">
    <?php $validation =  \Config\Services::validation(); ?>
    <?php session(); ?>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
            <form method="POST" action="<?= base_url('auth/store') ?>">
                <?= csrf_field() ?>

                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="card-title">Register User</h5>
                    </div>

                    <div class="card-body p-4">

                        <div class="form-group mb-3 has-validation">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control <?php if ($validation->getError('name')) : ?>is-invalid<?php endif ?>" name="name" placeholder="Nombres" value="<?= old('name') ?>" />
                            <?php if ($validation->getError('name')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name') ?>
                                </div>
                            <?php endif; ?>
                        </div>


                        <div class="form-group mb-3 has-validation">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control <?php if ($validation->getError('surname')) : ?>is-invalid<?php endif ?>" name="surname" placeholder="Apellidos" value="<?= old('surname') ?>" />
                            <?php if ($validation->getError('surname')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('surname') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Email" value="<?= old('email') ?>" />
                            <?php if ($validation->getError('email')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Pais</label>

                            <select name="id_country" class="form-control <?php if ($validation->getError('id_country')) : ?>is-invalid<?php endif ?>">

                                <option value="">selecciones Pais</option>
                                <?php foreach ($paises as $pais) : ?>
                                    <option value="<?php echo $pais->id; ?>" <?php echo $pais->id == old('id_country') ? ' selected' : ''; ?>><?php echo $pais->name; ?></option>
                                <?php endforeach; ?>
                            </select>

                            <?php if ($validation->getError('id_country')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('id_country') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control <?php if ($validation->getError('password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="contraseña" value="" />
                            <?php if ($validation->getError('password')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control <?php if ($validation->getError('confirm_password')) : ?>is-invalid<?php endif ?>" name="confirm_password" placeholder="repita la contraseña" value="" />
                            <?php if ($validation->getError('confirm_password')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('confirm_password') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Registrame</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
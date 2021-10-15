<?= $this->extend('front/layout/main') ?>

<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- <div class="container m-5 p-5">
    <main class="form-signin">
        <form>
            <h1 class="h3 mb-3 fw-normal">Registrece</h1>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
        </form>
    </main>


</div> -->

<section class="vh-100 mt-4 mb-4" style="background-color: #9A616D;">
    <?php $validation =  \Config\Services::validation(); ?>
    <?php session(); ?>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="<?= base_url('auth/loginstore') ?>">
                                    <?= csrf_field() ?>

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Logo</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sessión</h5>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Correo</label>
                                        <input type="email" class="form-control <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Correo" />
                                        <?php if ($validation->getError('email')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('email') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>


                                    <div class="form-outline mb-4">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control <?php if ($validation->getError('password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="Contraseña" />
                                        <?php if ($validation->getError('password')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('password') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (session('msg')) : ?>
                                        <div class="alert alert-<?= session('msg.class') ?>" role="alert">
                                            <?= session('msg.body') ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Iniciar</button>
                                    </div>

                                    <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes una cuenta? <a href="<?= base_url(route_to('register')) ?>" style="color: #393f81;">Registrar aquí</a></p>
                                    <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a> -->
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>
<header>
    <!-- Intro settings -->
    <style>
        #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 58px;
        }

        @media (max-width: 991px) {
            #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 45px;
            }
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="/">
                <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy" style="margin-top: -3px;" />
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= service('request')->uri->getPath() == '/' ? 'active' : '' ?>" href="<?= base_url(route_to('home')) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard" rel="nofollow">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= service('request')->uri->getPath() == 'auth/login' ? 'active' : '' ?>
" href="<?= base_url(route_to('login')) ?>">Iniciar Session</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar -->
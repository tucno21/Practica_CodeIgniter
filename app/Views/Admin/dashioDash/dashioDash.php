<?php

// DATOS GENERALES ADMIN
$title = 'Dashio';
$mainLink = base_url(route_to('dashboard'));
$logoAdmin = '/logo/logo.png';
$logoAdminName = '/logo/logo-name.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navNotifications = false;
$navMessages = false;
$navSettings = false;

//DATOS DEL USUARIO ADMIN
$userName = session('username');
$profile = 'Administrador';
$photoUser = '/dashioDash/img/ui-sam.jpg';
$emailUser = 'cc@bb.com';

//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Settings',
        'url'  => 'login/password',
        'icon' => 'settings',
    ],
    [
        'text' => 'Activity Log',
        'url'  => 'dashboard/logs',
        'icon' => 'log-out',
    ],
    [
        'text' => 'Logout',
        'url'  => 'admin/cerrar',
        'icon' => 'log-out',
    ],
];

$linkIconsOrion = '../public/';

//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    [
        'mode' => 'menu',
        'text' => 'Dashboard',
        'url'  => '/',
        'icon' => 'fa fa-dashboard',
    ],
    [
        'header' => 'Addons',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'menu',
        'text' => 'Categorias',
        'url'  => base_url(route_to('categorias')),
        'icon' => 'fa fa-cubes',
    ],
    [
        'mode' => 'menu',
        'text' => 'Post',
        'url'  => base_url(route_to('post')),
        'icon' => 'fa fa-envelope',
    ],
    [
        'header' => 'SUBMENU',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Categorias',
        'url'    => '#',
        'icon' => 'fa fa-envelope',
        'submenu' => [
            [
                'text' => 'Erear',
                'url'  => 'www.google.com',
                'icon' => 'circle ',
            ],
            [
                'text' => 'Editar',
                'url'  => 'www.google.com',
                'icon' => 'circle ',
            ],
        ],
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Productos',
        'url'    => '#',
        'icon' => 'fa fa-envelope',
        'submenu' => [
            [
                'text' => 'Crear',
                'url'  => 'www.google.com',
                'icon' => 'circle ',
            ],
            [
                'text' => 'Editar',
                'url'  => 'www.google.com',
                'icon' => 'circle ',
            ],
        ],
    ],

    [
        'header' => 'CLIENTES',
        'span'  => 'UI Components'
    ],
];



//ENLACES PARA CSS Y JS html
$linkURL = '';

$linksCss = [
    // 'https://use.fontawesome.com/releases/v5.7.1/css/all.css',
    $linkURL . '/dashioDash/vendor/bootstrap/css/bootstrap.min.css',
    $linkURL . '/dashioDash/vendor/font-awesome/css/font-awesome.css',
    $linkURL . '/dashioDash/css/style.css',
    $linkURL . '/dashioDash/css/style-responsive.css',
];

$linksScript = [
    $linkURL . '/dashioDash/vendor/jquery/jquery.min.js',
    $linkURL . '/dashioDash/vendor/bootstrap/js/bootstrap.min.js',
    $linkURL . '/dashioDash/vendor/jquery-ui-1.9.2.custom.min.js',
    $linkURL . '/dashioDash/vendor/jquery.ui.touch-punch.min.js',
    $linkURL . '/dashioDash/vendor/jquery.dcjqaccordion.2.7.js',
    $linkURL . '/dashioDash/vendor/jquery.scrollTo.min.js',
    $linkURL . '/dashioDash/vendor/jquery.nicescroll.js',
    $linkURL . '/dashioDash/js/common-scripts.js',
    'https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js',
    $linkURL . '/dashioDash/js/tinymce.js',
];

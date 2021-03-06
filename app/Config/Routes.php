<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('App\Controllers\Front\Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
//con esto ya no se cambia la ruta o busque el controlador
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//nuevo grupo como base despues de la URL /base
$routes->group('/', ['namespace' => 'App\Controllers\Front'], function ($routes) {
    $routes->get('', 'Home::index', ['as' => 'home']);
    $routes->get('articulos/(:segment)', 'Home::article/$1', ['as' => 'article']);
});

$routes->group('/auth', ['namespace' => 'App\Controllers\Auth'], function ($routes) {
    //creando un alias 'as'
    $routes->get('register', 'Register::register', ['as' => 'register']);
    $routes->get('login', 'Register::login', ['as' => 'login']);
    $routes->post('store', 'Register::store');
    $routes->post('loginstore', 'Register::loginstore');
    $routes->get('logout', 'Register::logout', ['as' => 'logout']);
});

$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth:admin'], function ($routes) {
    $routes->get('dashboard', 'dashboard::index', ['as' => 'dashboard']);

    $routes->get('categorias', 'Category::index', ['as' => 'categorias']);
    $routes->get('categorias/crear', 'Category::create', ['as' => 'categoria_crear']);
    $routes->post('categorias/store', 'Category::store', ['as' => 'categoria_store']);

    $routes->get('categorias/edit/(:any)', 'Category::edit/$1', ['as' => 'categoria_editar']);
    $routes->post('categorias/update', 'Category::update', ['as' => 'categoria_update']);

    $routes->get('categorias/delete/(:any)', 'Category::delete/$1', ['as' => 'categoria_delete']);

    $routes->get('post', 'Post::index', ['as' => 'post']);
    $routes->get('post/crear', 'Post::create', ['as' => 'post_crear']);
    $routes->post('post/store', 'Post::store', ['as' => 'post_store']);
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

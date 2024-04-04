<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FrontendController::index');
// $routes->get('/', 'Home::index');
// $routes->get('login', 'Home::index');

$routes->get('registro', 'RegistroController::new');
$routes->post('registro', 'RegistroController::create');

$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);


$routes->get('noticias', 'FrontendController::noticias');
$routes->get('publicaciones', 'FrontendController::publicaciones');

$routes->get('ofertaeducativa', 'OfertaEducativaController::index');
$routes->get('oe_lae', 'OfertaEducativaController::oe_lae');
$routes->get('oe_lie', 'OfertaEducativaController::oe_lie');
$routes->get('oe_lp', 'OfertaEducativaController::oe_lp');
$routes->get('oe_lpe', 'OfertaEducativaController::oe_lpe');
$routes->get('oe_mmems', 'OfertaEducativaController::oe_mems');


$routes->get('contacto', 'FrontendController::contacto');


// Rutas para la recuperación de contraseña
$routes->get('forgot-password', 'UserController::forgotPasswordForm');
$routes->post('forgot-password', 'UserController::forgotPassword');
$routes->get('reset-password/(:any)', 'UserController::resetPasswordForm/$1');
$routes->post('reset-password', 'UserController::resetPassword');



// Rutas para el administrador
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Admin\AdminController::index');

    $routes->get('usuarios/edit_password/(:num)', 'Admin\UsuarioController::editPassword/$1');
    $routes->post('usuarios/update_password/(:num)', 'Admin\UsuarioController::updatePassword/$1');

	$routes->resource('usuarios', ['controller' => 'Admin\UsuarioController']);
    $routes->resource('contactos', ['controller' => 'Admin\ContactoController']);
    $routes->resource('publicaciones', ['controller' => 'Admin\PublicacionController']);
    $routes->resource('cursos', ['controller' => 'Admin\CursoController']);
    $routes->resource('eventos', ['controller' => 'Admin\EventoController']);
    $routes->resource('noticias', ['controller' => 'Admin\NoticiaController']);

    $routes->get('carousel', 'Admin\CarouselController::index');
    $routes->get('carousel/create', 'Admin\CarouselController::create');
    $routes->post('carousel/store', 'Admin\CarouselController::store');
    $routes->get('carousel/edit/(:num)', 'Admin\CarouselController::edit/$1');
    $routes->put('carousel/update/(:num)', 'Admin\CarouselController::update/$1');
    $routes->get('carousel/delete/(:num)', 'Admin\CarouselController::delete/$1');


    }
);







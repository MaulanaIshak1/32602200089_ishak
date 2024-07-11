<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'HomeController::index');

$routes->get('profile', 'ProfileController::index');
$routes->get('experience', 'ExperienceController::index');

/**routes bab 6 */
$routes->get('crud', 'Crud::index');
$routes->get('crud/tambah', 'Crud::tambah');
$routes->post('crud/tambah', 'Crud::tambah');

$routes->get('crud/hapus/(:num)', 'Crud::hapus/$1');

$routes->get('crud/edit/(:num)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');



$routes->get('form', 'FormController::index');
$routes->post('submit-form', 'FormController::submitForm');

$routes->get('/latihanview', 'HelloWorld::index');

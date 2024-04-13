<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route for the home page
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('/select_course', 'Pages::select_course');
$routes->get('/cbe_rules', 'Pages::cbe_rules');
$routes->get('/exam', 'Pages::exam');
$routes->get('/review', 'Pages::review');
$routes->get('/result', 'Pages::result');
$routes->get('/register', 'Pages::register');
$routes->get('/register', 'Register::register');
$routes->get('/admin', 'Admin::index');
$routes->get('/user', 'Admin::user');
$routes->get('/question_bank', 'Admin::q_bank');
$routes->get('/test', 'Admin::test');
$routes->get('/login', 'Pages::login');
$routes->post('auth/login', 'Auth::login');
$routes->post('register', 'RegisterController::register');



// Route for the admin section's index page
// $routes->get('/admin', 'Admin::index');


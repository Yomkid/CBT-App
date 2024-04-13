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
$routes->get('/send_test_email', 'Pages::emailtest');
$routes->post('auth/login', 'Auth::login');
$routes->post('register', 'RegisterController::register');
// $routes->post('register/check_email', 'RegisterController::check_email');
$routes->post('validate', 'RegisterController::validates');



// Route for the admin section's index page
// $routes->get('/admin', 'Admin::index');


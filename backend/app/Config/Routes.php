<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Users::index');
$routes->get('/', 'Users::login');
$routes->get('/', 'Users::signup');
$routes->get('/', 'Users::moodboard');

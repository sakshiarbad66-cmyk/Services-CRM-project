<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test', 'Test::index');

$routes->get('activity', 'ActivityLog::index');
$routes->get('activity/add', 'ActivityLog::add');

$routes->get('dbtest', 'DbTest::index');

$routes->get('customers', 'CustomerController::index');
$routes->get('customers/add', 'CustomerController::add');

$routes->get('devices', 'DeviceController::index');
$routes->get('devices/add', 'DeviceController::add');

// Engineers
$routes->get('engineers', 'EngineerController::index');
$routes->get('engineers/add', 'EngineerController::add');
$routes->get('engineers/update/(:num)', 'EngineerController::update/$1');
$routes->get('engineers/delete/(:num)', 'EngineerController::delete/$1');

// Roles
$routes->get('roles', 'RoleController::index');
$routes->get('roles/add', 'RoleController::add');
$routes->get('roles/delete/(:num)', 'RoleController::delete/$1');

// Services
$routes->get('services', 'ServiceController::index');
$routes->get('services/add', 'ServiceController::add');
$routes->get('services/update/(:num)', 'ServiceController::update/$1');
$routes->get('services/delete/(:num)', 'ServiceController::delete/$1');

// Tickets
$routes->get('tickets', 'TicketController::index');
$routes->get('tickets/add', 'TicketController::add');
$routes->get('tickets/update/(:num)', 'TicketController::update/$1');
$routes->get('tickets/delete/(:num)', 'TicketController::delete/$1');

// Users
$routes->get('users', 'UserController::index');
$routes->get('users/add', 'UserController::add');
$routes->get('users/(:num)', 'UserController::show/$1');
$routes->get('users/update/(:num)', 'UserController::update/$1');
$routes->get('users/delete/(:num)', 'UserController::delete/$1');

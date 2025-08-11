<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::landing');
$routes->get('Home', 'Home::index');
$routes->get('chat', 'Main::chat_page');
$routes->get('landing', 'Home::landing');
$routes->get('sign_in', 'Auth::sign_in', );
$routes->get('sign_up', 'Auth::sign_up', );
$routes->get('server', 'Server');

$routes->get('t/(:num)', 'ChatNavigation::view/$1');

$routes->POST('t/messages/send', 'SendMessage::send');
$routes->POST('t/messages/fetch', 'FetchMessage::fetch');


$routes->get('test', 'MessageTest::index');

$routes->post('auth/save', 'Auth::save');
$routes->post('auth/check', 'Auth::check');


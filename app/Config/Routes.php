<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::landing');
$routes->get('Home', 'Home::index');
$routes->get('chat', 'Main::chat_page');
$routes->get('landing', 'Home::landing');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('FAQ', 'Home::FAQ');
$routes->get('privacy', 'Home::privacy');
$routes->get('team', 'Home::team');

$routes->get('sign_in', 'Auth::sign_in', );
$routes->get('sign_up', 'Auth::sign_up', );
$routes->get('server', 'Server');

$routes->get('t/(:num)', 'ChatNavigation::view/$1');

$routes->post('t/messages/send', 'MessageDetails::send');
$routes->post('t/messages/fetch', 'MessageDetails::fetch');
$routes->post('t/messages/is_typing', 'IsTypingStatus::is_typing');
$routes->post('t/messages/update_time', 'MessageDetails::updateTime');
$routes->post('t/messages/idle_time', 'MessageDetails::getIdleTime');
$routes->post('t/messages/upload', 'Upload::upload');


$routes->get('test', 'MessageTest::index');

$routes->post('auth/save', 'Auth::save');
$routes->post('auth/check', 'Auth::check');


<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/beranda', 'Web::beranda');
$routes->get('/visiMisi', 'Web::visiMisi');
$routes->get('/sejarah', 'Web::sejarah');
$routes->get('/struktur', 'Web::struktur');
$routes->get('/tugas', 'Web::tugas');
$routes->get('/coba', 'Web::coba');



$routes->get('/artikel/(:segment)', 'Web::artikel/$1');

$routes->get('/kegiatan/(:segment)', 'Web::kegiatan/$1');

$routes->get('/infogempaterkini', 'Web::infogempaterkini');

$routes->post('/simpan', 'Web::simpan');
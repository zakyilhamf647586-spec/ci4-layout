<?php

namespace Config;

$routes = Services::routes();

// Default setup
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// ROUTES KAMU
$routes->get('/', 'Home::index');
$routes->get('produk', 'Home::produk');
$routes->get('keranjang', 'Home::keranjang');
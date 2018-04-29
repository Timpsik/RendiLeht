<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['esemed/indeks'] = 'esemed/indeks';
$route['esemed/lisa'] = 'esemed/lisa';
$route['esemed/uuenda'] = 'esemed/uuenda';

$route['esemed/minu'] = 'esemed/minu';
$route['esemed/kuulutuste_arv'] = 'esemed/kuulutuste_arv';
$route['esemed/(:any)'] = 'esemed/vaata/$1';
$route['esemed'] = 'esemed/indeks';


$route['default_controller'] = 'pages/view';

$route['kategooriad'] = 'kategooriad/indeks';
$route['kategooriad/lisa'] = 'kategooriad/lisa';
$route['kategooriad/esemed/(:any)'] = 'kategooriad/esemed/$1';

$route['kasutajad/väljalogimine'] = 'kasutajad/väljalogimine';
$route['statistika'] = 'statistika/vaata';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

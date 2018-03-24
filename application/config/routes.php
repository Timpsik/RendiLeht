<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['items/index'] = 'items/index';
$route['items/create'] = 'items/create';
$route['items/update'] = 'items/update';
$route['items/(:any)'] = 'items/view/$1';
$route['items'] = 'items/index';

$route['default_controller'] = 'pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/items/(:any)'] = 'categories/items/$1';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

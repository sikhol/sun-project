<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['login'] = 'Login';
$route['batik'] = 'Batik/index';
$route['batik/pagination/(:any)'] = 'Batik/pagination/$1';
$route['admin'] = 'Admin/index';
$route['admin/(:any)'] = 'Admin/index/$1';
$route['admin/create'] = 'admin/create';
$route['admin/create'] = 'admin/ubah';
$route['default_controller'] = 'batik';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

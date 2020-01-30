<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'pages/view';

$route['palavras'] = 'palavras/index';
$route['palavras/ver'] = 'palavras/index';
$route['palavras/ver/(:)'] = 'palavras/ver/$1';
$route['palavras/criar'] = 'palavras/criar';
$route['palavras/editar'] = 'palavras/index';
$route['palavras/editar/(:any)'] = 'palavras/editar/$1';
$route['palavras/apagar'] = 'palavras/index';
$route['palavras/apagar/(:any)'] = 'palavras/apagar/$1';

$route['referencias'] = 'referencias/index';
$route['referencias/criar'] = 'referencias/criar';
$route['referencias/editar'] = 'referencias/index';
$route['referencias/editar/(:any)'] = 'referencias/editar/$1';
$route['referencias/apagar'] = 'referencias/index';
$route['referencias/apagar/(:any)'] = 'referencias/apagar/$1';

$route['usuarios'] = 'usuarios/index';
$route['usuarios/criar'] = 'usuarios/criar';
$route['usuarios/editar'] = 'usuarios/index';
$route['usuarios/editar/(:any)'] = 'usuarios/editar/$1';
$route['usuarios/apagar'] = 'usuarios/index';
$route['usuarios/apagar/(:any)'] = 'usuarios/apagar/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


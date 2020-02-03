<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';

$route['busca'] = 'pages/index';
$route['busca/resultado/(:any)'] = 'pages/lista_resultados/$1';
$route['busca/visualizar/(:num)'] = 'pages/ver_resultado/$1';

$route['palavras'] = 'palavras/index';
//$route['palavras/ver'] = 'palavras/index';
$route['palavras/ver/(:num)'] = 'palavras/ver/$1';
$route['palavras/criar'] = 'palavras/criar';
//$route['palavras/editar'] = 'palavras/index';
$route['palavras/editar/(:any)'] = 'palavras/editar/$1';
//$route['palavras/apagar'] = 'palavras/index';
$route['palavras/apagar/(:any)'] = 'palavras/apagar/$1';

$route['palavras/(:num)/equivalentes'] = 'equivalentes/index/$1';
$route['palavras/(:num)/equivalentes/criar'] = 'equivalentes/criar/$1';
//$route['palavras/(:num)/equivalentes/editar'] = 'equivalentes/index/$1';
$route['palavras/(:num)/equivalentes/editar/(:num)'] = 'equivalentes/editar/$1/$2';
//$route['palavras/(:num)/equivalentes/apagar'] = 'equivalentes/index/$1';
$route['palavras/(:num)/equivalentes/apagar/(:num)'] = 'equivalentes/apagar/$1/$2';

$route['palavras/(:num)/frase'] = 'fraseologia/index/$1';
$route['palavras/(:num)/frase/criar'] = 'fraseologia/criar/$1';
//$route['palavras/(:num)/frase/editar'] = 'fraseologia/index/$1';
$route['palavras/(:num)/frase/editar/(:any)/(:any)/(:any)'] = 'fraseologia/editar/$1/$2/$3/$4';
//$route['palavras/(:num)/frase/apagar'] = 'fraseologia/index/$1';
$route['palavras/(:num)/frase/apagar/(:any)/(:any)/(:any)'] = 'fraseologia/apagar/$1/$2/$3/$4';

$route['palavras/(:num)/conjugacao/(:any)'] = 'conjugacao/index/$1/$2';
//$route['palavras/(:num)/conjugacao'] = 'palavra/index/$1';

$route['referencias'] = 'referencias/index';
$route['referencias/criar'] = 'referencias/criar';
//$route['referencias/editar'] = 'referencias/index';
$route['referencias/editar/(:any)'] = 'referencias/editar/$1';
//$route['referencias/apagar'] = 'referencias/index';
$route['referencias/apagar/(:any)'] = 'referencias/apagar/$1';

$route['usuarios'] = 'usuarios/index';
$route['usuarios/criar'] = 'usuarios/criar';
//$route['usuarios/editar'] = 'usuarios/index';
$route['usuarios/editar/(:any)'] = 'usuarios/editar/$1';
//$route['usuarios/apagar'] = 'usuarios/index';
$route['usuarios/apagar/(:any)'] = 'usuarios/apagar/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


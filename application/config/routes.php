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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Universitas';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Route CRUD Mahasiswa 
$route['mahasiswa'] = 'Mahasiswa_controller';
$route['mahasiswa/create'] = "Mahasiswa_controller/create";
$route['mahasiswa/create/action']['post'] = "Mahasiswa_controller/store";
$route['mahasiswa/edit/(:any)'] = "Mahasiswa_controller/edit/$1";
$route['mahasiswa/update/(:any)']['post'] = "Mahasiswa_controller/update/$1";
$route['mahasiswa/delete/(:any)']['delete'] = "Mahasiswa_controller/delete/$1";

// Route Jurusan
$route['jurusan'] = 'Jurusan_controller';
$route['jurusan/create'] = "Jurusan_controller/create";
$route['jurusan/create/action']['post'] = "Jurusan_controller/store";
$route['jurusan/edit/(:any)'] = "Jurusan_controller/edit/$1";
$route['jurusan/update/(:any)']['post'] = "Jurusan_controller/update/$1";
$route['jurusan/delete/(:any)']['delete'] = "Jurusan_controller/delete/$1";

// Route Prodi
$route['prodi'] = 'Prodi_controller';
$route['prodi/create'] = "Prodi_controller/create";
$route['prodi/create/action']['post'] = "Prodi_controller/store";
$route['prodi/edit/(:any)'] = "Prodi_controller/edit/$1";
$route['prodi/update/(:any)']['post'] = "Prodi_controller/update/$1";
$route['prodi/delete/(:any)']['delete'] = "Prodi_controller/delete/$1";

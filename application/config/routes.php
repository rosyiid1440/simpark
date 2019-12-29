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
$route['default_controller'] = 'Home';

$route['denahlokasi'] = 'Home/denah_lokasi';
$route['areamobil'] = 'Home/area_mobil';
$route['areamotor'] = 'Home/area_motor';

$route['register'] = 'RegisterController';
$route['registeruser'] = 'RegisterController/register_user';
$route['registeruser/store'] = 'RegisterController/store';
$route['registerkendaraan'] = 'RegisterController/register_kendaraan';
$route['registerkendaraan/store'] = 'RegisterController/storekendaraan';

$route['irr'] = 'Login/index';
$route['irr/auth'] = 'Login/process_login';
$route['logout'] = 'Login/logout';

$route['dashboard'] = 'Dashboard';
$route['dashboard/areaparkir'] = 'Areaparkir';
$route['dashboard/areaparkir/tambah'] = 'Areaparkir/create';
$route['dashboard/areaparkir/tambah/valid'] = 'Areaparkir/store';
$route['dashboard/areaparkir/edit/(:any)'] = 'Areaparkir/edit/$1';
$route['dashboard/areaparkir/update/(:any)'] = 'Areaparkir/update/$1';
$route['dashboard/areaparkir/hapus/(:any)'] = 'Areaparkir/hapus/$1';

$route['dashboard/user/admin'] = 'Users/admin';
$route['dashboard/user/petugas'] = 'Users/petugas';
$route['dashboard/user/user'] = 'Users/user';

$route['dashboard/user/detailadmin/(:any)'] = 'Users/detailadmin/$1';
$route['dashboard/user/detailuser/(:any)'] = 'Users/detailuser/$1';

$route['dashboard/user/tambah'] = 'Users/create';
$route['dashboard/user/tambah/valid'] = 'Users/store';

$route['dashboard/user/edit/(:any)'] = 'Users/edit/$1';
$route['dashboard/user/editpetugas/(:any)'] = 'Users/editpetugas/$1';
$route['dashboard/user/editpemarkir/(:any)'] = 'Users/editpemarkir/$1';

$route['dashboard/user/update/(:any)'] = 'Users/update/$1';
$route['dashboard/user/hapus/(:any)'] = 'Users/hapus/$1';

$route['dashboard/pemarkir/detail'] = 'Pemarkir/index';
$route['dashboard/pemarkir/kendaraan/tambah'] = 'Pemarkir/createkendaraan';
$route['dashboard/pemarkir/kendaraan/valid'] = 'Pemarkir/storekendaraan';
$route['dashboard/pemarkir/kendaraan/delete/(:any)'] = 'Pemarkir/delete/$1';

$route['dashboard/pemarkir/booking'] = 'Pemarkir/booking';
$route['dashboard/pemarkir/booking/tambah'] = 'Pemarkir/createbooking';
$route['dashboard/pemarkir/booking/valid'] = 'Pemarkir/storebooking';

$route['dashboard/pemarkir/profile/update'] = 'Pemarkir/updateprofile';

$route['dashboard/petugas/detail'] = 'Petugas/index';
$route['dashboard/petugas/parkir'] = 'Petugas/indexparkir';
$route['dashboard/petugas/parkir/tambah'] = 'Petugas/createparkir';
$route['dashboard/petugas/parkir/masuk/(:any)'] = 'Petugas/masuk/$1';
$route['dashboard/petugas/parkir/keluar/(:any)'] = 'Petugas/keluar/$1';
$route['dashboard/petugas/parkir/tambah/kendaraan'] = 'Petugas/kendaraan';
$route['dashboard/petugas/parkir/valid'] = 'Petugas/storeparkir';
$route['dashboard/petugas/profile/update'] = 'Petugas/updateprofile';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

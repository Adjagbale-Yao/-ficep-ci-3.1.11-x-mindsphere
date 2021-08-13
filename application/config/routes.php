<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'auth/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//routes added
$route['home']['POST'] = 'home';
$route['home']['GET'] = 'home/index';
$route['home/grid-view']['GET'] = 'home/gridView';
$route['home/grid-view']['POST'] = 'home/gridView';
$route['home/upload']['GET'] = 'home/upload';
$route['home/upload']['POST'] = 'home/upload';
$route['home/alarms'] = 'home/alarms';
$route['home/subscription'] = 'home/subscription';
$route['home/data-mapping'] = 'home/data_mapping';
$route['home/axys-monitoring'] = 'home/axysMonitoring';
$route['home/parameters'] = 'home/parameters';
$route['home/breakdowns-list-view'] = 'home/breakdownsListView';
$route['home/maintenance-list-view'] = 'home/maintenanceListView';
$route['home/machine-monitoring/(:any)'] = 'home/machineMonitoring/$1';
$route['home/oee'] = 'home/oee';
$route['home/kpi-process-log'] = 'home/kpi_processLog';
$route['home/kpi-analytics'] = 'home/kpi_analytics';
$route['home/breakdowns-kpi'] = 'home/breakdowns_kpi';
$route['home/maintenance-kpi'] = 'home/maintenance_kpi';
$route['home/electrical'] = 'home/electrical';
$route['home/water'] = 'home/water';
$route['home/map-view'] = 'home/maps';
//ion-auth
$route['auth/login'] = 'auth/login';
#$route['login'] = 'login/login';
$route['auth/logout'] = 'auth/logout';
$route['auth/forgot_password'] = 'auth/forgot_password';





// $routes->get('/', 'Auth::index');
// $routes->get('/login', 'Login::login');
// $routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
//     $routes->get('/', 'Auth::index');
//     $routes->add('login', 'Auth::login');
//     $routes->get('logout', 'Auth::logout');
//     $routes->get('forgot_password', 'Auth::forgot_password');
// });
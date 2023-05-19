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

$route['users/list'] = 'users/index';
$route['users/create'] = 'users/create';
$route['user/view/(:any)'] = 'users/view/$1';
$route['user/update/(:any)'] = 'users/update/$1';

$route['plugins/research'] = 'plugins/index';
$route['plugins/create'] = 'plugins/create';
$route['plugins/view/(:any)'] = 'plugins/view/$1';
$route['plugins/update/(:any)'] = 'plugins/update/$1';


$route['plugins/not-safe'] = 'plugins/not_safe_plugins';
$route['plugins/approved'] = 'plugins/approved_plugins';
$route['plugins/for-review'] = 'plugins/review';
$route['plugins/for-review-view/(:any)'] = 'plugins/review_view/$1';

$route['home'] = 'main/home';
$route['approved-list'] = 'main/approved_list';
$route['not-safe-list'] = 'main/not_safe_list';
$route['view/plugin/id-(:any)'] = 'main/view/$1';

$route['logout'] = 'login/logout';
$route['login'] = 'login';
$route['dashboard'] = 'main/index';
$route['default_controller'] = 'main/home';
$route['404_override'] = 'main/error_page';
$route['translate_uri_dashes'] = FALSE;

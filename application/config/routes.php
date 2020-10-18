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
$route['default_controller'] = 'main_controller/view_mesta';//main_controller/view_mesta
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['mesta'] = 'main_controller/view_mesta';
$route['mesta/(\d+)'] = 'main_controller/view_mesta/$1';
$route['mesta/(\d+)(\d+)'] = 'main_controller/view_mesta/$1/$2';

$route['skoly'] = 'main_controller/view_skoly';
$route['skoly/(\d+)'] = 'main_controller/view_skoly/$1';
$route['skoly/(\d+)/(\d+)'] = 'main_controller/view_skoly/$1/$2';

$route['obory'] = 'main_controller/view_obory';
$route['obory/(\d+)'] = 'main_controller/view_obory/$1';

$route['pocet-prijatych'] = 'main_controller/view_pocet_prijatych';
$route['pocet-prijatych/(\d+)'] = 'main_controller/view_pocet_prijatych/$1';

$route['zpetne-vazby'] = 'main_controller/view_zpetne_vazby';
$route['zpetne-vazby/(\d+)'] = 'main_controller/view_zpetne_vazby/$1';
$route['mapa'] = 'main_controller/create_map_config';

//$route['mesto'] = 'main_controller/view_by_mesto';

$route['mesto/(\d+)/(\d+)'] = 'main_controller/view_by_mesto/$1/$2';
$route['mesto/(\d+)'] = 'main_controller/view_by_mesto/$1';
$route['obor/(\d+)'] = 'main_controller/view_by_obor/$1';
$route['obor/(\d+)/(\d+)'] = 'main_controller/view_by_obor/$1/$2';


$route['skola'] = 'main_controller/view_by_skola';
$route['skola/(\d+)'] = 'main_controller/view_by_skola/$1';
$route['skola/(\d+)/(\d+)'] = 'main_controller/view_by_skola/$1/$2';
$route['skola/(\d+)/(\d+)/(\d+)'] = 'main_controller/view_by_skola/$1/$2/$3';

$route['obor'] = 'main_controller/view_by_obor';
$route['obor/(\d+)'] = 'main_controller/view_by_obor/$1';
$route['skola/(\d+)/(\d+)'] = 'main_controller/view_by_obor/$1/$2';
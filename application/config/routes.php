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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['detailpage'] = 'detailpage';

 // FOR ADMIN SIDE
$route['cms'] = 'cms/login';
$route['cms/loginMe'] = 'cms/login/loginMe';
$route['cms/dashboard'] = 'cms/user';
$route['cms/logout'] = 'cms/user/logout';
$route['cms/listing'] = 'cms/offer_list';
$route['cms/listing/add'] = 'cms/offer_list/newlist';
$route['cms/list'] = 'cms/offer_list/singleLlist';
$route['cms/list/(:num)'] = "cms/offer_list/singleList/$1";

// not belong to us right now have to check and refine these
$route['cms/userListing'] = 'cms/user/userListing';
$route['cms/userListing/(:num)'] = "cms/user/userListing/$1";
$route['cms/addNew'] = "cms/user/addNew";


$route['cms/request'] = 'cms/request_list/request';
$route['cms/request/(:num)'] = "cms/request_list/request/$1";

//travel user listing
$route['cms/travelers'] = 'cms/request_list/listUsers';
$route['cms/traveler'] = 'cms/request_list/traveler';
$route['cms/traveler/(:num)'] = 'cms/request_list/traveler/$1';

$route['cms/closed_request'] = 'cms/request_list/closedreq';

$route['cms/addNewUser'] = "cms/user/addNewUser";
$route['cms/editOld'] = "cms/user/editOld";
$route['cms/editOld/(:num)'] = "cms/user/editOld/$1";
$route['cms/editUser'] = "cms/user/editUser";
$route['cms/deleteUser'] = "cms/user/deleteUser";
$route['cms/loadChangePass'] = "cms/user/loadChangePass";
$route['cms/changePassword'] = "cms/user/changePassword";
$route['cms/checkEmailExists'] = "cms/user/checkEmailExists";

$route['cms/forgotPassword'] = "cms/login/forgotPassword";
$route['cms/resetPasswordUser'] = "cms/login/resetPasswordUser";
$route['cms/resetPasswordConfirmUser'] = "cms/login/resetPasswordConfirmUser";
$route['cms/resetPasswordConfirmUser/(:any)'] = "cms/login/resetPasswordConfirmUser/$1";
$route['cms/resetPasswordConfirmUser/(:any)/(:any)'] = "cms/login/resetPasswordConfirmUser/$1/$2";
$route['cms/createPasswordUser'] = "cms/login/createPasswordUser";
$route['cms/pageNotFound'] = "cms/user/pageNotFound";



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
$route['default_controller'] = 'blog';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about']='blog/about';
$route['singlepost']='blog/singlepost';
$route['contact']='blog/contact';
$route['singup']='blog/singup';
$route['login']='login/index';
$route['allblog']='blog/allblog';
$route['admin']='admin/index';
$route['admin/(:any)']='admin/index/$1';
$route['post']='admin/post';
$route['post/(:any)']='admin/post/$1';
$route['addpost']='admin/addpost';
$route['add_post']='user/addpost';
$route['header']='admin/header';
$route['aboutpage']='admin/aboutpage';
$route['addheader']='admin/addheader';
$route['popularartical']='admin/popularartical';
$route['addpopulararticul']='admin/addpopulararticul';
$route['eidthpopaluralaartic']='admin/eidthpopaluralaartic';
$route['eidthpost']='admin/eidt_post';
$route['addaboutpage']='admin/addaboutpage';
$route['contmesg']='admin/contmesg';
$route['author']='admin/author';




$route['savehdr'] = 'admin/savehdr';
$route['savepopularartical'] = 'admin/savepopularartical';
$route['savepost']='admin/savepost';
$route['saveaboutpage']='admin/saveaboutpage';
$route['saveaddpost']='admin/saveaddpost';
//**author */
$route['author']='admin/author';
$route['author/(:any)']='admin/author/$1';
$route['addauthor']='admin/addauthor';
$route['saveaddauthor']='admin/saveaddauthor';
$route['saveauthor']='admin/saveauthor';
$route['savecontmesg']='admin/savecontmesg';

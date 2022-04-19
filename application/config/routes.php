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
/* $route['default_controller'] = 'Skin_blog'; */

$route['404_override'] = 'Custom404';
$route['default_controller'] = 'Home';
$route['about-us'] = "Home/about_us";
$route['contact-us'] = "Home/contact_us";
$route['disclaimer'] = "Home/disclaimer";
$route['privacyPolicy'] = "Home/privacyPolicy";
$route['termsncondition'] = "Home/termsncondition";
$route['sitemap'] = "Home/sitemap";

/*  # Skin Ruting # Manisha mam Routing */
$route['skin/skin'] = "skin/skin_index";
$route['skin/gallery'] = "skin/gallery";
$route['skin/treatment'] = "skin/treatment";
$route['skin/acnescar'] = "skin/acnescar";
$route['skin/chemicalpeeling'] = "skin/chemicalpeeling";
$route['skin/cosmetictreatment'] = "skin/cosmetictreatment";
$route['skin/hairdisorder'] = "skin/hairdisorder";
$route['skin/leprosy'] = "skin/leprosy";
$route['skin/sexuallytrasmitted'] = "skin/sexuallytrasmitted";
$route['skin/skinbiopsy'] = "skin/skinbiopsy";
$route['skin/skindisorder'] = "skin/skindisorder";

/*  # Skin Ruting # Blogs  Routing */
$route['skin-blogs'] = "Skin_blog/indexss/"; 
$route['skin-blogs/(:any)'] = "Skin_blog/indexss/$1"; 
  
$route['skin-blog/(:any)'] = "Skin_blog/blog_single/$1";
$route['skin-tag/(:any)'] = "Skin_blog/blog_tag/$1";
$route['skin-categories/(:any)'] = "Skin_blog/skin_categories/$1";

$route['skin-blog-search'] = "Skin_blog/search_blogs/"; 


/*  # Indovascutour Ruting   */
$route['endovascular'] = "endovascular/endo_index";
$route['endo/about-us']= "endovasular/about";
$route['endovascular-treatment'] = "endovascular/endo_treatment";
$route['endo-gallery']= "endovascular/endo_gallery";
$route['leg'] ="endovascular/leg";
$route['lung'] ="endovascular/lung";
$route['men'] = "endovascular/men";
$route['women'] ="endovascular/women";

/*  # Indovascutour Blogs #  Routing */
$route['endovascular-blogs'] = "Endovascular_blog/indexss/"; 
$route['endovascular-blogs/(:any)'] = "Endovascular_blog/indexss/$1"; 

$route['endovascular-blog/(:any)'] = "Endovascular_blog/blog_single/$1";
$route['endovascular-tag/(:any)'] = "Endovascular_blog/blog_tag/$1";
$route['endovascular-categories/(:any)'] = "Endovascular_blog/endovascular_categories/$1";
$route['endovascular-blog-search'] = "Endovascular_blog/search_blogs/"; 





$route['translate_uri_dashes'] = FALSE;



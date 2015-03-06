<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['listen/(:any)']                   = "series/listen/$1";
$route['default_controller']              = "series";
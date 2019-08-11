<?php

// included all the required files
require_once 'config.php';
// You can write unit level functions in this file like validation functions.
require_once 'unit_functions.php';
// Declare your constants like paths and urls
require_once 'constants.php';
// Get all about requests like client id, query string etc.
require_once 'system/request.php';
// base class of system
require_once 'system/BaseController.php';




$objBaseController = new BaseController();
$objParam = $objBaseController->getQueryParams();
// Included system class
require 'system/system.php';

if( !property_exists( $objParam, 'module') ){
	$objParam->module = NULL;
}
if( !property_exists( $objParam, 'action') ){
	$objParam->action = NULL;
}

$objSystem = new MySystem( $objParam->module, $objParam->action );
$class = $objSystem->getController();
$method = $objSystem->getMethod();
// calling method from BaseController
if( 'BaseController' == $objSystem->getController() ){
	$objBaseController->$method();
	die();
}
require_once 'controller/' . $objSystem->getController() . '.php';
// calling controller method

$objController = new $class();
$objController->$method();
die();


?>

<?php
// ===========================================================================================
//
// index.php
//
// Description: This page handles all requests.
//
// -------------------------------------------------------------------------------------------
//

// -------------------------------------------------------------------------------------------
// PHASE: BOOTSTRAP
// -------------------------------------------------------------------------------------------
define('TRUEPASSION_INSTALL_PATH', dirname(__FILE__));
define('TRUEPASSION_SITE_PATH', TRUEPASSION_INSTALL_PATH . '/site');

require(TRUEPASSION_INSTALL_PATH.'/src/bootstrap.php');

$tp = CTruePassion::Instance();

// -------------------------------------------------------------------------------------------
// PHASE: FRONTCONTROLLER ROUTE
// -------------------------------------------------------------------------------------------
$tp->FrontControllerRoute();

// -------------------------------------------------------------------------------------------
// PHASE: THEME ENGINE RENDER
// -------------------------------------------------------------------------------------------
$tp->ThemeEngineRender();
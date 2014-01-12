<?php
// ===========================================================================================
//
// src/bootstrap.php
//
// Description: Autoloading class files. Bootstrapping, setting up and loading the core.
//
// @package TruePassionCore
//
// -------------------------------------------------------------------------------------------
//

// Enable auto-load of class declarations.
// -------------------------------------------------------------------------------------------
 function autoload($aClassName) {
    $classFile = "/src/{$aClassName}/{$aClassName}.php";
      $file1 = TRUEPASSION_SITE_PATH . $classFile;          // TRUEPASSION_SITE_PATH and TRUEPASSION_INSTALL_PATH
      $file2 = TRUEPASSION_INSTALL_PATH . $classFile;       // are defined in index.php
      if(is_file($file1)) {
        require_once($file1); 
      }
      elseif(is_file($file2)) {
        require_once($file2);
      }
  }
   
// http://php.net/manual/en/function.spl-autoload-register.php   
  spl_autoload_register('autoload');
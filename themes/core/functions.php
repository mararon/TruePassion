<?php
// ===========================================================================================
//
// core/functions.php
//
// Description: Helpers for the template file.
//
// -------------------------------------------------------------------------------------------
//

// -------------------------------------------------------------------------------------------
// Print DEBUG INFORMATION from the framework.
// -------------------------------------------------------------------------------------------
  function get_debug() {
    $tp = CTruePassion::Instance();
    $html = "<h2>Debug Information</h2><hr />";
	$html .="<p>The content of the config array:</p><pre>" . htmlentities(print_r($tp->config, true)) . "</pre>";
    $html .= "<hr /><p>The content of the data array:</p><pre>" . htmlentities(print_r($tp->data, true)) . "</pre>";
    $html .= "<hr /><p>The content of the request array:</p><pre>" . htmlentities(print_r($tp->request, true)) . "</pre>";
    return $html; 
  }

// -------------------------------------------------------------------------------------------  
// Create a url by prepending the base_url.
// -------------------------------------------------------------------------------------------
    function base_url($url) {
      return CTruePassion::Instance()->request->base_url . trim($url, '/');
    }	

// -------------------------------------------------------------------------------------------
// Return the current url.
// -------------------------------------------------------------------------------------------
    function current_url() {
      return CTruePassion::Instance()->request->current_url;
    }
	

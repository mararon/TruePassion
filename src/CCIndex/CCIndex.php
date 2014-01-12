<?php
// ===========================================================================================
//
// src/CCIndex.php
//
// Description: Standard controller layout.
//
// @package TruePassionCore
//
// -------------------------------------------------------------------------------------------
//

  class CCIndex implements IController {

// -------------------------------------------------------------------------------------------
// Implementing interface IController. All controllers must have an index action.
// -------------------------------------------------------------------------------------------
  public function Index() {  
    $this->Menu();
  }	 	 
	 
// -------------------------------------------------------------------------------------------
// Create a method that shows the menu, same for all methods
// -------------------------------------------------------------------------------------------
  private function Menu() {  
    $tp = CTruePassion::Instance();
    $menu = array('index', 'index/index', 'index/links', 'developer');
    
    $html = null;
    foreach($menu as $val) {
      $html .= "<li><a href='" . $tp->request->CreateUrl($val) . "'>$val</a>";  
    }
    
    $tp->data['title'] = "The Index Controller";
	$tp->data['header'] = "<h1>The Index Controller</h1>";	
    $tp->data['main'] = <<<EOD
<p>This is what you can do for now:</p>
<ul>
$html
</ul>
EOD;
	$tp->data['footer'] = '<p>Footer: From Lydia, &copy; by Mikael Roos (mos@dbwebb.se)</p>'; 

  }   

// -------------------------------------------------------------------------------------------
// Create a list of links in the supported ways.
// -------------------------------------------------------------------------------------------
  public function Links() {  
    $this->Menu();
    
    $tp = CTruePassion::Instance();
    
    $url = 'index/links';	
    $current      = $tp->request->CreateUrl($url);

    $tp->request->cleanUrl = false;
    $tp->request->querystringUrl = false;    
    $default      = $tp->request->CreateUrl($url);
    
    $tp->request->cleanUrl = true;
    $clean        = $tp->request->CreateUrl($url);    
    
    $tp->request->cleanUrl = false;
    $tp->request->querystringUrl = true;    
    $querystring  = $tp->request->CreateUrl($url);
    
$tp->data['main'] .= <<<EOD
<h2>CRequest::CreateUrl()</h2>
<p>Here is a list of urls created using above method with various settings. All links should lead to
this same page.</p>
<ul>
<li><a href='$current'>This is the current setting</a>
<li><a href='$default'>This would be the default url</a>
<li><a href='$clean'>This should be a clean url</a>
<li><a href='$querystring'>This should be a querystring like url</a>
</ul>
<p>Enables various and flexible url-strategy.</p>
EOD;
  }

  } //END OF CLASS
<?php

	function parse_path() {
	  $path = array();
	  if (isset($_SERVER['REQUEST_URI'])) {
	    $request_path = explode('?', $_SERVER['REQUEST_URI']);
	
	    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
	    $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
	    $path['call'] = utf8_decode($path['call_utf8']);
	    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
	      $path['call'] = '';
	    }
	    $path['call_parts'] = explode('/', $path['call']);
	
	    
	  }
	return $path;
	}
	
	$path_info = parse_path();
	
?>
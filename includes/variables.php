<?php
	
	$host = $_SERVER['SERVER_NAME'];
	if($host == "fbdev.somethingmassive.com"){
		$mainpath = "//fbdev.somethingmassive.com/";
	} 

	
	$page = basename($_SERVER['REQUEST_URI']);

	$title 		 = "";
	$description = "";
	$keywords    = "";
	$type 		 = "website";
	$OG_description = "";
	$FBID = "";
	$shareimg = "http:".$mainpath."images/fb_thumb.jpg";
	$copyright   = ""

?>
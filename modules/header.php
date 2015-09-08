<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" itemscope itemtype="http://schema.org/Movie">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php echo $title ?></title>

	<!-- Metatags -->
		<meta name="title" content="<?php echo $title ?>" /> 
		<meta name="description" content="<?php echo $description ?>" /> 
		<meta name="keywords" content="<?php echo $keywords ?>" /> 
		<meta property="og:type" content="<?php echo $type ?>" />
		<meta property="og:site_name" content="<?php echo $title ?>" /> 
		<meta property="og:url" content="http:<?php echo $mainpath ?>" />
		<meta property="og:title" content="<?php echo $title ?>" />
		<meta property="og:description" content="<?php echo $OG_description ?>" />
		<meta property="og:image" content="<?php echo $shareimg ?>" /> 
     
	<!-- Add the following three tags inside head. -->
		<meta itemprop="name" content="<?php echo $title ?>">
		<meta itemprop="description" content="<?php echo $description ?>">
		<meta itemprop="image" content="<?php echo $shareimg ?>">
	
	 <!-- links, favicon, and styles -->
        <link rel="canonical" href="http:<?php echo $mainpath ?>">
        <link rel="stylesheet" href="<?php echo $mainpath ?>css/styles.css"/>

	<!-- scripts -->
	
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo $mainpath ?>js/source.js"></script>
        
       <?php if ($page == 'index.php') {
       		$pagename = "index.php";
       		}else{
	       		$pagename = "rules";
       		}
       ?>
                                                                                   	
</head>
<body>
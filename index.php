<?php
require('backend/wp/wp-blog-header.php');
require('frontend/shared/header.php');

$page = isset($_GET['page']) ? trim(strtolower($_GET['page'])) : "home";
$allowedPages = array(

  'home'            	   => './frontend/templates/default.php',
	'work'						    => './frontend/templates/work.php',
	'blog'						    => './frontend/templates/blog.php',
	'pricing'            	 => './frontend/templates/pricing.php',
	'contact'            	 => './frontend/templates/contact.php',
	'quote'             	 => './frontend/templates/quote.php',
	
	'support'             	 => './frontend/templates/support.php',
	'aboutus'             	 => './frontend/templates/aboutus.php',
	
	// Shop
	'store'               => './frontend/store/store.php',
	
	// Account
	'login'								=> './frontend/account/login.php',
	'dashboard'             => './frontend/account/dashboard.php',
	
	
	'lostpassword'        => './frontend/account/lostpassword.php',
	
	// 404
	'404'             	   => './frontend/shared/404.php',

);

include( isset($allowedPages[$page]) ? $allowedPages[$page] : $allowedPages["404"] );

require('frontend/shared/footer.php');
?>
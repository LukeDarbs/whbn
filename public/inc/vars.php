<?php

// Dynamically determine root directory regardless of server. Based on the excellent: 
// http://blog.lavoie.sl/2013/02/php-document-root-path-and-url-detection.html
// ==================================================================================

	$base_dir	= __FILE__; // Absolute path to your installation, ex: /var/www/mywebsite
	$doc_root	= preg_replace("!{$_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']); # ex: /var/www
	$base_url	= preg_replace("!^{$doc_root}!", '', $base_dir); # ex: '' or '/mywebsite'
	$protocol	= empty($_SERVER['HTTPS']) ? 'http' : 'https';
	$port 		= $_SERVER['SERVER_PORT'];
	$disp_port	= ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
	$domain		= $_SERVER['SERVER_NAME'];
	// $site_root	= "$protocol://{$domain}{$disp_port}{$base_url}"; # Ex: 'http://example.com', 'https://example.com/mywebsite', etc.
	// $site_root	= substr( $site_root, 0, -(strlen( "inc/vars.php" )));
	
	$site_root	= "http://".$_SERVER['SERVER_NAME']."/";

	global $site_root;


?>
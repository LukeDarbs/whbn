<?php

// Dynamically determine root directory regardless of server…
// ==================================================================================

	// these two supplements from http://www.londatiga.net/it/how-to-define-global-absolute-path-in-php/
	define('ROOT_DIR', dirname(__FILE__));
	define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));

	// the rest based on http://blog.lavoie.sl/2013/02/php-document-root-path-and-url-detection.html
	$base_dir  = __DIR__ ; // Absolute path to your installation, ex: /var/www/mywebsite
	$doc_root  = preg_replace("!{$_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']); # ex: /var/www
	$base_url  = preg_replace("!^{$doc_root}!", '', $base_dir); # ex: '' or '/mywebsite'
	$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
	$port      = $_SERVER['SERVER_PORT'];
	$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
	$domain    = $_SERVER['SERVER_NAME'];
	$full_url  = "$protocol://{$domain}{$disp_port}{$base_url}"; # Ex: 'http://example.com', 'https://example.com/mywebsite', etc.
	// $full_url  = "$protocol://{$domain}{$disp_port}".ROOT_URL; # Ex: 'http://example.com', 'https://example.com/mywebsite', etc.
	$site_root = substr($full_url, 0, 4)  . "/" ;

	global $site_root;


?>
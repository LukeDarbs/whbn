<?php

// Dynamically determine root directory regardless of server…
// ==================================================================================

	// these two supplements from http://www.londatiga.net/it/how-to-define-global-absolute-path-in-php/
	define('ROOT_DIR', dirname(__FILE__));
	define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
	// the rest based on http://blog.lavoie.sl/2013/02/php-document-root-path-and-url-detection.html
	$domain    = $_SERVER['SERVER_NAME'];
	$full_url  = "https://{$domain}".ROOT_URL; # Ex: 'http://example.com', 'https://example.com/mywebsite', etc.

	$site_root = substr($full_url, 0, - strlen("inc/"))  . "/" ;

	global $site_root;


?>

<?php

set_include_path( "inc/" );

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
	// $full_url  = "$protocol://{$domain}{$disp_port}{$base_url}"; # Ex: 'http://example.com', 'https://example.com/mywebsite', etc.
	$full_url  = "$protocol://{$domain}{$disp_port}".ROOT_URL; # Ex: 'http://example.com', 'https://example.com/mywebsite', etc.
	$site_root = $full_url . "/" ;

	global $site_root;

include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['reward_brand'];

	$prev_post = $post_info['nba_payback'];
	$next_post = $post_info['reward_website'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<ul>
				<li>
					<h4>ROOT_DIR</h4>
					<p><?php echo ROOT_DIR; ?></p>
				</li>
				<li>
					<h4>ROOT_URL</h4>
					<p><?php echo ROOT_URL; ?></p>
				</li>
				<li>
					<h4>__FILE__</h4>
					<p><?php echo __FILE__; ?></p>
				</li>
				<li>
					<h4>__DIR__</h4>
					<p><?php echo __DIR__; ?></p>
				</li>
				<li>
					<h4>$base_dir</h4>
					<p><?php echo $base_dir; ?></p>
				</li>
				<li>
					<h4>$doc_root</h4>
					<p><?php echo $doc_root; ?></p>
				</li>
				<li>
					<h4>$base_url</h4>
					<p><?php echo $base_url; ?></p>
				</li>
				<li>
					<h4>$protocol</h4>
					<p><?php echo $protocol; ?></p>
				</li>
				<li>
					<h4>$port</h4>
					<p><?php echo $port; ?></p>
				</li>
				<li>
					<h4>$disp_port</h4>
					<p><?php echo $disp_port; ?></p>
				</li>
				<li>
					<h4>$domain</h4>
					<p><?php echo $domain; ?></p>
				</li>
				<li>
					<h4>$site_root</h4>
					<p><?php echo $site_root; ?></p>
				</li>
				<li>
					<h4>$full_url</h4>
					<p><?php echo $full_url; ?></p>
				</li>
			</ul>

		</article> <!-- /.container -->



<?php include("end.php"); ?>



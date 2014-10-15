<?php

set_include_path( "" );

// Dynamically determine root directory regardless of server. Based on the excellent: 
// http://blog.lavoie.sl/2013/02/php-document-root-path-and-url-detection.html
// ==================================================================================

	define('ROOT_DIR', dirname(__FILE__));
	define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));

	$site_root	= "";

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
					<h4>dirname( __FILE__ ) . '/../header.php'</h4>
					<p><?php echo dirname( __FILE__ ) . '/../header.php'; ?></p>
				</li>
				<li>
					<h4>dirname( __FILE__ )</h4>
					<p><?php echo dirname( __FILE__ ); ?></p>
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



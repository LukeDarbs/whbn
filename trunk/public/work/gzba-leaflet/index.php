<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['gzba_leaflet'];

	$prev_post = $post_info['santander'];
	$next_post = $post_info['msi_candw'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/front.jpg" alt="<?php echo $this_post['title']; ?> - Leaflet front" />
						</li>
						<li>
							<img src="images/inside.jpg" alt="<?php echo $this_post['title']; ?> - Leaflet inside" />
						</li>
						<li>
							<img src="images/reverse.jpg" alt="<?php echo $this_post['title']; ?> - Leaflet reverse" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> These promotional pieces were great fun to work on. Lots of paper-prototyping helped us look 
						beyond the brief for a simple flyer and instead deliver something interesting and memorable. </p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



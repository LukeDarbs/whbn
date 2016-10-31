<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['santander'];

	$prev_post = $post_info['mountain_tracks_brochures'];
	$next_post = $post_info['gzba_leaflet'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/landing.jpg" alt="<?php echo $this_post['title']; ?> – App landing" />
						</li>
						<li>
							<img src="images/map-and-account.jpg" alt="<?php echo $this_post['title']; ?> – App map and account overview" />
						</li>
						<li>
							<img src="images/offer.jpg" alt="<?php echo $this_post['title']; ?> – App offer detail" />
						</li>
						<li>
							<img src="images/shopping-bag.jpg" alt="<?php echo $this_post['title']; ?> – Brick render shopping bag" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> We designed campaigns, websites and more during a long relationship with Santander. All our projects needed 
						a lot of sketching in the early stages to make sure concepts could work within the bank’s in-depth guidelines.</p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['mountain_tracks_brochures'];

	$prev_post = $post_info['brit_row_website'];
	$next_post = $post_info['santander'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/front-cover.jpg" alt="<?php echo $this_post['title']; ?> - Front cover 2013" />
						</li>
						<li>
							<img src="images/spread-intro.jpg" alt="<?php echo $this_post['title']; ?> - Intro spread" />
						</li>
						<li>
							<img src="images/spreads-angle.jpg" alt="<?php echo $this_post['title']; ?> - Inside pages" />
						</li>
						<li>
							<img src="images/spread-top-5.jpg" alt="<?php echo $this_post['title']; ?> - Top 5 spread" />
						</li>
						<li>
							<img src="images/back-cover.jpg" alt="<?php echo $this_post['title']; ?> - Back cover" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> For me, a mountain adventure sells itself but nice big photos of the breathtaking Alps can certainly help. 
						This is a job I enjoy every year. A cherished  opportunity to explore type and layout with the sort of 
						freedom that you only tend to get in editorial design. Plus, I love mountains. </p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



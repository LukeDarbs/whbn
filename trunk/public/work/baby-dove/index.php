<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['baby_dove'];

	$prev_post = $post_info['dove'];
	$next_post = $post_info['penny_for_london'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/home-page.jpg" alt="Baby Dove home page design" />
						</li>
						<li>
							<img src="images/product-landing-page.jpg" alt="Baby Dove product landing page design" />
						</li>
						<li>
							<img src="images/product-detail-page.jpg" alt="Baby Dove product detail page design" />
						</li>
						<li>
							<img src="images/article-page.jpg" alt="Baby Dove article page design" />
						</li>
						<li>
							<img src="images/client-facing.jpg" alt="Baby Dove close client relationship" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p>For their beloved Baby, Dove needed an ownable aesthetic that stayed familiar to the main brand and website experience. 
					Leading the creative and guiding the build, I worked closely with the client to deliver the right balance in time for 
					launches in Asia and South&nbsp;America.
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



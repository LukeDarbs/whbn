<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['dove'];

	$prev_post = $post_info['nba_payback'];
	$next_post = $post_info['penny_for_london'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/home-desktop.gif" alt="Dove global website" />
						</li>
						<li>
							<img src="images/product-detail-page-tablet.jpg" alt="Dove global website" />
						</li>
						<li>
							<img src="images/product-detail-page-mobile.jpg" alt="Dove global website" />
						</li>
						<li>
							<img src="images/product-landing-page-tablet.jpg" alt="Dove global website" />
						</li>
						<li>
							<img src="images/hub-desktop.jpg" alt="Dove global website" />
						</li>
						<li>
							<img src="images/article-mobile.jpg" alt="Dove global website" />
						</li>
						<li>
							<img src="images/work-life-1.jpg" alt="Dove global website" />
						</li>
						<li>
							<img src="images/work-life-2.jpg" alt="Dove global website" />
						</li>
						<li>
							<img src="images/work-life-3.jpg" alt="Dove global website" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> This project was transformative for the much-loved Real Beauty brand. 
					As the foundation of a new platform for Unilever, we had the freedom to 
					bring the brand DNA to life in digital. We crafted every detail of visual balance, 
					animation and language to complement the premium qualities of the products and 
					Dove’s mission for Real Beauty. All-in-all, a result that surprised and delighted 
					the client in light of the ‘impossible timeline’.
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



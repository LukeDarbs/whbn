<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['cashback_plus'];

	$prev_post = $post_info['microsoft_calendar'];
	$next_post = $post_info['brit_row_website'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<ul class="rslides">
								<li><img src="images/desktop-natwest.jpg" alt="NatWest Cashback Plus – Desktop" /></li>
								<li><img src="images/desktop-rbs.jpg" alt="RBS Cashback Plus – Desktop" /></li>
							</ul>
						</li>
						<li class="collapse">
							<div class="link-banner">
								<a href="https://www.cashbackplus.natwest.com/" target="_blank" title="Open the NatWest Cashback Plus website in a new tab"  >
								Visit the Cashback Plus website</a>
							</div>
						</li>
						<li>
							<img src="images/mobile.jpg" alt="NatWest and RBS Cashback Plus – Mobile" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> I built and led the Reward design and development team, working with the client’s agencies 
						to deliver the websites to exacting standards under enormous pressure for time.</p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



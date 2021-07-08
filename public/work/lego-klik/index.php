<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['lego_klik'];

	$prev_post = $post_info['brit_row_website'];
	$next_post = $post_info['change_inc'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">
<!--
					<ul>
						<li>
							<video poster="images/virgin-holidays-app.jpg" width="100% !important" height="auto 100% !important" muted autoplay controls playsinline >
								<source src="video/virgin-holidays-app.mp4" type="video/mp4" />
								<source src="video/virgin-holidays-app.webm" type="video/webm" />
								<source src="video/virgin-holidays-app.ogv" type="video/ogg" />
								<p>Virgin Holidays app</p>
							</video>
						</li>
						<li>
							<img src="images/flight-and-hotel-mobile.jpg" alt="Flight details and hotel details in the Virgin Holidays app" />
						</li>
						<li style="padding: 12%;">
							<video poster="images/destination-heroes.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline >
								<source src="video/destination-heroes.mp4" type="video/mp4" />
								<source src="video/destination-heroes.webm" type="video/webm" />
								<source src="video/destination-heroes.ogv" type="video/ogg" />
								<p>Destination hero images</p>
							</video>
						</li>
						<li>
							<img src="images/home-hero-and-footer.jpg" alt="Destination hero and footer in the Virgin Holidays app" />
						</li>
						<li>
							<img src="images/loading-state.gif" alt="Holiday timeline loading state in the Virgin Holidays app" />
						</li>
						<li>
							<img src="images/making-of-1.jpg" alt="Scoping the app features against the customer journey" />
						</li>
						<li>
							<img src="images/making-of-2.jpg" alt="Sketching potential propositions for the Virgin Holidays app" />
						</li>
						<li>
							<img src="images/making-of-3.jpg" alt="Sketching MVP designs for the Virgin Holidays app" />
						</li>
					</ul> -->

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p>A brand new design system for everyone’s favourite design system. Ironically, a vital first step was
						to create a compelling brand and story to explain internally at LEGO how a design system could
						help them work well and create better digital experiences faster.
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

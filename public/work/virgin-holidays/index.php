<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['virgin_holidays'];

	$prev_post = $post_info['change_inc'];
	$next_post = $post_info['dove'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery-new">

					<ul>
						<li>
							<!-- <img src="images/virgin-holidays-app.jpg" alt="Virgin Holidays app" /> -->
							<video poster="images/virgin-holidays-app.jpg" width="100% !important" height="auto 100% !important" muted autoplay playsinline preload="auto" >
								<source src="video/virgin-holidays-app.mp4" type="video/mp4" />
								<source src="video/virgin-holidays-app.webm" type="video/webm" />
								<source src="video/virgin-holidays-app.ogv" type="video/ogg" />
								<p>Virgin Holidays app</p>
							</video>
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
							<p>Leading the design for their first app presented a great opportunity to encourage the growing
								culture of human-centred design at Virgin&nbsp;Holidays. From a blank-canvas, various rounds of research
								and user testing helped us shape the app, deliver a fantastic experience for holidaymakers and a
								solid platform for a long list of future features.</p>
						</li>
						<li>
							<img src="images/flight-and-hotel-mobile.jpg" alt="Flight details and hotel details in the Virgin Holidays app" />
						</li>
						<li style="padding: 12%;">
							<!-- <img src="images/destination-heroes.jpg" alt="Destination hero images" /> -->
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
					</ul>

			</div> <!-- /.gallery -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

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

					<ul>
						<!-- <li>
							<video poster="images/lego-klik-teaser.jpg" width="100% !important" height="auto 100% !important" muted autoplay controls playsinline >
								<source src="video/lego-klik-teaser.mp4" type="video/mp4" />
								<source src="video/lego-klik-teaser.webm" type="video/webm" />
								<source src="video/lego-klik-teaser.ogv" type="video/ogg" />
								<p>LEGO Klik teaser</p>
							</video>
						</li> -->
						<li>
							<video poster="images/lego-klik-intro.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline >
								<source src="video/lego-klik-intro.mp4" type="video/mp4" />
								<source src="video/lego-klik-intro.webm" type="video/webm" />
								<source src="video/lego-klik-intro.ogv" type="video/ogg" />
								<p>LEGO Klik intro</p>
							</video>
						</li>
<!--						<li>
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
						</li> -->
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p>Working with <a href="https://unitedus.co.uk/" target="_blank" title="UnitedUs – brand agency extraordinaire" >UnitedUs</a>,
						I led the product design for Klik: a brand new design system for everyone’s favourite design system.</p>
					<p>Ironically, our first step was to create a compelling brand and story to explain internally how a design system could help
						LEGO work well and create better digital experiences for their 20,000+ employees. As the brand teaser and proof-of-concept
						started to excite key stakeholders, we were free to work on the system in earnest.</p>
					<p>LEGO has thousands of web sites and apps so they came ready with a long shopping list for what the system should include.
						We chose Figma so we could work closely and seamlessly with the excellent internal UX team despite the pandemic keeping us
						spread across the continent. We really sweat the details to design and build components to be flexible, intuitive and robust
						for end users. Our visual and interaction principles helped to make sure the LEGO DNA was part of every component.
						<p>Using Klik, LEGO teams can now design, prototype and build sites and apps much more quickly than before. Even better –
							they know that a Klik experience will work well and be unmistakably LEGO.</p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

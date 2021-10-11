<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['ux_fest'];

	$prev_post = $post_info['brit_row_website'];
	$next_post = $post_info['change_inc'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery-new">

					<ul>
						<li>
							<!-- <img src="images/ux-fest-hero-intro.jpg" alt="UX Fest landing page" /> -->
							<video poster="images/ux-fest-hero-intro.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline preload="auto" >
								<source src="video/ux-fest-hero-intro.mp4" type="video/mp4" />
								<source src="video/ux-fest-hero-intro.webm" type="video/webm" />
								<source src="video/ux-fest-hero-intro.ogv" type="video/ogg" />
								<p>UX Fest landing page</p>
							</video>
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
							<p>I led the design for <a href="https://2021.uxlondon.com/" target="_blank" title="UX Fest – a three-day online conference celebrating interaction and product design" >UX&nbsp;Fest</a>
								taking the parent UX&nbsp;London brand as a foundation to create a playful, expressive and celebratory new visual direction. Animation played a big part in setting the tone on the website
								and visual stings during the talks for the online conference.</p>
							<p>I’ve really enjoyed working with <a href="https://clearleft.com/" target="_blank" title="Clearleft – Original UX masters" >Clearleft</a>
								on a few conference projects, especially the process of finding the right visual language for the brand,
								website and comms in a short timeframe.</p>
						</li>
						<li>
							<!-- <img src="images/insta-launch-story.jpg" alt="UX Fest landing page" /> -->
							<video poster="images/insta-launch-story.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline preload="auto" >
							<source src="video/insta-launch-story.webm" type="video/webm" />
								<source src="video/insta-launch-story.mp4" type="video/mp4" />
								<source src="video/insta-launch-story.ogv" type="video/ogg" />
								<p>Instagram story to announce UX Fest launch</p>
							</video>
						</li>
						<li>
							<img src="images/whats-on.jpg" alt="UX Fest schedule on website" />
						</li>
						<li>
							<!-- <img src="images/speakers-list.jpg" alt="UX Fest landing page" /> -->
							<video poster="images/speakers-list.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline preload="auto" >
							<source src="video/speakers-list.webm" type="video/webm" />
								<source src="video/speakers-list.mp4" type="video/mp4" />
								<source src="video/speakers-list.ogv" type="video/ogg" />
								<p>List of speakers at UX Fest</p>
							</video>
						</li>
						<li>
							<!-- <img src="images/speakers-list.jpg" alt="UX Fest landing page" /> -->
							<video poster="images/tickets-button.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline preload="auto" >
								<source src="video/tickets-button.mp4" type="video/mp4" />
							<source src="video/tickets-button.webm" type="video/webm" />
								<source src="video/tickets-button.ogv" type="video/ogg" />
								<p>Big button confetti</p>
							</video>
						</li>
						<li>
							<img src="images/ux-fest-exploration.jpg" alt="Exploration for UX Fest visual direction" />
						</li>
					</ul>

			</div> <!-- /.gallery-new -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

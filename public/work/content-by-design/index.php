<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['content_by_design'];

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
              <video poster="images/hero-words.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline >
								<source src="video/hero-words.mp4" type="video/mp4" />
								<source src="video/hero-words.webm" type="video/webm" />
								<source src="video/hero-words.ogv" type="video/ogg" />
								<p>Hero words with animated variable type</p>
							</video>
						</li>
						<li>
							<img src="images/hero-words.jpg" alt="Conference venue details" />
						</li>
						<li>
							<img src="images/venue.jpg" alt="Conference venue details" />
						</li>
						<li>
							<img src="images/instagram-story.jpg" alt="Instagram story for Content by Design conference" />
						</li>
						<li>
							<img src="images/tickets.jpg" alt="Tickets button with hover animation" />
						</li>
						<li>
							<img src="images/themes.jpg" alt="Early visual direction exploration" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> The process – Hand-in-hand with content and dev. I led the design.
						Making the copy the hero. Variable font animations. With Clearleft.

				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

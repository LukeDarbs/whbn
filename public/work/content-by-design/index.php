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
					<p>Working with <a href="https://clearleft.com/" target="_blank" title="Clearleft – Original UX masters" >Clearleft</a>
						for another new conference, I led the design across the branding, website, socials and more. For an event celebrating
						great content, we put the words at the heart of the experience, emphasised with animated variable fonts. The visual
						direction was designed to give the conference team a wide toolkit of assets to unify the website, socials and the
						event itself. </p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

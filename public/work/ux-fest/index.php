<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['ux_fest'];

	$prev_post = $post_info['virgin_holidays'];
	$next_post = $post_info['dove'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">
<!--
					<ul>
						<li>
							<img src="images/landing.jpg" alt="Penny for London landing page" />
						</li>
						<li>
							<img src="images/registration.jpg" alt="Penny for London sign-up journey" />
						</li>
						<li>
							<img src="images/welcome.jpg" alt="Penny for London welcome page" />
						</li>
						<li>
							<img src="images/projects.jpg" alt="Penny for London charity projects page" />
						</li>
						<li>
							<img src="images/responsive-workings.jpg" alt="Penny for London responsive grid workings" />
						</li>
						<li>
							<img src="images/ux-1.jpg" alt="Penny for London paper-prototyping" />
						</li>
						<li>
							<img src="images/ux-2.jpg" alt="Penny for London UX design process" />
						</li>
					</ul> -->

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p>I led the design for UX&nbsp;Fest taking the parent UX&nbsp;London brand as a foundation to create a visual direction
						that was playful, expressive and celebratory. Animation played a big part in setting the tone on the website
						and visual stings during the talks for the online conference.</p>
					<p>I’ve really enjoyed working with <a href="https://clearleft.com/" target="_blank" title="Clearleft – Original UX masters" >Clearleft</a>
						on a few conference projects, especially the process of finding the right visual language for the brand,
						website and comms in a short timeframe.</p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['microsoft_calendar'];

	$prev_post = $post_info['reward_website'];
	$next_post = $post_info['cashback_plus'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/calendar-face-on.jpg" alt="Microsoft Office 365 facts calendar, front view" />
						</li>
						<li>
							<img src="images/selected-set-1.jpg" alt="Microsoft Office 365 facts calendar, selected dates" />
						</li>
						<li>
							<img src="images/calendar-side-on.jpg" alt="Microsoft Office 365 facts calendar, side view" />
						</li>
						<li>
							<img src="images/selected-set-2.jpg" alt="Microsoft Office 365 facts calendar, selected dates" />
						</li>
						<li>
							<img src="images/selected-set-3.jpg" alt="Microsoft Office 365 facts calendar, selected dates" />
						</li>
						<li>
							<img src="images/calendar-in-situ.jpg" alt="Microsoft Office 365 facts calendar, in-situ" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p>365 days for 365 illustrated facts… A celebration of the portable power of Microsoft Office 365. 
					We took on the Nokia and Office 365 house illustration style as part of the launch of Nokia’s new 
					Windows-powered smartphones.
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



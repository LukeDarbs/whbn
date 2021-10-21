<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts-private.php");

?>

<?php

	// Post variables

	$this_post = $post_info['ingenuity'];

	$prev_post = $post_info['lloyds'];
	$next_post = $post_info['lloyds'];

?>

<?php include("head.php"); ?>

		<article class="container">

			<div class="gallery-new">

					<ul>
						<li>
							<img src="images/video-live-comment.jpg" alt="Live commenting in the insider app" />
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
								<p>The Ingenuity Insider is a mobile-first social platform concept. The one-week design sprint resulted in an
									interactive prototype to enable stakeholders to take the planning to the next step.</p>
						</li>
						<li>
							<img src="images/sign-up.jpg" alt="Sign up process for Ingenuity Insider" />
						</li>
						<li>
							<img src="images/welcome.jpg" alt="Welcome process to customise the dashboard" />
						</li>
					</ul>

			</div> <!-- /.gallery-new -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

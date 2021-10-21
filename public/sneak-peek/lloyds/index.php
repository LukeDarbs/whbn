<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['lloyds'];

	$prev_post = $post_info['ingenuity'];
	$next_post = $post_info['ingenuity'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery-new">

					<ul>
						<li>
							<img src="images/service-detail-laptop.jpg" alt="Service detail screen" />
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
							<p>I led the design for Lloyd’s of London’s Services Hub – A new platform to allow Lloyds’ members to easily find,
								learn about and subscribe to services from Lloyds’ substantial libbrary. </p>
						</li>
						<li>
							<img src="images/hub-and-detail.jpg" alt="Services Hub screen and detail screen" />
						</li>
						<li>
							<video poster="images/services-hub-feedback.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline preload="auto" >
							<source src="video/services-hub-feedback.webm" type="video/webm" />
								<source src="video/services-hub-feedback.mp4" type="video/mp4" />
								<source src="video/services-hub-feedback.ogv" type="video/ogg" />
								<p>Member feedback in the Services Hub</p>
							</video>
						</li>
					</ul>

			</div> <!-- /.gallery-new -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

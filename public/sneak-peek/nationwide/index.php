<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['nationwide'];

	$prev_post = $post_info['mountain_tracks_brochures'];
	$next_post = $post_info['gzba_leaflet'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li style="height: auto; margin-bottom: 100px;">
							<video poster="" width="100% !important" height="100%" controls="controls" >
								<source src="video/nationwide-visual-planner.mp4" type="video/mp4" />
								<!-- <source src="video/dove-home-page-desktop.webm" type="video/webm" />
								<source src="video/dove-home-page-desktop.ogv" type="video/ogg" /> -->
								<p>Nationwide savings tools - Visual planner</p>
							</video>
						</li>
						<li style="height: auto; margin-bottom: 100px;">
							<video poster="" width="100% !important" height="100%" controls="controls" >
								<source src="video/nationwide-goals-dashboard.mp4" type="video/mp4" />
								<!-- <source src="video/dove-home-page-desktop.webm" type="video/webm" />
								<source src="video/dove-home-page-desktop.ogv" type="video/ogg" /> -->
								<p>Nationwide savings tools - Goals dashboard</p>
							</video>
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> We created these concepts for savings tools as part of an in-depth proposal for the building society.
					Animation brought the interfaces to life and helped our clients tell the story to their colleagues. </p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

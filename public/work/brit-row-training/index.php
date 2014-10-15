<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['brit_row_training'];

	$prev_post = $post_info['santander'];
	$next_post = $post_info['gzba_leaflet'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<ul class="rslides">
								<li><img src="images/desktop-1.jpg" alt="<?php echo $this_post['title']; ?> - Landing page slide 1" /></li>
								<li><img src="images/desktop-2.jpg" alt="<?php echo $this_post['title']; ?> - Landing page slide 2" /></li>
								<li><img src="images/desktop-3.jpg" alt="<?php echo $this_post['title']; ?> - Landing page slide 3" /></li>
							</ul>
							<a href="snapshot/" target="_blank" title="Open the BRP Training website in a new tab" class="launch-site">
								<p>Launch site</p>
								<img src="../../css/img/launch-site.png" />
							</a>
						</li>
						<li>
							<img src="images/responsive.jpg" alt="<?php echo $this_post['title']; ?> - Responsive" />
						</li>
						<li>
							<ul class="rslides">
								<li><img src="images/wireframing-1.jpg" alt="<?php echo $this_post['title']; ?> - Wireframing" /></li>
								<li><img src="images/wireframing-2.jpg" alt="<?php echo $this_post['title']; ?> - End result" /></li>
							</ul>
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> Within a strict budget, we developed the sub-brand and website together. 
						Using full-screen images and distinctive colours, the fully-responsive site looked 
						nothing like any competitors and helped fill the school’s seats for the launch term.</p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



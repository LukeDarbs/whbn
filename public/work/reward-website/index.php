<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['reward_website'];

	$prev_post = $post_info['reward_brand'];
	$next_post = $post_info['cashback_plus'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/desktop.jpg" alt="Reward website – desktop" />
							<a href="http://www.rewardinsight.com/" target="_blank" title="Open the Reward website in a new tab" class="launch-site">
								<p>Launch site</p>
								<img src="../../css/img/launch-site.png" />
							</a>
						</li>
						<li>
							<img src="images/tablet.jpg" alt="Reward website – tablet" />
						</li>
						<li>
							<img src="images/mobile.jpg" alt="Reward website – mobile" />
						</li>
						<li>
							<img src="images/responsive.jpg" alt="Reward website – responsive" />
						</li>
						<li>
							<img src="images/workings.jpg" alt="Reward website – workings" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> A big, bold statement of intent. The creative team helped to define how Reward 
						talk about their powerful but complex products. The fully responsive and highly 
						optimised site will be a foundation to build on.</p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



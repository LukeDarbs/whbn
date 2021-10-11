<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts-private.php");

?>

<?php

	// Post variables

	$this_post = $post_info['reward_brand'];

	$prev_post = $post_info['penny_for_london'];
	$next_post = $post_info['brit_row_website'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li class="canvas">
							<img src="images/reward-logo.gif" alt="Reward" />
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
							<p>Reward came-of-age during my time there. As the lead designer for the internal team,
								I worked in collaboration with the excellent <a href="http://www.joncgregory.co.uk/" target="_blank" title="Jon Gregory, Graphic Designer" >Jon&nbsp;Gregory</a>.</p>
							<p>Our huge rebrand and new website was a big, bold statement of intent and completely
								changed the way the startup was seen by clients and staff. The comprehensive brand
								manual empowered the growing team to send the Reward message clearly and consistently.
								In the words of our COO: <em>“Our presentations look shit-hot now”</em>.</p>
						</li>
						<li>
							<img src="images/website-desktop.jpg" alt="Reward website" />
						</li>
						<li>
							<img src="images/website-responsive.jpg" alt="Reward website" />
						</li>
						<li>
							<img src="images/stationery-1.jpg" alt="Reward stationery" />
						</li>
						<li>
							<img src="images/business-cards.jpg" alt="Reward business cards" />
						</li>
						<li>
							<img src="images/entrance-signage.jpg" alt="Reward entrance signage" />
						</li>
						<li>
							<img src="images/lobby-display.jpg" alt="Reward lobby display" />
						</li>
						<li>
							<img src="images/brand-guidelines.jpg" alt="Reward brand guidelines" />
						</li>
						<li>
							<img src="images/workings.jpg" alt="Reward brand workings" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

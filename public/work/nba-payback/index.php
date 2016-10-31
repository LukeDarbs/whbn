<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['nba_payback'];

	$prev_post = $post_info['msi_candw'];
	$next_post = $post_info['dove'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/logo.gif" alt="<?php echo $this_post['title']; ?> - Logo" />
						</li>
						<li>
							<img src="images/tablet.jpg" alt="<?php echo $this_post['title']; ?> - Website" />
						</li>
						<li>
							<img src="images/scoring.gif" alt="<?php echo $this_post['title']; ?> - Scoring points" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> Appealing to a young UK audience was important for this programme and I designed the logo, 
						website and all comms to neatly complement the <abbr title="National Basketball Association">NBA</abbr>’s All-Access brand.</p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



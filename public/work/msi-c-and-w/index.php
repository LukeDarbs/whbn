<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['msi_candw'];

	$prev_post = $post_info['gzba_leaflet'];
	$next_post = $post_info['nba_payback'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<img src="images/front.jpg" alt="<?php echo $this_post['title']; ?> - Front cover" />
						</li>
						<li>
							<img src="images/back.jpg" alt="<?php echo $this_post['title']; ?> - Back cover" />
						</li>
						<li>
							<img src="images/inside.jpg" alt="<?php echo $this_post['title']; ?> - Inside pages" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p> It was a priviledge to produce <abbr title="Marie Stopes International">MSI</abbr>’s flagship publication. With such powerful content and a 
						difficult subject, the design had to be sensitive. Carefully selected and adjusted imagery and 
						plenty of space helped to deliver the message with tact.</p>
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



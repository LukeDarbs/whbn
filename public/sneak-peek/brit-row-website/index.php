<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['brit_row_website'];

	$prev_post = $post_info['reward_brand'];
	$next_post = $post_info['lego_klik'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<ul class="rslides">
								<li><img src="images/desktop-1.jpg" alt="<?php echo $this_post['title']; ?> – Landing page slide 1" /></li>
								<li><img src="images/desktop-2.jpg" alt="<?php echo $this_post['title']; ?> – Landing page slide 2" /></li>
							</ul>
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
							<p>A website for audio hire professionals doesn’t have to be a boring kit-list,
								especially if you’re the best in the UK. For the Wordpress powered site, we told
								the story using images of the world famous acts they work with and dynamic visualisations
								to show the breadth of different project types they manage concurrently.</p>
							<p> Built in collaboration with the talented <a href="http://antonywalton.com/" target="_blank" title="Antony Walton, web and graphic designer" >Mr.&nbsp;Walton</a>.</p>
						</li>
						<li>
							<img src="images/desktop-history.jpg" alt="<?php echo $this_post['title']; ?> – History page" />
						</li>
						<li>
							<img src="images/desktop-team.jpg" alt="<?php echo $this_post['title']; ?> – Team page" />
						</li>
						<li>
							<img src="images/mobile.jpg" alt="<?php echo $this_post['title']; ?> – Mobile" />
						</li>
						<li>
							<img src="images/workings.jpg" alt="<?php echo $this_post['title']; ?> – Workings" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

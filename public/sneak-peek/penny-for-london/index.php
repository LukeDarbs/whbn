<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['penny_for_london'];

	$prev_post = $post_info['content_by_design'];
	$next_post = $post_info['reward_brand'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery-new">

					<ul>
						<li>
							<img src="images/landing.jpg" alt="Penny for London landing page" />
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
							<p>I led the design on Penny&nbsp;for&nbsp;London working for the Mayor’s Fund for London during my time at Reward.
								Mobile-first wasn’t just a buzzword: from UX, through prototyping and into the visual design, our focus was to
								deliver ease and simplicity to Londoners on the move, helping to make the micro-donation programme as successful
								as possible for a worthy cause. Simplicity was the guiding word and the humble copper penny was our source our
								colour reference and icon style.</p>
						</li>
						<li>
							<img src="images/registration.jpg" alt="Penny for London sign-up journey" />
						</li>
						<li>
							<img src="images/welcome.jpg" alt="Penny for London welcome page" />
						</li>
						<li>
							<img src="images/projects.jpg" alt="Penny for London charity projects page" />
						</li>
						<li>
							<img src="images/responsive-workings.jpg" alt="Penny for London responsive grid workings" />
						</li>
						<li>
							<img src="images/ux-1.jpg" alt="Penny for London paper-prototyping" />
						</li>
						<li>
							<img src="images/ux-2.jpg" alt="Penny for London UX design process" />
						</li>
					</ul>

			</div> <!-- /.gallery -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

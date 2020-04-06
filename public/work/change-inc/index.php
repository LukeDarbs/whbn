<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['change_inc'];

	$prev_post = $post_info['nba_payback'];
	$next_post = $post_info['virgin_holidays'];

?>

<?php include("head.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
              <video poster="images/what-is-change-inc.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline >
								<source src="video/what-is-change-inc.mp4" type="video/mp4" />
								<source src="video/what-is-change-inc.webm" type="video/webm" />
								<source src="video/what-is-change-inc.ogv" type="video/ogg" />
								<p>What is Change Incorporated?</p>
							</video>
						</li>
						<li>
							<img src="images/home.jpg" alt="UK home page for Change Incorporated" />
						</li>
						<li>
							<video poster="images/responsive.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline >
								<source src="video/responsive.mp4" type="video/mp4" />
								<source src="video/responsive.webm" type="video/webm" />
								<source src="video/responsive.ogv" type="video/ogg" />
								<p>A 100%-fluid grid and type scaling system</p>
							</video>
						</li>
						<li>
							<img src="images/video.jpg" alt="Video hero" />
						</li>
						<li>
							<img src="images/type-scale.jpg" alt="100% fluid-scaling type scales " />
						</li>
						<li>
							<img src="images/gallery-long.jpg" alt="Image gallery for photo-journalism" />
						</li>
						<li>
							<img src="images/publications.jpg" alt="Researching premium editorial publications" />
						</li>
						<li>
							<img src="images/brand-deck.jpg" alt="Defining the brand personality" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

			<div class="row">

				<div class="description">
					<h1><?php echo $this_post['title']; ?></h1>
					<p>Nothing less than a brand-new publishing platform for this ambitious (controversial) purpose-driven initiative from Vice.
            Can you really persuade corporations to take responsibility for the societal problems they cause?</p>
          <p>The superlative <a href="https://twitter.com/j98" target="_blank" title="Open James’s Twitter feed in a new tab" >James Gilyead</a>
						and I led the design direction for a stripped-back, beautifully scaling design system to let the varied content shine.
						Driven by near impossible timelines, we defined type, layout and brand direction from a tech performance perspective
						to minimise handover and start sweating the details in build as soon as possible. This helped all streams work at full pace
						from the start to craft a beautiful marriage of design and tech that’s ready to support Change&nbsp;Incorporated’s world-changing vision.
				</div>

			</div>

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

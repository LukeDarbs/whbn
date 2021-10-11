<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['dove'];

	$prev_post = $post_info['ux_fest'];
	$next_post = $post_info['content_by_design'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="gallery">

				<div class="gallery-width">

					<ul>
						<li>
							<!-- <img src="images/home-desktop.jpg" alt="Dove global website home page design" /> -->
							<video poster="images/home-desktop.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline >
								<source src="video/dove-home-page-desktop.mp4" type="video/mp4" />
								<source src="video/dove-home-page-desktop.webm" type="video/webm" />
								<source src="video/dove-home-page-desktop.ogv" type="video/ogg" />
								<p>Dove global website home page design</p>
							</video>
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
							<p>I worked with <a href="https://www.publicissapient.com/" target="_blank" title="PublicisSapient – digital transformation masters" >Sapient</a>
								on this transformative project for the much-loved Real Beauty brand. We brought the tactile brand DNA to life in digital.
								We crafted every detail of visual balance, animation and language to complement the premium qualities of the products and
								Dove’s mission for Real Beauty. All-in-all, a result that surprised and delighted the client in light of the ‘impossible timeline’.</p>
						</li>
						<li>
							<img src="images/product-detail-page-tablet.jpg" alt="Dove product detail page design" />
						</li>
						<li>
							<img src="images/product-detail-page-mobile.jpg" alt="Dove product detail page design" />
						</li>
						<li>
							<img src="images/product-landing-page-tablet.jpg" alt="Dove product listing page design" />
						</li>
						<li>
							<img src="images/hub-desktop.jpg" alt="Dove stories hub page design" />
						</li>
						<li>
							<img src="images/article-mobile.jpg" alt="Dove article page design" />
						</li>
						<li>
							<img src="images/baby-dove/home-page.jpg" alt="Baby Dove home page design" />
							<li class="intro-1-col">
								<h1>Baby Dove</h1>
								<p>As part of the Dove project, I led the design for Baby&nbsp;Dove, staying true to the core of the main brand and website but with a distinctly Baby aesthetic.
									I worked closely with the client and helped guide the build to deliver the right balance in time for launches in Asia and South America.<p>
							</li>
						</li>
						<li>
							<img src="images/baby-dove/product-landing-page.jpg" alt="Baby Dove product landing page design" />
						</li>
						<!-- <li>
							<img src="images/baby-dove/product-detail-page.jpg" alt="Baby Dove product detail page design" />
						</li> -->
						<li>
							<img src="images/baby-dove/article-page.jpg" alt="Baby Dove article page design" />
						</li>
						<!-- <li>
							<img src="images/baby-dove/client-facing.jpg" alt="Baby Dove close client relationship" />
						</li> -->
						<li>
							<img src="images/work-life-1.jpg" alt="Dove brand DNA to digital mood-boards" />
						</li>
						<li>
							<img src="images/work-life-2.jpg" alt="Dove product information architecture" />
						</li>
						<li>
							<img src="images/work-life-3.jpg" alt="Dove client review" />
						</li>
					</ul>

				</div>

			</div> <!-- /.gallery -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

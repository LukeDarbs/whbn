<?php

set_include_path( "../../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php

	// Post variables

	$this_post = $post_info['lego_klik'];

	$prev_post = $post_info['brit_row_website'];
	$next_post = $post_info['change_inc'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article>

			<div class="gallery-new">

					<ul>
						<!-- <li>
							<video poster="images/lego-klik-teaser.jpg" width="100% !important" height="auto 100% !important" muted autoplay controls playsinline >
								<source src="video/lego-klik-teaser.mp4" type="video/mp4" />
								<source src="video/lego-klik-teaser.webm" type="video/webm" />
								<source src="video/lego-klik-teaser.ogv" type="video/ogg" />
								<p>LEGO Klik teaser</p>
							</video>
						</li> -->
						<li>
							<video poster="images/lego-klik-intro.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline preload="auto" >
							<source src="video/lego-klik-intro.webm" type="video/webm" />
								<source src="video/lego-klik-intro.mp4" type="video/mp4" />
								<source src="video/lego-klik-intro.ogv" type="video/ogg" />
								<p>LEGO Klik intro</p>
							</video>
						</li>
						<li class="intro-1-col">
							<h1><?php echo $this_post['title']; ?></h1>
							<p>Klik is an ambitious new design system for everyone’s favourite design system. I led the product design as part of
								<a href="https://unitedus.co.uk/" target="_blank" title="UnitedUs – brand agency extraordinaire" >UnitedUs</a>, collaborating with LEGO’s excellent UX team.</p>
							<p>Ironically, our first step was to create a compelling brand and story to explain internally how a design system could help
								LEGO work well and create better digital experiences for their 20,000+ employees. As the brand teaser and proof-of-concept
								started to excite key stakeholders, we were free to work on the system in earnest.</p>
						</li>
						<li class="banner" style="background-color: #452b6b;">
							<img src="images/klik-branding-montage.jpg" alt="A snapshot of the branding designed to promote Klik within LEGO" />
						</li>
						<li>
							<video poster="images/splash-screen.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline >
								<source src="video/splash-screen.mp4" type="video/mp4" />
								<source src="video/splash-screen.webm" type="video/webm" />
								<source src="video/splash-screen.ogv" type="video/ogg" />
								<p>An example ‘signature moment’ loading screen</p>
							</video>
						</li>
						<li>
							<img src="images/components-and-ui.jpg" alt="An example of Klik’s Figma components for UI design and development" />
						</li>
						<li class="banner" style="background-color: #452b6b;">
							<img src="images/apps-collection-figma.jpg" alt="Some example LEGO apps and products designed using the Klik design system" />
						</li>
						<li class="intro-1-col">
							<p>LEGO has thousands of web sites and apps so they came ready with a long shopping list for what the system should include.
								Choosing Figma helped us work closely and seamlessly with the LEGO team despite the pandemic keeping us spread across the
								continent.</p>
							<p>We really sweat the details to design and build components to be flexible, intuitive and robust for end users.
								Our visual and interaction principles helped to make sure the LEGO DNA was part of every component.
							<p>Using Klik, LEGO teams can now design, prototype and build sites and apps much more quickly than before. Even better –
								they know that a Klik experience will work well and be unmistakably LEGO.</p>
						</li>
						<li>
							<video poster="images/klik-screen-builder.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline preload="auto" >
								<source src="video/klik-screen-builder.mp4" type="video/mp4" />
								<source src="video/klik-screen-builder.webm" type="video/webm" />
								<source src="video/klik-screen-builder.ogv" type="video/ogg" />
								<p>Different screens designed using the Klik system</p>
							</video>
						</li>
						<li>
							<img src="images/klik-system-principles.gif" alt="The guiding principles of designing for and with the Klik system" />
						</li>
						<li>
							<video poster="images/signature-background.jpg" width="100% !important" height="auto 100% !important" muted autoplay loop playsinline preload="auto" >
								<source src="video/signature-background.mp4" type="video/mp4" />
								<source src="video/signature-background.webm" type="video/webm" />
								<source src="video/signature-background.ogv" type="video/ogg" />
								<p>A Klik signature animated illustration</p>
							</video>
						</li>
						<li>
							<img src="images/icons-in-motion.gif" alt="Animated icons to bring life to selected interactions" />
						</li>
						<li>
							<img src="images/figma-team-files.jpg" alt="LEGO Klik team files in Figma" />
						</li>
						<li>
							<img src="images/klik-guidelines.jpg" alt="An example of the guidelines for a Klik component" />
						</li>
						<li>
							<img src="images/scoping-and-exploration.jpg" alt="Scoping and exploration workshops for Klik’s guiding design principles" />
						</li>
					</ul>

			</div> <!-- /.gallery-new -->

		</article> <!-- /.container -->

		<?php include("next_post.php"); ?>


<?php include("footer.php"); ?>
<?php include("end.php"); ?>

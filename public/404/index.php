<?php

set_include_path( "../inc/" );

include("vars.php");
include("functions.php");
include("posts.php");

?>

<?php 
	
	// Post variables 

	$this_post = $post_info['404'];

?>

<?php include("head.php"); ?>

		<?php // include("nav.php"); ?>

		<article class="container">

			<div class="row">

				<div class="description">
					<h1>Oops…</h1>
					<p>This page isn’t here. Maybe it moved. Or maybe it never existed.</p>

					<p>Sorry. That’s how it goes sometimes.</p>

					<p>Maybe the <a href="<?php echo $site_root; ?>" title"Yes please, take me home">home page</a> can help?</p>
				</div>

			</div>

		</article> <!-- /.container -->


<?php include("footer.php"); ?>
<?php include("end.php"); ?>



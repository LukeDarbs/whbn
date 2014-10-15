

		<!-- </div> .scene_element.scene_element-fadeinright"> -->

		<!-- </div> .m-scene -->

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<!-- <script src="<?php echo $site_root; ?>js/jquery.smoothState.js"></script>

		<script>
			// Contents of functions.js
			;(function($) {
			  'use strict';
			  var $body = $('html, body'),
			      content = $('#main').smoothState({
			        // Runs when a link has been activated
			        onStart: {
			          duration: 2000, // Duration of our animation
			          render: function (url, $container) {
			            // toggleAnimationClass() is a public method
			            // for restarting css animations with a class
			            content.toggleAnimationClass('is-exiting');
			            // Scroll user to the top
			            $body.animate({
			              scrollTop: 0
			            });
			          }
			        }
			      }).data('smoothState');
			      //.data('smoothState') makes public methods available
			})(jQuery);
		</script> -->

		<script>
			$(document).ready(function() {

				$('body').css('display', 'none');

				$('body').fadeIn(750);



				$('.fade-link').click(function() {

				event.preventDefault();

				newLocation = this.href;

				$('body').fadeOut(250, newpage);

				});

				function newpage() {

				window.location = newLocation;

				}

			});
		</script>

		<script src="<?php echo $site_root; ?>js/responsive-slides.js"></script>

		<script>
			$(function() {
				$(".rslides").responsiveSlides();
			});
		</script>

		<!-- Add a class to specifically target IE11
			 http://thebenlumley.com/how-to-target-ie-11-with-css/
		========================================================== -->
		<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) { ?>
			<script>
			$(function(){
				$('html').addClass('ie11');
			});
			</script>
		<?php } ?>

	</body>
</html>

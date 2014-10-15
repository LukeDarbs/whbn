<?php
include('includes/functions.php');

?>

<?php
//email signup ajax call
if($_GET['action'] == 'signup'){
	
	$email = $_POST['signup-email'];
	
	//validate email address - check if input was empty
	if(empty($email)){
		$status = "error";
		$message = "Please enter a valid email address";
	}
	else if(!preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $email)){ //validate email address - check if is a valid email address
			$status = "error";
			$message = "Please enter a valid email address";
	}
	else {
		$to = "training@britanniarow.com";
		$subject = "Training mailing list sign up: " . $email;
		$message = "Please add me to the Britannia Row Productions Training mailing list: " . $email;
		$from = "training@britanniarow.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		
		$status = "success";
		$message = "Thank you. Your email address has been added to the mailing list.";	
	}

	//return json response
	$data = array(
		'status' => $status,
		'message' => $message
	);
	echo json_encode($data);
	exit;
}
?>

<?php get_template('header', 'landing', '', ''); ?>


    
            <article role="main" class="grid-12 slideshow">
            
                <div class="grids">
                
                    <section class="grid-10 left-1 slideshow">
                    
                        <div class="grids">
                        
                            <h1 id="slidecaption" class="grid-8"></h1> <!--Slide caption. Open bg_images.js to edit the copy-->
                        
                            <noscript><h1 id="slidecaption" class="grid-8">Vocational qualifications from the live sound industry leaders</h1></noscript><!-- h1 fallback for non-js users -->
                
                            <ul class="nav">
                                <li><a id="prevslide" class="load-item">Previous slide</a></li>
                                <li><a id="nextslide" class="load-item">Next slide</a></li>
                            </ul>
                        
                        </div> <!-- End div.grids -->
                    
                    </section>
                    
                    <section class="grid-6 left-1 call-to-action">
                    
                    	<div class="grids">
                            
                            <p class="grid-5 right-1">Gain practical, industry-based qualifications in professional live sound from Britain’s leading audio hire specialists: 
                            <a href="http://www.britanniarow.com" target="_blank" title="Open the Britannia Row Productions website in a new window">Britannia&nbsp;Row&nbsp;Productions</a>.</p>
                            
                            <p class="grid-5 right-1">Our 2013 courses start in April so for more information or to enrol, connect with us:</p>
                            
                            <a href="<?php print HTTP; ?>courses/live-sound-technology" title="Find out more about our courses, starting with our Live Sound Technology Course" class="grid-3 button primary">Live sound technology course</a>
                            <p class="cta-or">or</p>
                            <a href="<?php print HTTP; ?>connect" title="Contact us to stay in the loop by email, Facebook, Twitter and more" class="grid-3 button primary"><span>Connect with us</span></a>
                            
                        </div> <!-- End div.grids -->
                        
                    </section>
                    
                    <aside class="grid-4 connect-group">
                        <h2>Stay in the loop</h2>
                    
                        <form id="newsletter-signup" action="?action=signup" method="post" class="hr">
                            <fieldset>
                                <div class="formrow cf">
                                    <label for="signup-email">Your email address</label>
                                    <input type="text" name="signup-email" id="signup-email" >
                                    <input type="submit" id="signup-button" value="Sign up" class="button" title="Sign up to the Britannia Row Training mailing list to receive occasional updates on the latest developments" >
                                </div>
                                
                                <p class="signup-response"><span id="signup-response"></span></p>
                                
                            </fieldset>
                        </form>
                        
                        <ul class="nav social-nav">
                            <li><a href="#" title="Follow us on Twitter @BRPTraining" class="social-twitter">Twitter</a></li>
                            <li><a href="http://www.facebook.com/BritanniaRowProdTraining" target="_blank" title="Find our latest news on Facebook/BRPTraining" class="social-facebook">Facebook</a></li>
                            <li><a href="https://plus.google.com/u/1/b/100316528393571692210/" title="Share us with your Google circles" class="social-google">Google Plus</a></li>
                        </ul>
                    </aside>
                
                </div> <!-- End div.grids -->
            
            </article>

<?php get_template('footer'); ?>
        
		<!-- ...Then any page-specific scripts here: --> 
        
		<!-- ...Background image slideshow: --> 
        <script type="text/javascript" charset="utf-8">
        jQuery(function($){
                        
            $.supersized({
            
                //Functionality
                slideshow       :   1,		//Slideshow on/off
                slides 			:  	[		// Slideshow Images
											{image : '<?php print HTTP; ?>img/bgs/01.jpg', title : 'Vocational qualifications from the live sound industry leaders'},
											{image : '<?php print HTTP; ?>img/bgs/02.jpg', title : 'Train using the state-of-the art equipment demanded by the World’s top artists and events'},
											{image : '<?php print HTTP; ?>img/bgs/03.jpg', title : 'A direct route for the next generation of live sound professionals'}

									]
                            
                        });
                    });
        </script>
        
        
		<!-- ...AJAX sign-up form call-backs: --> 
		<script type="text/javascript">
        $(document).ready(function(){
            $('#newsletter-signup').submit(function(){
                
                //check the form is not currently submitting
                if($(this).data('formstatus') !== 'submitting'){
                
                    //setup variables
                    var form = $(this),
                        formData = form.serialize(),
                        formUrl = form.attr('action'),
                        formMethod = form.attr('method'), 
                        responseMsg = $('#signup-response');
                    
                    //add status data to form
                    form.data('formstatus','submitting');
                    
                    //show response message - waiting
                    responseMsg.hide()
                               .addClass('response-waiting')
                               .text('Please wait...')
                               .fadeIn(200);
                    
                    //send data to server for validation
                    $.ajax({
                        url: formUrl,
                        type: formMethod,
                        data: formData,
                        success:function(data){
                            
                            //setup variables
                            var responseData = jQuery.parseJSON(data), 
                                klass = '';
                            
                            //response conditional
                            switch(responseData.status){
                                case 'error':
                                    klass = 'response-error';
                                break;
                                case 'success':
                                    klass = 'response-success';
                                break;	
                            }
                            
                            //show reponse message
                            responseMsg.fadeOut(200,function(){
                                $(this).removeClass('response-waiting')
                                       .addClass(klass)
                                       .text(responseData.message)
                                       .fadeIn(200,function(){
                                           //set timeout to hide response message
                                           setTimeout(function(){
                                               responseMsg.fadeOut(200,function(){
                                                   $(this).removeClass(klass);
                                                   form.data('formstatus','idle');
                                               });
                                           },6000)
                                        });
                            });
                        }
                    });
                }
                
                //prevent form from submitting
                return false;
            });
        });
        </script>
        
        <!-- end page-specific scripts --> 

<?php get_template('close'); ?>
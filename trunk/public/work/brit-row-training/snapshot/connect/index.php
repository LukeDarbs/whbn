<?php
include('../includes/functions.php');

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

<?php get_template('../header', 'connect', 'Connect with us'); ?>
    
        <article role="main" class="grid-12 ">
        
            <div class="grids">
        
                <section class="grid-8">
                
                    <div class="main-image">
                        <a href="https://maps.google.co.uk/?q=SW181NL" target="_blank" title="View a larger map of Britannia Row Productions Training in Wandsworth" class="img-link" >
                            <img src="<?php print HTTP; ?>img/connect/connect-main-map.jpg"  alt="Map of Britannia Row Productions Training in Wandsworth, London" />
                        </a>
                        <h1 class="grid-6 left-1">Find out more and stay in the loop</h1>
                    </div>
                	
                    <div class="main-section">
                    
                        <p class="grid-6 left-1">Our courses provide the most direct path to working professionally as a live sound engineer. </p>
                        
                        <p class="grid-6 left-1">Get in touch with any questions or for the best introduction to Britannia Row Productions Training, 
                        arrange a visit to our dedicated live sound training premises in Wandsworth, London.</p>
                        
                        <!-- <p class="grid-6 left-1 note">(Please provide as much or as little detail as you would like – The more we know, the better we can help you!)</p>
                        
                        <h2 class="grid-6 left-1">Ask a question or arrange a visit</h2> -->
    				
                    </div> <!-- End div.main-section -->
    
                </section>
                
                <aside class="grid-4 aside">
                
                    <div class="margin">
                    
                        <section class="contact">
                    
                            <ul>
                                <li><p>Britannia Row Productions Training<br>
                                9 Osiers Road<br>
                                Wandsworth<br>
                                London<br>
                                SW18 1NL</p></li>
                                <li><span>t:</span> +44&nbsp;20&nbsp;8874&nbsp;0182</li>
                                <li><span>e:</span> <a href="mailto:training@britanniarow.com" title="Email us">training@britanniarow.com</a> </li>
                            </ul>
                        
                        <hr>
                        
                        </section>
                    
                        <section class="connect-group">
                        
                            <h2>Get email updates</h2>
                        
                            <form id="newsletter-signup" action="?action=signup" method="post">
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
                                <li><a href="http://www.facebook.com/BritanniaRowProdTraining" title="Find our latest news on Facebook/BRPTraining" class="social-facebook">Facebook</a></li>
                                <li><a href="https://plus.google.com/u/1/b/100316528393571692210/" title="Share us with your Google circles" class="social-google">Google Plus</a></li>
                            </ul>
                            
                        </section>
                        
                    </div> <!-- End div.margin  -->

                </aside>
                
            </div>

        </article>

<?php get_template('../footer'); ?>
        
		<!-- ...Then any page-specific scripts here: --> 
        
        <script type="text/javascript" charset="utf-8">
        jQuery(function($){
                        
            $.supersized({
            
                //Functionality
                slideshow               :   1,		//Slideshow on/off
                slides 					:  	[		// Slideshow Images
													{image : '<?php print HTTP; ?>img/bgs/02.jpg'}
        
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
        
        <!-- end page-specific scripts --> 

<?php get_template('../close'); ?>
<?php
include('../includes/functions.php');

?>

<?php get_template('../header', 'about', 'About Britannia Row Productions Training'); ?>
    
        <article role="main" class="grid-12 ">
        
            <div class="grids">
        
                <section class="grid-8">
                
                    <div class="main-image">
                        <img src="<?php print HTTP; ?>img/about/about-main.jpg"  alt="The Britannia Row Productions Training team at our Wandsworth base" />
                        <h1 class="grid-6 left-1">About Britannia Row Productions Training</h1>
                    </div>
                	
                    <div class="main-section">
                    
                        <p class="grid-6 left-1"><strong>Britannia Row Productions Training is the training division of <a href="http://www.britanniarow.com/" target="_blank" title="Find out more about Britannia Row Productions from their main website">
                        Britannia Row Productions</a>, one of Britain’s longest established and most prestigious suppliers of live audio systems.</strong></p>
                        
                        <p class="grid-6 left-1">Britannia Row Productions was formed in 1975, with their first ever show in front of 100,000 music fans at Knebworth Park, Hertfordshire, England on Saturday 5th July 1975. 
                        Now, Britannia Row Productions has become one of the world’s leading audio rental companies, providing state of the art equipment and highly skilled technicians for a wide variety of events and tours throughout the world.</p>
                        
                        <p class="grid-6 left-1">Britannia Row Productions has supplied state-of-the-art sound systems for tours and events worldwide for over 35 years with an illustrious history and association with wider ranging bands, 
                        artists and events such as Pink&nbsp;Floyd, Frank&nbsp;Sinatra, Peter&nbsp;Gabriel, The&nbsp;Cure, Depeche&nbsp;Mode, Oasis, Robbie&nbsp;Williams and Live&nbsp;8.</p>
                        
                        <p class="grid-6 left-1">During summer 2012 the company provided sound for the Queen’s Diamond Jubilee Concert in front of Buckingham Palace and many other events during the extraordinary 
                        Olympic year including 45 major concerts, ceremonies and  events in London’s Hyde Park. Britannia Row Productions was also heavily involved in a major sporting event that was held in London and other 
                        parts of the country this summer and were on tour with Tenacious&nbsp;D, Beady&nbsp;Eye, Simple&nbsp;Minds, Lynnrd&nbsp;Skynnrd, The&nbsp;Cure, Kasabian, Limp&nbsp;Bizkit, Foo&nbsp;Fighters, Bryan&nbsp;Adams, Duran&nbsp;Duran, 
                        Noel&nbsp;Gallagher’s&nbsp;High&nbsp;Flying&nbsp;Birds, Florence&nbsp;and&nbsp;The&nbsp;Machine and Sound&nbsp;Garden to name but a few.</p>
                        
                        <h3 class="grid-6 left-1">Company information</h3>
                        
                        <p class="grid-6 left-1"><strong>Britannia Row Productions Training Ltd</strong><br>
                        (Registered in England, number 08306216)</p>
                        <p class="grid-6 left-1">Registered office: 104 The Green, Twickenham, Middlesex, United Kingdom, TW2 5AG</p>
                        
                    </div> <!-- End div.main-section -->
    
                </section>
                
                <aside class="grid-4 aside">
                
                    <div class="margin">
                    
                        <section>
                    
                            <p class="synopsis">Since its formation in 1975, Britannia Row Productions has built its network of live sound professionals by developing people through in-house training as other education options were found to be lacking 
                            the necessary level of preparation for many aspects of work in the professional live sound market.</p>
                            
                            <p class="synopsis">Britannia Row Productions has decided to make its expertise and equipment available to anyone aspiring to be a live sound professional. Intensive courses, packed with industry knowledge, 
                            thorough practice on production equipment and delivered by experienced, well-credited sound engineers give trainees the opportunity to reach a level of readiness for audio production work in a short space of time.
                            Courses are conducted at dedicated premises in London in which Britannia Row Productions operated for many years and built its history.</p>
                        
                        <hr>
                        
                        </section>
                                    
                        <section class="">
                    
                            <h3>Connect with us</h3>
                            
                            <a href="<?php print HTTP; ?>connect" title="Contact us and stay in the loop by email, Facebook, Twitter and more" class="button">Connect</a>
                        
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
													{image : '<?php print HTTP; ?>img/bgs/03.jpg'}
        
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
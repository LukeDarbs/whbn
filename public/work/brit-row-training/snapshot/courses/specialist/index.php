<?php
include('../../includes/functions.php');

?>

<?php get_template('../../header', 'specialist', 'Specialist courses'); ?>
    
        <article role="main" class="grid-12 ">
        
            <div class="grids">
        
                <section class="grid-8">
                
                    <div class="main-image">
                        <img src="<?php print HTTP; ?>img/courses/specialist-course-main.jpg" />
                        <h1 class="grid-6 left-1">Specialist courses</h1>
                    </div>
                	
                    <div class="main-section">
                    
                        <p class="grid-6 left-1">Britannia Row Training is developing these courses for release later in 2013. 
                        More news on these courses will be available in the spring. 
                        These courses have a duration of 4 weeks full-time and will offer in-depth tuition on subjects such as:</p>
                        
                        <ul class="grid-6 left-1" >
                            <li>Wireless</li>
                            <li>Live Sound Mixing</li>
                            <li>Systems &amp; Digital Networking</li>
                        </ul>
                    
                    <section class="grid-6 left-1 call-to-action">
                    
                    	<div class="grids">
                            
                            <p class="grid-5 right-1">More information will be published soon so to keep in the loop, connect with us: </p>
                            
                            <a href="<?php print HTTP; ?>connect" title="Contact us to stay in the loop by email, Facebook, Twitter and more" class="grid-3 button primary">Find out more: Connect</a>
                            <p class="cta-or">or</p>
                            <a href="<?php print HTTP; ?>courses/enrol" title="Enrol for Britannia Row Productions Training" class="grid-3 button primary"><span>Enrol today</span></a>
                            
                        </div> <!-- End div.grids -->
                        
                    </section>
    				
                    </div> <!-- End div.main-section -->
    
                </section>
                
                <aside class="grid-4 aside course-particulars">
                
                    <div class="margin">
                
                        <section class="">
                    
                            <h3>The next step</h3>
                            
                            <a href="<?php print HTTP; ?>connect" title="Contact us to stay in the loop by email, Facebook, Twitter and more" class="button">Connect</a>
                            
                            <p>or <a href="<?php print HTTP; ?>courses/enrol" title="Enrol for Britannia Row Productions Training">Enrol today</a>.</p>
                        
                        </section>
                        
                    </div> <!-- End div.margin  -->
                    
                </aside>
                
            </div>

        </article>

<?php get_template('../../footer'); ?>
        
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
        
        <!-- end page-specific scripts --> 

<?php get_template('../../close'); ?>
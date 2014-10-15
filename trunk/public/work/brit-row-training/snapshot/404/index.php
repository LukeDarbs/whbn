<?php
include('../includes/functions.php');

?>

<?php get_template('../header', 'error-404', 'Page not found'); ?>
    
            
            <article role="main" class="grid-12">
            
                <div class="grids no-main-image cf">
                
                    <section class="grid-5 left-2 right-1"> 
                    
                        <h1>Sorry</h1>
    
                        <h2>It looks like that page no longer exists</h2>
                        
                        <p>This may be the result of the a mistyped address or an out-of-date link.</p>
                        
                        <p>You may find the information you're after from our <a href="<?php print HTTP; ?>" title="Return to the Britannia Row Productions Training landing page">home page</a> 
                        or you can <a href="<?php print HTTP; ?>connect/" title="View our address and contact details">contact us</a> if there is something we can help with. </p>
                    
                    </section>
                
                </div> <!-- End div.grids -->
            
            </article>

<?php get_template('../footer'); ?>
        
		<!-- ...Then any page-specific scripts here: --> 
        
        <script type="text/javascript" charset="utf-8">
        jQuery(function($){
                        
            $.supersized({
            
                //Functionality
                slideshow               :   0,		//Slideshow on/off
                slides 					:  	[		// Slideshow Images
													{image : '<?php print HTTP; ?>img/bgs/04.jpg'}
        
                                            ]
                            
                        });
                    });
        </script>
        
        <!-- end page-specific scripts --> 

<?php get_template('../close'); ?>
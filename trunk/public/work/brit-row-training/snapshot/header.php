<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    
    <!-- Use the .htaccess and remove these lines to avoid edge case issues. More info: h5bp.com/i/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php echo $title ?></title>
    
    <meta name="description" content="Introducing Britannia Row Productions Training: Vocational qualifications from the live sound industry leaders">
    <meta name="keywords" content="Britannia Row Productions Training, live sound training, live sound courses, audio training, front-of-house training, digital mixing training, analogue mixing training, audio technician qualifications">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/> <!--320-->
	<meta name="robots" content="index, follow">

    
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    <link rel="icon" href="<?php print HTTP; ?>img/css/icon-32x32.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php print HTTP; ?>img/css/icon-32x32.png">
    
    <!-- Based on the Intuit framework -->
    <link rel="stylesheet" href="<?php print HTTP; ?>css/main.css"> <!-- Quick change to min:  .min -->
    <link rel="stylesheet" href="<?php print HTTP; ?>css/supersized.css" type="text/css" >
    <link rel="stylesheet" href="<?php print HTTP; ?>css/supersized.shutter.css" type="text/css" >
    
    <!-- All JavaScript at the bottom, except this Modernizr ( www.modernizr.com/download/ ) -->
    <script src="<?php print HTTP; ?>js/libs/modernizr-2.5.3.min.js"></script>
    
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php print HTTP; ?>css/ie.css">
    <![endif]-->

    <!-- Asynchronous Tracking Syntax - loads alongside content so no need to place at bottom: https://developers.google.com/analytics/devguides/collection/gajs/?hl=en -->

	<script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-33837083-2']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>

</head>

<body class=" <?php echo($activePage); ?> ">
    <!-- Prompt IE 6 users to install Chrome Frame. chromium.org/developers/how-tos/chrome-frame-getting-started --> 
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div class="wrapper">
        <div class="grids">
    
            <header class="grid-12">
            
                <div class="grids">
                    <a  href="<?php print HTTP; ?>" class="grid-3 logo <?php if ($activePage == "home" ) {echo 'active';} ?>">
                        <img src="<?php print HTTP; ?>img/britannia-row-productions-training-logo-195px.png" alt="Training by Britannia Row Productions"> 
                    </a>
                    
                    <a class="nav-trigger ir" href="?">Show site navigation menu</a><!-- Menu button responsive-->
                    
                    <ul class="grid-8 left-3 nav main-nav">
                        <li <?php if (stripos($_SERVER['REQUEST_URI'],'/courses/') !== false) {echo 'class="active"';} ?>>
                            <a href="<?php print HTTP; ?>courses/live-sound-technology" title="Find out more about our courses, starting with our Live Sound Technology Course">Courses</a>
                            <ul>
                                <li <?php if ($activePage == "live-sound-technology" ) {echo 'class="active"';} ?> >
                                    <a href="<?php print HTTP; ?>courses/live-sound-technology" title="Find out more about our courses, starting with our Live Sound Technology Course">Live sound technology</a>
                                </li>
                                <li <?php if ($activePage == "specialist" ) {echo 'class="active"';} ?> >
                                    <a href="<?php print HTTP; ?>courses/specialist" title="Find out more about our Specialist courses, covering Wireless, Live Sound Mixing and Systems &amp; Digital Networks">Specialist</a>
                                </li>
                                <li <?php if ($activePage == "enrol" ) {echo 'class="active"';} ?> >
                                    <a href="<?php print HTTP; ?>courses/enrol" title="Apply to enrol for Training by Brittania Row Productions">Enrol</a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if (stripos($_SERVER['REQUEST_URI'],'/about/') !== false) {echo 'class="active"';} ?> >
                            <a href="<?php print HTTP; ?>about" title="Find out more about Britannia Row Productions Training">About us</a>
                        </li>
                        <li <?php if (stripos($_SERVER['REQUEST_URI'],'/connect/') !== false) {echo 'class="active"';} ?> >
                            <a href="<?php print HTTP; ?>connect" title="Contact us to stay in the loop by email, Facebook, Twitter and more">Connect</a>
                        </li>
                    </ul>
                </div> <!-- End div.grids -->
            </header>
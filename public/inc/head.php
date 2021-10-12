<!DOCTYPE html>
<html lang="en" style="background-color: #d9d9d9;">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php echo $this_post['description']; ?>">
		<meta name="author" content="Luke Darbyshire">
		<link rel="icon" href="<?php echo $site_root; ?>favicon.ico">

		<title>
			<?php

			$title = $this_post['title'];

			if( $this_post['subtitle'] != null ) {

				$title .= " " . $this_post['subtitle'];
			}

			$title .= " – Luke Darbyshire design";

			echo $title;

			?>
		</title>

		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>

		<!-- Core CSS -->
		<link href="<?php echo $site_root; ?>css/idic.css" rel="stylesheet">
		<!--[if lt IE 9]><link href="<?php echo $site_root; ?>css/ie8.css" rel="stylesheet"><![endif]-->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="<?php $body = "post-" . $this_post['post_name']; echo $body; ?>" role="main">

	<?php include_once("analyticstracking.php") ?>

		<!-- <div class="m-scene" id="main">

		<div class="scene_element scene_element--fadeinright"> -->

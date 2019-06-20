<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/firsthonor_style.css"  media="screen,projection"/>

	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- bxSlider Javascript file -->
	<script src="js/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="css/jquery.bxslider.css" rel="stylesheet" />

	<!-- JS for readmore -->
	<script src="js/jquery.dotdotdot.js" type="text/javascript"></script>


	



	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta charset="UTF-8">
	<meta name="author" content="www.ZBframe.com">
	<title>First Honor</title>


</head>

<body>

	<header id="top_page">
		<div class="navbar-fixed">
		<nav id="nav">
			<div class="container">
			    <div class="nav-wrapper">
				    <a href="index.php" class="brand-logo">
				    	<div class="logo"><img class="responsive-img" src="images/logo.png"></div>
				    </a>
      				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				    <ul class="right hide-on-med-and-down">
				        <li class="our_service">
				        	<a <?php if ($page == 'service') { ?>class="active"<?php } ?> href="#!" id="btn_submenu">Our Service</a>
				        	<ul class="submenu">
				        		<!-- <div class="arrow_up"></div> -->
				        		<li>
				        			<a href="study_abroad.php">Study Abroad</a>
				        		</li>
				        		<li><a href="study_language_abroad.php">Study Language Abroad</a></li>
				        		<li><a href="summer_camp.php">Summer Camp</a></li>
				        		<li><a href="study_tour_seminar.php">Study Tour &amp; Seminar</a></li>
				        	</ul>
				        </li>
				        <li><a <?php if ($page == 'about') { ?>class="active"<?php } ?> href="about.php">About Us</a></li>
				        <li><a <?php if ($page == 'news') { ?>class="active"<?php } ?> href="news.php">News</a></li>
				        <li><a <?php if ($page == 'gallery') { ?>class="active"<?php } ?> href="gallery.php">Gallery</a></li>
				        <li><a <?php if ($page == 'testimonial') { ?>class="active"<?php } ?> href="testimonial.php">Testimonial</a></li>
				        <li><a <?php if ($page == 'contact') { ?>class="active"<?php } ?> href="index.php#h_contact">Contact Us</a></li>
				    </ul>



				    <ul class="side-nav" id="mobile-demo">

				        <!-- <li>
				        <a <?php if ($page == 'service') { ?>class="active"<?php } ?> href="#!">Our Service</a>
				        </li> -->

				        <li class="no-padding">
					        <ul class="collapsible collapsible-accordion">
					          <li>
					            <a class="collapsible-header">Our Service<i class="material-icons">arrow_drop_down</i></a>
					            <div class="collapsible-body">
					              <ul>
					                <li><a href="study_abroad.php">Study Abroad</a></li>
					                <li><a href="study_language_abroad.php">Study Language Abroad</a></li>
					                <li><a href="summer_camp.php">Summer Camp</a></li>
					                <li><a href="study_tour_seminar.php">Study Tour &amp; Seminar</a></li>
					              </ul>
					            </div>
					          </li>
					        </ul>
					    </li>



				        <li><a <?php if ($page == 'about') { ?>class="active"<?php } ?> href="about.php">About Us</a></li>
				        <li><a <?php if ($page == 'news') { ?>class="active"<?php } ?> href="news.php">News</a></li>
				        <li><a <?php if ($page == 'gallery') { ?>class="active"<?php } ?> href="gallery.php">Gallery</a></li>
				        <li><a <?php if ($page == 'testimonial') { ?>class="active"<?php } ?> href="testimonial.php">Testimonial</a></li>
				        <li><a <?php if ($page == 'contact') { ?>class="active"<?php } ?> href="index.php#h_contact">Contact Us</a></li>
				    </ul>
			    </div>
			</div>
		</nav>
		</div>
		
	</header>

	<script type="text/javascript">
		$(".button-collapse").sideNav();
	</script>

	<script>
	$(document).ready(function(){
	    $("#btn_submenu").click(function(){
	        $(".submenu").toggle();
	    });
	});
	</script>

<?php $page = 'service'; ?>
<?php include ('header.php'); ?>


<!-- study_abroad_wrapper -->
<div class="study_abroad_wrapper">
	<div class="study_abroad_section1">
		<div class="container">
			<h1 class="section_header white_frame_large bg_left header_padding_left" id="header_study_tour">study tour and seminar</h1>


			<!-- country_slider_wrapper -->
			<div class="country_slider_wrapper">
				<div class="images_slider">
					<ul class="country_slider">
					  <li><img src="images/study_tour_seminar/study_tour_slide1.jpg"></li>
					  <li><img src="images/study_tour_seminar/study_tour_slide1.jpg"></li>
					  <li><img src="images/study_tour_seminar/study_tour_slide1.jpg"></li>
					  <li><img src="images/study_tour_seminar/study_tour_slide1.jpg"></li>
					</ul>
				</div>
			</div>
			<!-- end country_slider_wrapper -->

			<script type="text/javascript">
				$(document).ready(function(){
				  $('.country_slider').bxSlider({
				  	mode: 'horizontal',
				  	responsive: true,
				  	auto: true,
				  	pause: 4000,
				  	controls: false,
				  });
				});
			</script>



			<!-- school_list -->
			<div class="school_list">
				<p>	Just some 137 kilometres from the Equator, the multi-cultural Republic of Singapore is an international,
ultra modern city-state and island lying just off the southern tip of the Malay Peninsula. Since its split from
Malaya almost 60 years ago, Singapore’s dramatic rise from a port to one of the world’s leading international
economies is a phenomenon. The Village Camps ‘Discover Singapore’ programme will introduce our youngsters
into the sights, sounds and stunning facilities of Singapore, illustrating why the city is rated one of the best
places in the world to live and visit.</p>

				<div class="row">
					<div class="col s12 m12 l12">
						<div class="highlight">
							ลูกค้าของเรา
						</div>
					</div>
				</div>

				<div class="row customer_logo">
					<div class="col s6 m3 l3 logo_box">
						<img src="images/study_tour_seminar/logo1.png">
					</div>
					<div class="col s6 m3 l3 logo_box">
						<img src="images/study_tour_seminar/logo1.png">
					</div>
					<div class="col s6 m3 l3 logo_box">
						<img src="images/study_tour_seminar/logo1.png">
					</div>
					<div class="col s6 m3 l3 logo_box">
						<img src="images/study_tour_seminar/logo1.png">
					</div>
				</div>





			</div>
			<!-- end school_list -->


		</div>

		


	</div>
</div>
<!-- end study_abroad_wrapper -->



<div class="blue_bg">
	<div class="container">
		<?php include ('footer_white.php'); ?>
	</div>
</div>



</body>
</html>


<!-- Smooth Scroll -->
<script type="text/javascript">
	/*var nav_height = document.getElementById('nav').offsetHeight;

	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top - nav_height
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});*/
</script>




<?php $page = 'service'; ?>
<?php include ('header.php'); ?>


<!-- study_abroad_wrapper -->
<div class="study_abroad_wrapper">
	<div class="study_abroad_section1">
		<div class="container">
			<h1 class="section_header white_frame_large bg_left header_padding_left" id="header_study_language_abroad">study language abroad</h1>


			<!-- country_slider_wrapper -->
			<div class="country_slider_wrapper">
				<div class="images_slider">
					<ul class="country_slider">
					  <li><img src="images/study_language_abroad/uk/country_slide1.jpg"></li>
					  <li><img src="images/study_language_abroad/uk/country_slide2.jpg"></li>
					  <li><img src="images/study_language_abroad/uk/country_slide3.jpg"></li>
					  <li><img src="images/study_language_abroad/uk/country_slide4.jpg"></li>
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
				<h2 class="school_list_header">การเรียนภาษา ณ ประเทศอังกฤษ</h2>

				<div class="row">

					<div class="col s12 m3 l3 offset-m1 offset-l1">
						<div class="highlight">
							โรงเรียน
						</div>
						<ul>
							<li><a href="study_language_abroad_school_detail.php">Lincoln</a></li>
							<li><a href="study_language_abroad_school_detail.php">Manchester</a></li>
							<li><a href="study_language_abroad_school_detail.php">Liverpool</a></li>
						</ul>
					</div>

					<div class="col s12 m3 l3">
						<div class="highlight">
							สถาบันภาษา
						</div>
						<ul>
							<li><a href="study_language_abroad_school_detail.php">University of Lincolndcdcdd</a></li>
							<li><a href="study_language_abroad_school_detail.php">Manchester</a></li>
							<li><a href="study_language_abroad_school_detail.php">Liverpool</a></li>
						</ul>
					</div>

					<div class="col s12 m4 l4">
						<div class="highlight">
							มหาวิทยาลัย
						</div>
						<ul>
							<li><a href="study_language_abroad_school_detail.php">University of Lincoln</a></li>
							<li><a href="study_language_abroad_school_detail.php">University of Manchester</a></li>
							<li><a href="study_language_abroad_school_detail.php">University of Liverpool</a></li>
						</ul>
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



<?php $page = 'service'; ?>
<?php include ('header.php'); ?>


<!-- study_abroad_wrapper -->
<div class="study_abroad_wrapper">
	<div class="study_abroad_section1">
		<div class="container">
			<h1 class="section_header white_frame bg_left header_padding_left">study abroad</h1>


			<!-- country_slider_wrapper -->
			<div class="country_slider_wrapper">
				<div class="images_slider">
					<ul class="country_slider">
					  <li><a href="#"><img src="images/study_abroad/uk/school/uol1.jpg"></a></li>
					  <li><a href="#"><img src="images/study_abroad/uk/school/uol2.jpg"></a></li>
					  <li><a href="#"><img src="images/study_abroad/uk/school/uol3.jpg"></a></li>
					  <li><a href="#"><img src="images/study_abroad/uk/school/uol4.jpg"></a></li>
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
				<h2 class="school_list_header">University of Lincoln</h2>

				<div class="row">

					<div class="col s12 m12 l12">
						<div class="highlight">
							Why Choose Lincoln?
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					</div>

				</div>

				<div class="row">

					<div class="col s12 m12 l12">
						<div class="highlight">
							สถานที่ตั้ง
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					</div>

				</div>

				<div class="row">

					<div class="col s12 m12 l12">
						<div class="highlight">
							หลักสูตรการเรียน
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					</div>

				</div>

				<div class="row">

					<div class="col s12 m12 l12">
						<div class="highlight">
							เงื่อนไขการเข้าเรียน
						</div>
						<ul>
							<li>IELTS</li>
							<li>GPA 2.5 ขึ้นไป</li>
						</ul>
					</div>

				</div>


				<!-- button_wrapper -->
				<div class="button_wrapper">
					<a class="btn_white" href="study_abroad_country.php">
						<span>Back</span>
					</a>
					<a class="btn_blue" href="index.php#h_contact">
						<span>Submit</span>
					</a>
				</div>
				<!-- end button_wrapper -->


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



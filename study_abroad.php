
<?php $page = 'service'; ?>
<?php include ('header.php'); ?>


<!-- study_abroad_wrapper -->
<div class="study_abroad_wrapper">
	<div class="study_abroad_section1">
		<div class="container">
			<h1 class="section_header white_frame bg_left header_padding_left">study abroad</h1>
		</div>
	</div>

	<div class="study_abroad_section2">
		<div class="container">
			<h2 class="header">บริการแนะนำการศึกษาต่อต่างประเทศ</h2>
			

			<div class="country_section">
				<div class="row">

					<div class="col s12 m6 l4 country_wrapper">
					<a href="study_abroad_country.php">
						<div class="country_picture"><img src="images/study_abroad/singapore.jpg"></div>
						<span class="country_text">
							<span><strong>Singapore</strong></span>
						</span>
					</a>
					</div>

					<div class="col s12 m6 l4 country_wrapper">
					<a href="study_abroad_country.php">
						<div class="country_picture"><img src="images/study_abroad/uk.jpg"></div>
						<span class="country_text">
							<span><strong>United Kingdom</strong></span>
						</span>
					</a>
					</div>

					<div class="col s12 m6 l4 country_wrapper">
					<a href="study_abroad_country.php">
						<div class="country_picture"><img src="images/study_abroad/australia.jpg"></div>
						<span class="country_text">
							<span><strong>Australia</strong></span>
						</span>
					</a>
					</div>

					<div class="col s12 m6 l4 country_wrapper">
					<a href="study_abroad_country.php">
						<div class="country_picture"><img src="images/study_abroad/new_zealand.jpg"></div>
						<span class="country_text">
							<span><strong>New Zealand</strong></span>
						</span>
					</a>
					</div>

					<div class="col s12 m6 l4 country_wrapper">
					<a href="study_abroad_country.php">
						<div class="country_picture"><img src="images/study_abroad/usa.jpg"></div>
						<span class="country_text">
							<span><strong>USA</strong></span>
						</span>
					</a>
					</div>

					<div class="col s12 m6 l4 country_wrapper">
					<a href="study_abroad_country.php">
						<div class="country_picture"><img src="images/study_abroad/other.jpg"></div>
						<span class="country_text">
							<span><strong>Other</strong></span>
						</span>
					</a>
					</div>


				</div>
			</div>

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



<?php $page = 'testimonial'; ?>
<?php include ('header.php'); ?>

<!-- testimonial_wrapper -->
<div class="testimonial_wrapper">
	<div class="container">
		<h1 class="section_header blue_frame bg_left header_padding_left">feed back</h1>

		<!-- testimonial_list -->
		<div class="testimonial_list">

			<!-- Feedback 1 -->
			<div class="row">
				<div class="col s12 m3 l2">
					<div class="testimonial_picture">
						<img src="images/team/team1.jpg">
					</div>	
				</div>
				<div class="col s12 m9 l10">
					<div class="testimonial_desc">
					<!-- <div class="triangle-left"></div> -->
						<strong>Nana</strong>
						<p>They were always helpful when I needed some assistance and were very informative.
	I didn't have any issues with them during my summer in America. The team were friendly
	from start to finish. It was nice that they came to visit me at the camp too!</p>
					</div>
				</div>
			</div>



			<!-- Feedback 2 -->
			<div class="row">
				<div class="col s12 m3 l2">
					<div class="testimonial_picture">
						<img src="images/team/team1.jpg">
					</div>	
				</div>
				<div class="col s12 m9 l10">
					<div class="testimonial_desc">
						<strong>Nana</strong>
						<p>They were always helpful when I needed some assistance and were very informative.
	I didn't have any issues with them during my summer in America. The team were friendly
	from start to finish. It was nice that they came to visit me at the camp too!</p>
					</div>
				</div>
			</div>


			<!-- Feedback 3 -->
			<div class="row">
				<div class="col s12 m3 l2">
					<div class="testimonial_picture">
						<img src="images/team/team1.jpg">
					</div>	
				</div>
				<div class="col s12 m9 l10">
					<div class="testimonial_desc">
						<strong>Nana</strong>
						<p>They were always helpful when I needed some assistance and were very informative.
	I didn't have any issues with them during my summer in America. The team were friendly
	from start to finish. It was nice that they came to visit me at the camp too!</p>
					</div>
				</div>
			</div>


		</div>
		<!-- end testimonial_list -->

		
		<div class="load_more">
			<a href="#!"><div class="load_more_icon_blue"></div></a>
		</div>
		

	</div>
</div>
<!-- end testimonial_wrapper -->



<div class="white_bg">
	<div class="container">
		<?php include ('footer_blue.php'); ?>
	</div>
</div>


</body>
</html>

<!-- Smooth Scroll -->
<script type="text/javascript">
	var nav_height = document.getElementById('nav').offsetHeight;
	// document.write('nav_height');

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
	});
</script>
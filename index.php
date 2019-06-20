
<?php $page = 'home'; ?>
<?php include ('header.php'); ?>

	<p>test</p>

	<div class="slideshow">
		<ul class="bxslider">
		  <li><a href="#"><img src="images/slide/slide1.jpg"></a></li>
		  <li><a href="#"><img src="images/slide/slide1.jpg"></a></li>
		  <li><a href="#"><img src="images/slide/slide1.jpg"></a></li>
		  <li><a href="#"><img src="images/slide/slide1.jpg"></a></li>
		</ul>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
		  $('.bxslider').bxSlider({
		  	mode: 'horizontal',
		  	responsive: true,
		  	auto: true,
		  	pause: 4000,
		  	controls: false,
		  });
		});
	</script>


	<!-- h_service -->
	<div class="h_service" id="h_service">
		<div class="container">
			<div class="row">
				<div class="col s12 m4 l4">
					<a href="#">
						<div class="icon"><img src="images/phone_icon.png"></div>
						<p>Join Today</p>
					</a>
				</div>
				<div class="col s12 m4 l4">
					<a href="#">
						<div class="icon"><img src="images/headphone_icon.png"></div>
						<p>Ask Question</p>
					</a>
				</div>
				<div class="col s12 m4 l4">
					<a href="#">
						<div class="icon"><img src="images/mail_icon.png"></div>
						<p>Contact Us</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end h_service -->


	<!-- h_about -->
	<div class="h_about" id="h_about">
		<div class="container">
			<h1 class="section_header blue_frame bg_center">what we do</h1>
			<div class="description">
				<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and
the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the
spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of
an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below,
I could see a ruddy light streaming through a rift in the clouds</p>
			</div>
			<div class="h_about_link">
				<a href="about.php">
					<div class="icon">
						<i class="material-icons">person</i>
						<span>Our team</span>
					</div>
				</a>
				<a href="about.php#faq">
					<div class="icon">
						<i class="material-icons">question_answer</i>
						<span>FAQ</span>
					</div>
				</a>
			</div>
		</div>
	</div>
	<!-- end h_about -->


	<!-- h_news -->
	<div class="h_news" id="h_news">
		<div class="container">
			<h1 class="section_header white_frame bg_left header_padding_left">what's news</h1>

			<div class="row">
				<div class="col s12 m6 l6">
					<a href="news.php"><img class="responsive-img img_overlay" src="images/news/news1.jpg"></a>
					<div class="description" id="readmore">
						<h3><a href="news.php">Library in UK  (4 days) Library in UK  (4 days) Library in UK  (4 days)</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col s12 m6 l6">
					<a href="news.php"><img class="responsive-img img_overlay" src="images/news/news2.jpg"></a>
					<div class="description" id="readmore">
						<h3><a href="news.php">Library in UK  (4 days)</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
					<a href="news.php"><img class="responsive-img img_overlay" src="images/news/news1.jpg"></a>
					<div class="description" id="readmore">
						<h3><a href="news.php">Library in UK  (4 days)</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col s12 m6 l6">
					<a href="news.php"><img class="responsive-img img_overlay" src="images/news/news2.jpg"></a>
					<div class="description" id="readmore">
						<h3><a href="news.php">Library in UK  (4 days)</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>

			<div class="viewall">
				<a href="#">
					<span>view all</span>
					<div class="viewall_icon">
						
					</div>
				</a>
			</div>

		</div>
	</div>
	<!-- end h_news -->


	<!-- h_gallery -->
	<div class="h_gallery" id="h_gallery">
		<div class="thumb_wrapper">
			<!-- <div class="col l3"> -->
				<div class="thumb1">
					<a href="#">
						<div class="gallery_albumn">
							<img src="images/news/news1.jpg">
						</div>
						<span class="gallery_text">
							<span>2017 - Night Party</span>
						</span>
					</a>
				</div>
				<div class="thumb1">
					<a href="#">
						<div class="gallery_albumn">
							<img src="images/news/news2.jpg">
						</div>
						<span class="gallery_text">
							<span>2017 - UK</span>
						</span>
					</a>
				</div>
				<div class="thumb1">
					<a href="#">
						<div class="gallery_albumn">
							<img src="images/news/news3.jpg">
						</div>
						<span class="gallery_text">
							<span>2017 - USA</span>
						</span>
					</a>
				</div>
				<div class="thumb1">
					<a href="#">
						<div class="gallery_albumn">
							<img src="images/news/news4.jpg">
						</div>
						<span class="gallery_text">
							<span>2017 - Singapore</span>
						</span>
					</a>
				</div>
			<!-- </div> -->
		</div>
		<div class="thumb_wrapper">
			<!-- <div class="col l3"> -->
				<div class="thumb1">
					<a href="#">
						<div class="gallery_albumn">
							<img src="images/news/news1.jpg">
						</div>
						<span class="gallery_text">
							<span>2017 - Japan</span>
						</span>
					</a>
				</div>
				<div class="thumb1">
					<a href="#">
						<div class="gallery_albumn">
							<img src="images/news/news2.jpg">
						</div>
						<span class="gallery_text">
							<span>2017 - Australia</span>
						</span>
					</a>
				</div>
				<div class="thumb1">
					<a href="#">
						<div class="gallery_albumn">
							<img src="images/news/news3.jpg">
						</div>
						<span class="gallery_text">
							<span>2017 - London</span>
						</span>
					</a>
				</div>
				<div class="thumb1">
					<div class="viewall viewall_icon">
						<a href="gallery.php">
							<span>see all<br>our great moment</span>
							<div class="viewall_icon">
								
							</div>
						</a>
					</div>
				</div>
			<!-- </div> -->
		</div>
	</div>
	<!-- end h_gallery -->



	<!-- h_feedback -->
	<div class="h_feedback" id="h_feedback">
		<div class="container">
			<h1 class="section_header blue_frame bg_left header_padding_left">feed back</h1>
		</div>

		<!-- feedback_list -->
		<div class="feedback_list">
			<div class="slider1">

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback1.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<a href="testimonial.php"><strong>Nana</strong></a>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead. Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback2.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<a href="testimonial.php"><strong>Monchai</strong></a>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback3.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<a href="testimonial.php"><strong>Apisit</strong></a>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback1.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<a href="testimonial.php"><strong>Nana</strong></a>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback2.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<a href="testimonial.php"><strong>Monchai</strong></a>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback3.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<a href="testimonial.php"><strong>Apisit</strong></a>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback1.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<a href="testimonial.php"><strong>Nana</strong></a>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback2.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<a href="testimonial.php"><strong>Monchai</strong></a>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>

				<div class="slide">
				<a href="testimonial.php"><img class="img_overlay" src="images/feedback/feedback3.jpg"></a>
					<div class="feed_desc" id="feed_desc">
					  	<strong>Apisit</strong>
					  	<p>Apparently we had reached
			a great height in the atmosphere,
			for the sky was a dead</p>
					</div>
				</div>
			  
			</div>
		</div>
		<!-- end feedback_list -->

	</div>
	<!-- end h_feedback -->


	<script type="text/javascript">
		$(document).ready(function(){
		  $('.slider1').bxSlider({
		    slideWidth: 330,
		    minSlides: 1,
		    maxSlides: 3,
		    moveSlides: 1,
		    slideMargin: 15,
		    auto: true,
		    pager: false,
		    infiniteLoop: true,
		  });
		});
	</script>



	<!-- h_contact -->
	<div class="h_contact" id="h_contact">
		<div class="container">
			<h1 class="section_header blue_frame bg_left header_padding_left">contact us</h1>

			<div class="contact_form">
				<form>
					<div class="row">
						<div class="col s12 m6 l6">

							<div class="input-field col s12 m5 l5">
								<select class="browser-default">
									<option value="0" disabled selected>คำนำหน้า</option>
									<option value="1">นาย</option>
									<option value="2">นางสาว</option>
									<option value="3">อื่นๆ</option>
								</select>
							</div>

							<div class="input-field col s12 m7 l7">
					        	<input type="text" name="fullname" class="validate" id="fullname">
					        	<label for="fullname">ชื่อ - สกุล</label>
					        </div>

					        <div class="input-field col s12">
					        	<input id="email" type="email" class="validate">
					        	<label for="email">Email</label>
					        </div>

					        <div class="input-field col s12">
					        	<input id="phone" type="tel" class="validate">
					        	<label for="phone">Phone</label>
					        </div>

						</div>

						<div class="col s12 m6 l6">
							<div class="input-field col s12 m12 12">
								<select class="browser-default">
									<option value="0" disabled selected>หัวข้อ</option>
									<option value="1">เรียนต่อต่างประเทศ</option>
									<option value="2">เรียนภาษาที่ต่างประเทศ</option>
									<option value="3">Summer camp</option>
									<option value="4">Study tour &amp; Seminar</option>
									<option value="5">อื่นๆ</option>
								</select>
							</div>
							<div class="input-field col s12">
					          <textarea id="textarea1" class="materialize-textarea"></textarea>
					          <label for="textarea1">ฝากข้อความไว้เลย</label>
					        </div>
						</div>

					</div>

					<!-- <div class="row"> -->
						<div class="submit_button">
							<a class="btn_blue" href="#!">
								<span>Submit</span>
							</a>
						</div>
					<!-- </div> -->

				</form>
			</div>


			<div class="row">
				<div class="col s12 m12 l12">
					<div id="map"></div>
					
					<script>
				      function initMap() {
				        var firsthonor = {lat: 13.740988, lng: 100.557935};
				        var map = new google.maps.Map(document.getElementById('map'), {
				          zoom: 20,
				          center: firsthonor
				        });
				        var marker = new google.maps.Marker({
				          position: firsthonor,
				          map: map
				        });
				      }
				    </script>
				    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

				</div>

				<!-- go to top -->
				<div class="col s12 m12 l12">
					<a href="#top_page"><div class="top"><img src="images/top.png"></div></a>
				</div>
				<!-- end go to top -->
			</div>


			<div class="blue_bg">
				<div class="container">
					<?php include ('footer_white.php'); ?>
				</div>
			</div>

		</div>
	</div>
	<!-- end h_contact -->








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





<!-- JS Dot Dot Dot -->
<!-- Home News Title -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#readmore h3").dotdotdot({
			/*	The text to add as ellipsis. */
			ellipsis	: '... ',
	 
			/*	How to cut off the text/html: 'word'/'letter'/'children' */
			wrap		: 'word',
		
			/*	Optionally set a max-height, can be a number or function.
				If null, the height will be measured. */
			height		: 26,
	 
			/*	Callback function that is fired after the ellipsis is added,
				receives two parameters: isTruncated(boolean), orgContent(string). */
			callback	: function( isTruncated, orgContent ) {},
	 
			lastCharacter	: {
	 
				/*	Remove these characters from the end of the truncated text. */
				remove		: [ ' ', ',', ';', '.', '!', '?' ],
	 
				/*	Don't add an ellipsis if this array contains 
					the last character of the truncated text. */
				noEllipsis	: []
			}
		});
	});
</script>

<!-- Home News Description -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#readmore p").dotdotdot({
			/*	The text to add as ellipsis. */
			ellipsis	: '... ',
	 
			/*	How to cut off the text/html: 'word'/'letter'/'children' */
			wrap		: 'word',
		
			/*	Optionally set a max-height, can be a number or function.
				If null, the height will be measured. */
			height		: 130,
	 
			/*	Callback function that is fired after the ellipsis is added,
				receives two parameters: isTruncated(boolean), orgContent(string). */
			callback	: function( isTruncated, orgContent ) {},
	 
			lastCharacter	: {
	 
				/*	Remove these characters from the end of the truncated text. */
				remove		: [ ' ', ',', ';', '.', '!', '?' ],
	 
				/*	Don't add an ellipsis if this array contains 
					the last character of the truncated text. */
				noEllipsis	: []
			}
		});
	});
</script>


<!-- Home Feedback Description -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#feed_desc p").dotdotdot({
			/*	The text to add as ellipsis. */
			ellipsis	: '...',
	 
			/*	How to cut off the text/html: 'word'/'letter'/'children' */
			wrap		: 'word',
		
			/*	Optionally set a max-height, can be a number or function.
				If null, the height will be measured. */
			height		: 80,
	 
			/*	Callback function that is fired after the ellipsis is added,
				receives two parameters: isTruncated(boolean), orgContent(string). */
			callback	: function( isTruncated, orgContent ) {},
	 
			lastCharacter	: {
	 
				/*	Remove these characters from the end of the truncated text. */
				remove		: [ ' ', ',', ';', '.', '!', '?' ],
	 
				/*	Don't add an ellipsis if this array contains 
					the last character of the truncated text. */
				noEllipsis	: []
			}
		});
	});
</script>

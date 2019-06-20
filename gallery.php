
<?php $page = 'gallery'; ?>
<?php include ('header.php'); ?>

<!-- gallery_wrapper -->
<div class="gallery_wrapper">

	<div class="container">
		<h1 class="section_header white_frame bg_left header_padding_left">gallery</h1>
	</div>

	<!-- h_gallery -->
	<div class="h_gallery" id="h_gallery">
		<div class="thumb_wrapper">
			<!-- <div class="col l3"> -->
				<div class="thumb1">
					<a href="#" onclick="openModal();currentSlide(1)">
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
					<a href="#">
						<div class="gallery_albumn">
							<img src="images/news/news4.jpg">
						</div>
						<span class="gallery_text">
							<span>2017 - Tokyo</span>
						</span>
					</a>
				</div>
			<!-- </div> -->
		</div>
	</div>
	<!-- end h_gallery -->



		<div class="load_more">
			<a href="#!"><div class="load_more_icon"></div></a>
		</div>

	
</div>
<!-- end gallery_wrapper -->



<div class="white_bg">
	<div class="container">
		<?php include ('footer_blue.php'); ?>
	</div>
</div>



<!-- modal -->
<div id="myModal" class="modal">
  <!-- <span class="close cursor" onclick="closeModal()">&times;</span> -->
  <div class="modal-content">

  	<span class="close cursor" onclick="closeModal()">&times;</span>

    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
        <img src="images/news/news1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
        <img src="images/news/news2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
        <img src="images/news/news3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
        <img src="images/news/news4.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">5 / 6</div>
        <img src="images/news/news1.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">6 / 6</div>
        <img src="images/news/news2.jpg" style="width:100%">
    </div>


    <a class="prev" onclick="plusSlides(-1)"></a>
    <a class="next" onclick="plusSlides(1)"></a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="thumb_wrapper">
	    <div class="column thumb1">
	      <img class="demo" src="images/news/news1.jpg" onclick="currentSlide(1)">
	    </div>

	    <div class="column thumb1">
	      <img class="demo" src="images/news/news2.jpg" onclick="currentSlide(2)">
	    </div>

	    <div class="column thumb1">
	      <img class="demo" src="images/news/news3.jpg" onclick="currentSlide(3)">
	    </div>

	    <div class="column thumb1">
	      <img class="demo" src="images/news/news4.jpg" onclick="currentSlide(4)">
	    </div>

	    <div class="column thumb1">
	      <img class="demo" src="images/news/news1.jpg" onclick="currentSlide(5)">
	    </div>

	    <div class="column thumb1">
	      <img class="demo" src="images/news/news2.jpg" onclick="currentSlide(6)">
	    </div>
    </div>

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


<!-- Modal -->
<script>
	function openModal() {
	  document.getElementById('myModal').style.display = "block";
	}

	function closeModal() {
	  document.getElementById('myModal').style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  var captionText = document.getElementById("caption");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	  captionText.innerHTML = dots[slideIndex-1].alt;
	}
</script>
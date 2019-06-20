
<?php $page = 'news'; ?>
<?php include ('header.php'); ?>

<!-- news_wrapper -->
<div class="news_wrapper">
	<div class="container">
		<h1 class="section_header white_frame bg_left header_padding_left">what's news</h1>

		<div class="row">
			<div class="col s12 m6 l4 news_box">
				<a href="news_detail.php"><img class="responsive-img img_overlay" src="images/news/news1.jpg"></a>
				<div class="description" id="readmore">
					<h3><a href="news_detail.php">Library in UK  (4 days) Library in UK  (4 days) Library in UK  (4 days)</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col s12 m6 l4 news_box">
				<a href="news_detail.php"><img class="responsive-img img_overlay" src="images/news/news2.jpg"></a>
				<div class="description" id="readmore">
					<h3><a href="news_detail.php">Library in UK  (4 days)</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col s12 m6 l4 news_box">
				<a href="news_detail.php"><img class="responsive-img img_overlay" src="images/news/news3.jpg"></a>
				<div class="description" id="readmore">
					<h3><a href="news_detail.php">Library in UK  (4 days) Library in UK  (4 days) Library in UK  (4 days)</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col s12 m6 l4 news_box">
				<a href="news_detail.php"><img class="responsive-img img_overlay" src="images/news/news1.jpg"></a>
				<div class="description" id="readmore">
					<h3><a href="news_detail.php">Library in UK  (4 days) Library in UK  (4 days) Library in UK  (4 days)</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col s12 m6 l4 news_box">
				<a href="news_detail.php"><img class="responsive-img img_overlay" src="images/news/news2.jpg"></a>
				<div class="description" id="readmore">
					<h3><a href="news_detail.php">Library in UK  (4 days)</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col s12 m6 l4 news_box">
				<a href="news_detail.php"><img class="responsive-img img_overlay" src="images/news/news3.jpg"></a>
				<div class="description" id="readmore">
					<h3><a href="news_detail.php">Library in UK  (4 days) Library in UK  (4 days) Library in UK  (4 days)</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>

		<div class="load_more">
			<a href="#!"><div class="load_more_icon"></div></a>
		</div>
		



	</div>
</div>
<!-- end news_wrapper -->



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
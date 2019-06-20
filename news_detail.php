
<?php $page = 'news'; ?>
<?php include ('header.php'); ?>

<!-- news_wrapper -->
<div class="news_wrapper">
	<div class="container">
		

		<div class="row">
			<div class="col s12 m12 l12 news_box">
				<a href="#!"><img class="responsive-img materialboxed" src="images/news/news_detail.jpg"></a>
				<div class="detail_description">
					<h3>Library in UK</h3>
					<div class="published_time"><img src="images/clock_icon.png"><time>17 May 2017 11:30</time></div>
					<p>	Apparently we had reacheda great height in the atmosphere, for the sky was a dead black, and Apparently we
 had reacheda great height in the atmosphere, for the sky was a dead black, and Apparently we had reacheda 
great height in the atmosphere, for the sky was a dead black, and Apparently we had reacheda great height in the
 atmosphere, for the sky was a dead black, antd Apparently we had reacheda great height in the atmosphere,
for the sky was a dead black, and</p>
				</div>
			</div>
			
		</div>

		<div class="load_more">

			<a href="#!"><div class="btn_previous">
				<div class="load_previous"></div>
				<span>Previous</span>
			</div></a>

			<a href="#!"><div class="btn_next">
				<span>Next</span>
				<div class="load_next"></div>
			</div></a>

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
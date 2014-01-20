<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Coming Soon...</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- JS -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.colorbox.js"></script>
	<script>
	
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "25 jan 2014 00:00:00",
				format: "on"
			},
			function() {
				// callback function
			});
			//Examples of how to assign the Colorbox event to elements
				
				$(".inline").colorbox({inline:true, width:"50%"});
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			
		});
	
	</script>
		
		<script>
			$(document).ready(function(){
				
			});
		</script>
</head>
<body>

	<!-- LOGO -->
	<header class="container">
		<a href="http://b111.com.sg" id="logo"><img src="images/logo.png" alt="Coming Soon Page" /></a>
	</header>
	
	
	<!-- TIMER -->
	<div class="timer-area">
		
		<!-- <h1 style="font-size:2em;">CRAZY SUPER SALE </h1><h1 class="sdate" style=" color: #2A9CCC;">15.01.2014</h1> -->
		<p class="crazy">C.N.Y</br>SUPER</br>SALE</p>
		<p class="sdate">25.01.2014</p>
		<ul id="countdown">
			<li>
				<span class="days">00</span>
				<p class="timeRefDays">days</p>
			</li>
			<li>
				<span class="hours">00</span>
				<p class="timeRefHours">hours</p>
			</li>
			<li>
				<span class="minutes">00</span>
				<p class="timeRefMinutes">minutes</p>
			</li>
			<li>
				<span class="seconds">00</span>
				<p class="timeRefSeconds">seconds</p>
			</li>
		</ul>
		
		<h1>If you want to shop now, please visit <a href="http://www.luxurycity.com.sg" style=" color: #F5D87A; border-bottom:1px dotted; font-size:24px;">www.luxurycity.com.sg</a></h1>
		<h1><p><a class='inline' href="#inline_content">
Terms & Conditions</a></p></h1>
	</div> <!-- end timer-area -->
	
	
	
	<!-- SIGNUP -->
	<div class="container">
	
		<h2>Sign up and we’ll notify you of our launch.</h2>

		<div class="form-wrapper">
		
			<form action="" method="post">
			
				<input type="email" name="signup-email" id="signup-email" placeholder="enter your email address" required />
				<input type="submit" value="Notify Me" />
			
			</form>
			
		</div> <!-- end form-wrapper -->

		<footer id="disclaimer">
		
			<p><span>*</span> We won’t use your email for spam, just to notify you of our launch.</p>
		
		</footer>
	
	</div> <!-- end container -->
			<!-- This contains the hidden content for inline calls -->
		<div style='display:none;'>
			<div id='inline_content' style='padding:10px; background:#fff;'>
			<p><strong style="color: #ff0000; font-size:24px;">
Terms & Conditions</strong></p>
			<p>All information collected will be used in accordance with the <strong style="color: #ff0000;">LUXURY CITY B111</strong> privacy policy. Discount valid online only at <a href="http://www.b111.com.sg">www.b111.com.sg</a>. All sales are final. Due to high demand and limitde inventory, orders cannot be guaranteed. Purchases made on <a href="http://www.b111.com.sg">www.b111.com.sg</a> cannot be combined with any other promothin or coupon code. Self-collection at <strong style="color: #ff0000;">Chinatown Point Luxury City B111</strong> flagship store. Sales valid through from <strong style="color: #ff0000;">25th Jan 2014 0000hrs</strong> to <strong style="color: #ff0000;">26th Jan 2014 2359hrs</strong>, Collection starts from <strong style="color: #ff0000;">27th Jan 2014, 11:00am</strong>.</p>
			</div>
		</div>
	
	
	<!-- FOOTER -->
	<footer id="main-footer">
	
		<p><a href="http://www.twitter.com/luxurycitysg">Follow us on Twitter</a> or give us a big <a href="https://www.facebook.com/iloveluxurycity">Like on Facebook</a>.</p>
		<p>&copy; Copyright 2013 b111.com.sg. All rights reserved.</p>
	
	</footer>

</body>
</html>
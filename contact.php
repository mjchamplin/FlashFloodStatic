<!doctype html>

<head>
	<?php $root = $_SERVER['DOCUMENT_ROOT']; 
	include($root."/assets/php/header.php"); 
	?>
	<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css' rel='stylesheet' />	
	
	<title>Flash Flood Print Studios - Commercial screen printing + community studio in Tulsa, Oklahoma</title>
	<meta name="author" content="Flash Flood Print Studios" />
	<meta name="description" content="Graphic design and commercial printing services in Tulsa, Oklahoma include both flatstock and textiles. Screen printing workshops offered monthly for a variety of age groups. Studio services (film output, coat & exposure of screens, studio rental and more) available for those who know how to print but need a little help." />

	<!-- Application-specific meta tags -->
	
	<!-- Windows 8: see http://msdn.microsoft.com/en-us/library/ie/dn255024%28v=vs.85%29.aspx for details -->
	<meta name="application-name" content="" />
	<meta name="msapplication-TileColor" content="" />
	<meta name="msapplication-TileImage" content="" />
	<meta name="msapplication-square150x150logo" content="" />
	<meta name="msapplication-square310x310logo" content="" />
	<meta name="msapplication-square70x70logo" content="" />
	<meta name="msapplication-wide310x150logo" content="" />
	<!-- Twitter: see https://dev.twitter.com/docs/cards/types/summary-card for details -->
	<meta name="twitter:card" content="">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:url" content="">
	<!-- Facebook (and some others) use the Open Graph protocol: see http://ogp.me/ for details -->
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />

</head>

<body>

	<div id="wrapper">

		<header class="">
        <div class="logo sub"><a href="#"><img src="assets/images/warning-logo-dark.png" /></a></div>

			<nav class="top nav-collapse">
				<ol>
					<li><a href="/">Home</a>
					</li>
					<li><a href="/about">About</a>
					</li>
					<!--li><a href="services.php">Services</a-->
					</li>
					<li><a href="/work">Work</a>
					</li>
					<li class="active"><a href="#">Contact</a>
					</li>
				</ol>
			</nav>
		</header>
		<section id="map">
			<div>
			</div>
		</section>
		<section>
			<div id="contact-form">
				<form action="//formspree.io/contact@flashfloodprint.com" method="POST">
					<label>Name</label>
					<input type="text" name="name" placeholder="Your name here">
					<label>Email</label>
					<input type="email" name="_replyto" placeholder="Your email address if you please">
					<label>Message</label>
					<textarea type="textarea" name="message" placeholder="What's on your mind?" rows="8"></textarea>
					<input type="submit" value="Send">
				</form>
			</div>
			<div class="contact-info">
				2407 E. Admiral Blvd Tulsa, OK 74110<br /><a href="tel:9187943527">(918) 794-3527</a><br />
				<a href="mailto:contact@flashfloodprint.com">contact@flashfloodprint.com</a>
			</div>
		</section>
	<?php include($root. "/assets/php/content-footer.php"); ?>
	</div>
	<?php include($root."/assets/php/footer.php"); ?>
<script>
// Provide your access token
L.mapbox.accessToken = 'pk.eyJ1IjoibWpjaGFtcGxpbiIsImEiOiJSejB1VjNvIn0.AHpCZrtlNQUQXvMIk_ipnQ';
// Create a map in the div #map
var map = L.mapbox.map('map', 'mjchamplin.map-7l8vccna', {
  zoomControl: false // don't display map controls
}).setView([36.157, -95.965], 14);
// disable 	map dragging and zooming		
//map.dragging.disable();
map.touchZoom.disable();
//map.doubleClickZoom.disable();
map.scrollWheelZoom.disable();

if (map.tap) map.tap.disable();

</script>
</body>

</html>

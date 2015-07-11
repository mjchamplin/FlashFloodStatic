<!doctype html>

<head>
	<?php $root = $_SERVER['DOCUMENT_ROOT']; 
	include($root."/assets/php/header.php"); 
	?>
	<title>Flash Flood Print Studios - Commercial screen printing + community studio in Tulsa, Oklahoma</title>
	<meta name="author" content="Flash Flood Print Studios" />
	<meta name="description" content="Graphic design and commercial printing services in Tulsa, Oklahoma include both flatstock and textiles. Screen printing workshops offered monthly for a variety of age groups. Studio services (film output, coat & exposure of screens, studio rental and more) available for those who know how to print but need a little help."
	/>

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

			<div class="logo">
				<a href="#">
					<img src="assets/images/logo.png" />
				</a>
			</div>
			<nav class="top nav-collapse">
				<ol>
					<li class="active"><a href="/">Home</a>
					</li>
					<li><a href="/about">About</a>
					</li>
					<li><a href="/work">Work</a>
					</li>
					<li><a href="/contact">Contact</a>
					</li>
				</ol>
			</nav>
		</header>

		<section class="billboard">
			<p class="big">print.</p>
		</section>

		<section class="overview clearfix">
			<div class="inner">
				<div id="left-column">
					<h1>Commercial</h1>
					<p>We create beautiful limited-edition event posters, t-shirts and more &mdash; all designed and printed <strong>by hand</strong> in Tulsa, Oklahoma.</p>
					<p>Our commercial print operation satisfies the needs of businesses and individuals looking for unparalleled design and quality. We handle jobs of all shapes and sizes on a wide variety of materials. Contact us for a custom quote.</p>
				</div>
				<div id="right-column">
					<h1>Community</h1>
					<p>We put the space, equipment, and expertise necessary to learn or continue printmaking in the hands of local artists and designers by offering studio rental, classes, workshops and community outreach programs.</p>
					<p>As leaders in a growing local printmaking community, we strive for a fun and creative environment &mdash; and <strong>we want you to join us.</strong>
					</p>
				</div>
				<div class="clearfix"></div>
				<img src="assets/images/warning-logo.png" class="warning" />
			</div>
		</section>
	<?php include($root. "/assets/php/content-footer.php"); ?>
	</div>
	<?php include($root. "/assets/php/footer.php"); ?>
		<script>
			// This script randomly populates an item (.quote) with a string from the array "quotes". ie random quote display, etc.
			$(document).ready(function() {
    			var images = ['squeegee.jpg', 'tame-impala.jpg'];
					$('.billboard').css({'background-image': 'url(assets/images/billboards/' + images[Math.floor(Math.random() * images.length)] + ')'});
			});
		</script>
</body>

</html>
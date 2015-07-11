<!doctype html>

<head>
	<?php $root = $_SERVER['DOCUMENT_ROOT']; 
	include($root."/assets/php/header.php"); 
	?>
	
	
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
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.3.2/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" />

</head>

<body>

	<div id="wrapper">

		<header class="">
        <div class="logo sub"><a href="/"><img src="/assets/images/warning-logo-dark.png" /></a></div>

			<nav class="top nav-collapse">
				<ol>
					<li><a href="/">Home</a>
					</li>
					<li><a href="/about">About</a>
					</li>
					<li class="active"><a href="/work">Work</a>
					</li>
					<li><a href="/contact">Contact</a>
					</li>
				</ol>
			</nav>
		</header>

<section class="clearfix">
	<h1 class="portfolio-heading">
		Full-Service
	</h1>
	<div class="clearfix portfolio-holder">
		<?php 
$thumb_dirname = "portfolio/thumbnails/";
chdir($thumb_dirname);
$thumb_images = glob("*.jpg");
foreach($thumb_images as $thumb_image) {
echo '<a href="#" data-featherlight="portfolio/full-size/'.$thumb_image.'"><img src="portfolio/thumbnails/'.$thumb_image.'" class="portfolio-thumb" /></a>';
	}
?>
	</div>
</section>
	<?php include($root. "/assets/php/content-footer.php"); ?>
	</div>
	<?php include($root."/assets/php/footer.php"); ?>
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.3.2/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>
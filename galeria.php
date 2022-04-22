<!DOCTYPE html>
<html>
	<head>
		<!-- Document Settings -->

		<meta charset="utf-8" />
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="" />
		<meta name="description" content="" />

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.ico">

		<!-- Page Title -->
		<title>Photography Portfolio</title>

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,600,700,900,200' rel='stylesheet' type='text/css'>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">

		<!-- Custom css file -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- Plugins -->
		<link rel="stylesheet" href="assets/css/jquery.fullPage.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/photoswipe.css">
		<link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
		<link rel="stylesheet" href="assets/css/animate.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>

	<!-- Container -->
		<main class="container">


		<!-- Header -->
			<header class="transition header">
				<div class="parallax">
					<div class="darker"></div>
				</div>
				<div class="main-menu">
					<div id="logo">
						<a href="index-1.html">
							<img src="assets/images/logo.png" alt="alex-zane-logo">
						</a>
					</div>

<!-- Menu -->
						<nav id="menu" class="col-md-10 col-sm-10">
							<ul class="hidden-xs">
							<li><a href="index-1.php">Ballina</a>
							</li>
								<li><a class="menu-active" <a href="galeria.php">Galeria</a>
								</li>
								<li><a href="foto.php">Foto e vitit</a></li>
							</ul>
							<div class="mobile-menu col-xs-2 pull-right visible-xs">
								<i class="fa fa-bars fa-2x"></i>
							</div>     
						</nav>
					<!-- /Menu -->

				</div>
				<div class="item-category">
					<h1>Galeria</h1>
					
					<div class="border">
						<div></div>
					</div>
				</div>
			</header>
		<!-- /Header -->

		<!--Content-->
			<div class="content">

			<!-- Row-->
				<div class="masonry gallery row">

					<!-- Grid Item-->
						<figure class="grid-item col-md-4 col-sm-4 col-xs-12">
							<a href="assets/images/portfolio/foto1.jpg" itemprop="contentUrl" data-size="2048x1181">
								<img src="assets/images/portfolio/thumbnails/foto1.jpg" itemprop="thumb" alt="Image description" />
							</a>
						</figure>
					<!-- /Grid Item-->

					<!-- Grid Item-->
						<figure class="grid-item col-md-4 col-sm-4 col-xs-12">
							<a href="assets/images/portfolio/foto2.jpg" itemprop="contentUrl" data-size="2048x1181">
								<img src="assets/images/portfolio/thumbnails/foto2.jpg" itemprop="thumb" alt="Image description" />
							</a>
						</figure>
					<!-- /Grid Item-->

					<!-- Grid Item-->
						<figure class="grid-item col-md-4 col-sm-4 col-xs-12">
							<a href="assets/images/portfolio/foto3.jpg" itemprop="contentUrl" data-size="2048x1181">
								<img src="assets/images/portfolio/thumbnails/foto3.jpg" itemprop="thumb" alt="Image description" />
							</a>
						</figure>
					<!-- /Grid Item-->

					<!-- Grid Item-->
						<figure class="grid-item col-md-4 col-sm-4 col-xs-12">
							<a href="assets/images/portfolio/foto4.jpg" itemprop="contentUrl" data-size="2048x1181">
								<img src="assets/images/portfolio/thumbnails/foto4.jpg" itemprop="thumb" alt="Image description" />
							</a>
						</figure>
					<!-- /Grid Item-->

					<!-- Grid Item-->
						<figure class="grid-item col-md-4 col-sm-4 col-xs-12">
							<a href="assets/images/portfolio/foto5.jpg" itemprop="contentUrl" data-size="2048x1181">
								<img src="assets/images/portfolio/thumbnails/foto5.jpg" itemprop="thumb" alt="Image description" />
							</a>
						</figure>

				</div>
			<!-- /Row -->


			<!-- Root element of PhotoSwipe. Must have class pswp. -->
				<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
				    <!-- Background of PhotoSwipe. 
				         It's a separate element as animating opacity is faster than rgba(). -->
				    <div class="pswp__bg"></div>
				    <!-- Slides wrapper with overflow:hidden. -->
				    <div class="pswp__scroll-wrap">
				        <!-- Container that holds slides. 
				            PhotoSwipe keeps only 3 of them in the DOM to save memory.
				            Don't modify these 3 pswp__item elements, data is added later on. -->
				        <div class="pswp__container">
				            <div class="pswp__item"></div>
				            <div class="pswp__item"></div>
				            <div class="pswp__item"></div>
				        </div>
				        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
				        <div class="pswp__ui pswp__ui--hidden">
				            <div class="pswp__top-bar">
				                <!--  Controls are self-explanatory. Order can be changed. -->
				                <div class="pswp__counter"></div>
				                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
				                <button class="pswp__button pswp__button--share" title="Share"></button>
				                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
				                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
				                <!-- element will get class pswp__preloader active when preloader is running -->
				                <div class="pswp__preloader">
				                    <div class="pswp__preloader__icn">
				                      <div class="pswp__preloader__cut">
				                        <div class="pswp__preloader__donut"></div>
				                      </div>
				                    </div>
				                </div>
				            </div>
				            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				                <div class="pswp__share-tooltip"></div> 
				            </div>
				            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
				            </button>
				            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
				            </button>
				            <div class="pswp__caption">
				                <div class="pswp__caption__center"></div>
				            </div>
				        </div>
				    </div>
				</div>
			<!-- /Root element of PhotoSwipe. Must have class pswp. -->

			<!-- Back to top button -->
				<a href="#" class="back-top btn">
					<i class="fa fa-angle-up fa-2x"></i>
				</a>
			<!-- /Back to top button -->

			<!-- Footer -->
				<footer id="footer">
					<p>© GALERIA SHQIPETARE - 2022</p>
				</footer>
			<!-- /Footer -->
				
			</div>
		<!-- /Content -->

		</main>
	<!-- /Container -->

	<!-- JS -->

		<!-- jquery-1.11.3.min js -->
			<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>

		<!-- Plugins -->
			<script type="text/javascript" src="assets/js/jquery.fullPage.min.js"></script>
			<script type="text/javascript" src="assets/js/imagesloaded.min.js"></script>
			<script type="text/javascript" src="assets/js/masonry.​min.js"></script>
			<script type="text/javascript" src="assets/js/website-smooth-scroll.js"></script>
			<script type="text/javascript" src="assets/js/photoswipe.min.js"></script>
			<script type="text/javascript" src="assets/js/photoswipe-ui-default.min.js"></script>

		<!-- Main js -->
			<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>
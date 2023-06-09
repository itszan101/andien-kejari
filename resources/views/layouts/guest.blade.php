<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('assets/css/css-assets.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700i,700" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="{{ asset('assets/img/LOGO_KEJAKSAAN.png') }}">
	<link rel="apple-touch-icon" href="images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Title
	============================================= -->
	<title>ANDIEN - KEJARI KABOKI</title>
</head>
<body>
    <div id="scroll-progress">
		<div class="scroll-progress"><span class="scroll-percent"></span></div>
	</div>

	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-bar-1" class="header-bar">

				<div class="header-bar-wrap">

					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="hb-content">
									<a class="logo logo-header" href="#">
										<img src="img/LOGO_KEJAKSAAaN.png" alt="">
										<h3><span class="colored">ANDIEN</span></h3>
										<span>KEJARI-KABOKI</span>
									</a><!-- .logo end -->
									<div class="hb-meta">
									</div><!-- .hb-meta end -->
								</div><!-- .hb-content end -->

							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .header-bar-wrap -->

			</div><!-- #header-bar-1 end -->

		</header><!-- #header end -->

		<!-- Banner
		============================================= -->
		<section id="banner">

			<div class="banner-parallax" data-banner-height="800">
				<img src="{{ asset('assets/img/bg-kejaksaan2.png') }}" alt="">
				<div class="overlay-colored color-bg-gradient opacity-90"></div><!-- .overlay-colored end -->
				<div class="slide-content">

					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<a class="logo logo-header" href="#">
									<img src="{{ asset('assets/img/LOGO_KEJAKSAAN.png') }}" alt="" style="width: 130px;padding-bottom: 136px;padding-top: 40px;">
									<h3><span class="colored">ANDIEN</span></h3>
									<span>KEJARI-KABOKI</span>
								</a><!-- .logo end -->
								<div class="banner-center-box text-white md-text-center">
									<h1>
										APLIKASI PENYIMPANAN ARSIP DIGITAL INTELEJEN
									</h1>
									<div class="description">
										Kejaksaan Negeri Kabupaten OKI
									</div>
									
								</div>

							</div><!-- .col-md-7 end -->

							{{ $slot }}

						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .slide-content end -->
				<div class="section-separator wave-1 bottom">
					
				</div><!-- .section-separator -->
			</div><!-- .banner-parallax end -->

		</section><!-- #banner end -->

		<!-- Content
		============================================= -->
		

		<!-- Footer
		============================================= -->
		<footer id="footer" style="margin-top: -100px;">



			<div class="footer-bar-wrap">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							

						</div><!-- .col-md-12 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->

			</div><!-- .footer-bar-wrap -->



		

		</footer><!-- #footer end -->

	</div><!-- #full-container end -->

	<a class="scroll-top-icon scroll-top" href="#"><i class="fa fa-angle-up"></i></a>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/jRespond.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src='{{ asset('assets/js/functions.js') }}'></script>
	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Destino</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('template/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('template/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link href="{{asset('template/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('template/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/styles/responsive.css')}}">
<style media="screen">
	* {
	box-sizing: border-box;
	}
	body {
	margin: 0;
	}
	.row1{
	display:flex;
	justify-content:flex-start;
	align-items:stretch;
	flex-wrap:nowrap;
	padding:100px 10px 10px 10px;
	}
	.cell1{
	min-height:75px;
	flex-grow:1;
	flex-basis:100%;
	}
	#i52ahj{
	height:700px;
	}
	#iristp{
	flex-basis:500px;
	border: 1 px;
	border-style: solid;
	overflow: auto;
	height: 700 px;
	}
	@media (max-width: 768px){
	.row{
	flex-wrap:wrap;
	}
}

</style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>destino</div>
								<div class="logo_image"><img src="{{asset('template/images/logo.png')}}" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="{{url('/')}}">Home</a></li>
								<li class="main_nav_item"><a href="{{url('/')}}">Find</a></li>
								<li class="main_nav_item active"><a href="{{url('/info')}}">Info</a></li>
							</ul>
						</nav>

						<!-- Search -->
						<div class="search">
							<a href="#find"></a><button type="submit" class="search_button ml-auto"><img src="{{asset('template/images/search.png')}}" alt=""></button></a>
						</div>

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="{{asset('template/images/search_2.png')}}" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.html">About us</a></li>
					<li class="menu_item menu_mm"><a href="offers.html">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

				<!-- Menu Social -->

				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>

	<!-- Home -->

	<!-- <div class="home">
		<div class="home_background" style="background-image:url({{asset('template/images/home.jpg')}})"></div>
		<div class="home_content">
			<div class="home_content_inner">
				<div class="home_text_large">discover</div>
				<div class="home_text_small">Discover new worlds</div>
			</div>
		</div>
	</div> -->

@yield('content')

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>destino</div>
								<div class="logo_image"><img src="{{asset('template/images/logo.png')}}" alt=""></div>
							</div>
						</div>
						<div class="footer_about_text">Konsultan perjalanan terbaik. Destino menyediakan beragam informasi yang sering dibutuhkan untuk para traveler sebelum dan saat melakukan perjalanan. Seperti informasi lokasi, cuaca, tempat instansi (rumah sakit, kantor polisi) serta memantau trending dunia maya berdasarkan keyword yang diberikan</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_latest">
						<div class="footer_title">Latest News</div>
						<div class="footer_latest_content">

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="{{asset('template/images/latest_1.jpg')}}" alt="https://unsplash.com/@peecho"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">Brazil Summer</a></div>
									<div class="footer_latest_item_date">Jan 09, 2018</div>
								</div>
							</div>

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="{{asset('template/images/latest_2.jpg')}}" alt="https://unsplash.com/@sanfrancisco"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">A perfect vacation</a></div>
									<div class="footer_latest_item_date">Jan 09, 2018</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="tags footer_tags">
						<div class="footer_title">Tags</div>
						<ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
							<li class="tag"><a href="#">travel</a></li>
							<li class="tag"><a href="#">summer</a></li>
							<li class="tag"><a href="#">cruise</a></li>
							<li class="tag"><a href="#">beach</a></li>
							<li class="tag"><a href="#">offer</a></li>
							<li class="tag"><a href="#">vacation</a></li>
							<li class="tag"><a href="#">trip</a></li>
							<li class="tag"><a href="#">city break</a></li>
							<li class="tag"><a href="#">adventure</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="{{asset('template/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('template/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('template/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('template/plugins/easing/easing.js')}}"></script>
<script src="{{asset('template/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('template/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('template/js/custom.js')}}"></script>
</body>
</html>

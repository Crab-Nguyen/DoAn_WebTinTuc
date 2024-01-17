<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "vi">
	<!-- BEGIN head -->
	<head>
		<title>@yield('title')</title>
		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
		<meta name="generator" content="nt7solution.com">
	    <meta property="fb:app_id" content="{{ (!empty($contact)?$contact->fb_app_id:"") }}" />
	    <meta property="og:type" content="article" />
	    <meta property="og:title" content="@yield('title')" />
	    <meta property="og:image" content="@yield('seo_image')" >
	    <meta property="og:description" content="@yield('seo_description')" >
	    <meta property="og:url" content="@yield('seo_url')" />
	    <meta property="og:site_name" content="{{ (!empty($contact)?$contact->seo_title:"") }}" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{url('public/home/images/favicon.png')}}" type="image/x-icon" />

		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/reset.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/font-awesome.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/weather-icons.min.css')}}" />
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/bootstrap.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/dat-menu.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/main-stylesheet.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/ot-lightbox.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/shortcodes.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/responsive.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/mystyle.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{url('public/home/css/demo-settings.css')}}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
		<script src="https://apis.google.com/js/platform.js" async defer>  {lang: 'vi'}</script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="css/ie-ancient.css" />
		<![endif]-->
	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<!-- <body> -->
	<body class="ot-menu-will-follow">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1717807391847359";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- BEGIN .boxed -->
		<div class="boxed active ">

			<!-- BEGIN .header -->
			<header class="header">
				<!-- BEGIN .top-menu -->
				<div class="top-menu">

					<!-- BEGIN .wrapper -->
					<div class="wrapper pt-2 pb-2">
						<nav class="top-menu-soc right">
                        <div class="header-main-weather pt-4 pb-3">
							<div class="weather-block">
								<i class="wi wi-day-lightning"></i>
								<strong>Đà Nẵng, Việt Nam</strong>
								<span>+20&deg;C, Thoáng</span>
                                <div> <b> <span> Chúc Mừng Năm Mới 2024 </span> </b> </div>
							</div>
						</div>
							<!-- <ul>
								<li><a href="#" target="_blank" class="hover-color-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank" class="hover-color-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank" class="hover-color-google-plus"><i class="fa fa-google-plus"></i></a></li>
							</ul> -->
						</nav>
						<nav class="top-menu-list" >
							<ul class="load-responsive" rel="Top Menu">
								<li><a href="{{url('')}}"><img src="{{url('public/home/'.$contact->logo)}}" alt="No logo" style="height: 75px"></a></li>
								<li>
                                    <div class="header-main-search pt-5 pb-5">
										<div class="search-block">
											<form action="{{ url('/search') }}" >
												<input type="text" name="key" placeholder="Nhập từ khóa tìm kiếm.." />
											</form>
										</div>
									</div>
								</li>
							</ul>
						</nav>

					<!-- END .wrapper -->
					</div>

				<!-- END .top-menu -->
				</div>
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<!-- BEGIN .header-main -->
					<div class="header-main">
						<style type="text/css" media="screen">
							#top_text {
       								color: #00918e;
								    text-shadow: 1px 1px #00918e, 2px 2px #FF8040, 3px 3px #FF8040;
								    font: Bold 30px Sketch_Block;
								    -webkit-transition: all 0.12s ease-out;/*chrome & safari*/
								    -moz-transition:all 0.12s ease-out;/*firefox 3.7*/
								    -o-tramsition:all 0.12s ease-out /*Opera*/
								    }

									#top_text:hover {
									    position:relative; top:-3px; left:-3px;
									    text-shadow:1px 1px #FF8040, 2px 2px #FF8040, 3px 3px #FF8040, 4px 4px #FF8040, 5px 5px #FF8040, 6px 6px #FF8040
									}
						</style>
						<!-- <div class="header-main-logo">
							<a  href="{{url('')}}"><img src="{{ url('/public/logo.png')}}" width="160px"  alt="No logo" /></a>
						</div> -->

						<!-- <div class="header-main-weather">
							<div class="weather-block">
								<i class="wi wi-day-lightning"></i>
								<strong>Đà Nẵng, Việt Nam</strong>
								<span>+20&deg;C, Thoáng</span>
                                <div> <b> <span> Chúc Mừng Năm Mới 2024 </span> </b> </div>
							</div>
						</div> -->


					<!-- END .header-main -->
					</div>


					<nav class="main-menu">
						<a href="#dat-menu" class="dat-menu-button"><i class="fa fa-bars"></i>MENU</a>
						<div class="main-menu-placeholder">
							<div class="main-menu-wrapper">
                            <ul class="top-main-menu load-responsive" style="background: url(https://cdn.24h.com.vn/upload/4-2023/images/2023-12-29/tag-27--1--1703836010-411-width1920height36.png) center center/100% 100% no-repeat;" rel="DANH MỤC TIN">
							<!--  -->
									<li><b><a href="{{url('')}}">TRANG CHỦ</a></b></li>
								@foreach($modnews as $key => $itemmod)
									<li><a style="font-weight:700; text-decoration:none" href="{{ url('loai-tin').'/'.$itemmod->slug }}"><span>{{$itemmod->modname}}</span></a>
										<ul  class="sub-menu">
										@foreach($itemmod->listnews as $itemlist)
											<li><a style="font-weight:700; text-decoration:none" href="{{ url('loai-tin').'/'.$itemlist->slug }}">{{$itemlist->listname}}</a></li>
										@endforeach
										</ul>
									</li>
								@endforeach
								</ul>
							</div>
						</div>
					</nav>

				<!-- END .wrapper -->
				</div>

			<!-- END .header -->
			</header>

			<!-- BEGIN .content -->
			<section class="content">
			<div class="banner-left">
					<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg__1_j6OyGPiYC19fLEYm_-nC52cjWDqfcKPzKGp4YQOjAhau7XCqWic-KzaDn7WRmDrpkBNP51MTM3xDRqdiO0Ypt1_falr2sz68-MKUINKsfbVGzmvIfztYx6bKSB6NriH0VS56Z8bhDdqDOdV5UI2Cpypx7zEbWTwNEF5lAsG75-CYOPcMpP2UxbqJ0/s3752/2-hieunguyenphoto.com.jpg"
					alt=""  class="banner-img"
					style="">
				</div>

			@yield('content')
			<!-- BEGIN .content -->

				<div class="banner-right">
					<img src="https://demoda.vn/wp-content/uploads/2022/02/hinh-nen-bong-da-viet-nam.jpg"
					alt="" class="banner-img"
				>
				</div>
			<!-- BEGIN .content -->
			</section>

			<!-- BEGIN .footer -->
			<footer class="footer">
				<!-- BEGIN .footer-copyright -->
				<div class="footer-copyright">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
                    <div class="row">
							<div class="col">
								<div>
									<h2 style="text-transform: uppercase">
										TRỤ SỞ {{$contact->address}}
									</h2>
										<p>Tầng 12, Tòa nhà Geleximco , 36 Hoàng Cầu, Phường Ô chợ Dừa, Quận Đống Đa, Tp. Hà Nội</p>
										<p>Điện thoại: {{$contact->phone}}</p>
								</div>
								<div class="mt-4">
									<h2>
										TRỤ SỞ HÀ NỘI
									</h2>
										<p>Tầng 12, Tòa nhà Geleximco , 36 Hoàng Cầu, Phường Ô chợ Dừa, Quận Đống Đa, Tp. Hà Nội</p>
										<p>Điện thoại: (84-24) 73 00 24 24 | (84-24) 35 12 18 06</p>
								</div>
								<div class="row mt-4">
									<div class="col">
										<button type="button" class="btn btn-outline-success" style="font-size: 16px"><a href="http://facebook.com/crab.asdfghjkl">LIÊN HỆ QUẢNG CÁO </a></button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary" style="font-size: 16px"> <a href="http://facebook.com/crab.asdfghjkl"> GIỚI THIỆU TRANG </a></button>
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-secondary" style="font-size: 16px"><a href="http://facebook.com/crab.asdfghjkl">GÓP Ý VỚI CHÚNG TÔI</a></button>
									</div>
								  </div>
							</div>
							<div class="col">
									<div class="mb-4">
										<iframe src="{{$contact->map}}" frameborder="0" width="100%"></iframe>
										{{-- <iframe src="{{$contact->fanpage}}" frameborder="0"></iframe> --}}
									</div>
									<p>{!! $contact->slogan_intro !!}</p>
									<p>&copy; Copyright <strong>{{$contact->nameco}}</strong> <?php echo date("Y"); ?>, <strong><a href="https://facebook.com/crab.asdfghjkl/" target="_blank">{{$contact->website}}</a></strong></p>

							</div>
						</div></div>
					<!-- END .wrapper -->
					</div>
				<!-- END .footer-copyright -->
				</div>

			<!-- END .footer -->
			</footer>
			<div class="back_top" style="display: none;">
				<a href="#top" class="right" style="color: #fff;"><i class="fa fa-chevron-up"></i><strong></strong></a>
			</div>
			<div class="popup_menu visible-xs">
				<a href="#dat-menu"  title="Danh mục tin"><i class="fa fa-bars"></i></a>
			</div>

		<!-- END .boxed -->
		</div>

        <style>
			.banner-left {
				position: fixed;
				top:0;
				left: 60px;
				bottom:0;
			}

			.banner-right {
				position: fixed;
				top:0;
				right: 60px;
				bottom:0;
			}

			.banner-img {
				width: 300px;
				height: 100vh;
				padding-top:60px;
				padding-bottom:60px;
			}
            @media screen and (max-width: 1800px) {
    			.banner-img {
        			display: none;/* The width is 100%, when the viewport is 800px or smaller */
    			}
  			}
              .header .main-menu .top-main-menu li a {
				padding: 7px 5px;
			}

			.header .main-menu .main-menu-placeholder.is-now-following.smallify .top-main-menu > li > a, .header .main-menu .main-menu-placeholder.is-now-following.smallify .top-main-menu ul:not(.ot-mega-menu) li a {
    			padding: 7px 5px;
			}
		</style>


		<!-- Scripts -->
		<script type="text/javascript" src="{{url('public/home/jscript/jquery-latest.min.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/modernizr.custom.50878.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/iscroll.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/dat-menu.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/theme-scripts.js')}}"></script>
		<script type="text/javascript" src="{{url('public/home/jscript/ot-lightbox.js')}}"></script>
		<script type="text/javascript" src="{{url('public/js/jquery.sticky-kit.min.js')}}"></script>
	<!-- END body -->
	<script>
		if ($(window).width() >700) {
        	$(".sticky_column").stick_in_parent();
    	}
	</script>
	</body>
<!-- END html -->
</html>

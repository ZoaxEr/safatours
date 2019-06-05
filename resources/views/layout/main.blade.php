<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{$site_settings['site_title']}}</title>
		<link rel="shortcut icon" type="image/x-icon" href="{{url('/') . '/' . $site_settings['site_favicon']}}">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/simple-line-icons.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.timepicker.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.selectBox.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap-datetimepicker-standalone.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/global.php') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.php') }}" >
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
		<link rel="stylesheet" type="text/less" href="{{ asset('css/skin.php') }}">
		@if (App::isLocale('ar'))
			<link rel="stylesheet" type="text/css" href="{{ asset('css/global_rtl.php') }}">
		@endif
		
		<script type="text/javascript" src="{{ asset('js/angular.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/angular-route.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
		{{-- <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script> --}}
		<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap-datetimepicker.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/less.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/theme_app.js') }}"></script>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.selectBox.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.fancybox.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	</head>
	<body data-ng-app="themeonApp">

		<!--Loader Start-->
		<div class="loader">
		<div class="sk-circle">
		<div class="sk-circle1 sk-child"></div>
		<div class="sk-circle2 sk-child"></div>
		<div class="sk-circle3 sk-child"></div>
		<div class="sk-circle4 sk-child"></div>
		<div class="sk-circle5 sk-child"></div>
		<div class="sk-circle6 sk-child"></div>
		<div class="sk-circle7 sk-child"></div>
		<div class="sk-circle8 sk-child"></div>
		<div class="sk-circle9 sk-child"></div>
		<div class="sk-circle10 sk-child"></div>
		<div class="sk-circle11 sk-child"></div>
		<div class="sk-circle12 sk-child"></div>
		</div>
		</div>
		<!--Loader End-->

		<!--Page Wrapper Start-->
		<div id="wrapper" class="home" >

			<!--Header Section Start-->
			@yield('header')
			<!--Header Section End-->

			<!--banner Section start-->
			@yield('banner')
			<!--banner Section End-->

			<!--Content Area Start-->
			<div id="content">
				@yield('content')	
			</div>
			<!--Content Area End-->

			<!--Footer Section start-->
			<footer id="footer" class="bdr-0">
				@yield('footer')
			</footer>

			<!--Footer Section End-->
		</div>

		<!--Page Wrapper End-->

		<!-- revolution slider Js -->
		<script type="text/javascript" src="{{ asset('js//jquery.themepunch.tools.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.revolution.js') }}"></script>
		<script type="text/javascript" src="{{ asset('extensions/revolution.extension.video.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('extensions/revolution.extension.slideanims.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('extensions/revolution.extension.actions.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('extensions/revolution.extension.layeranimation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('extensions/revolution.extension.kenburn.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('extensions/revolution.extension.navigation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('extensions/revolution.extension.migration.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('extensions/revolution.extension.parallax.min.js') }}"></script>
		<!--  revolution slider Js -->
        <!-- map                     -->
        <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
         <!-- map                     -->
		<script type="text/javascript" src="{{ asset('js/site.js') }}"></script>

		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5cd1d4dd2846b90c57ad5ec1/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
<!--[if IE]><link rel="shortcut icon" href="{{ asset('images/favicon-96x96.png') }}"/><![endif]-->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('images/favicon/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('images/favicon/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">
<title>@if (!empty($posts)) {{ config('app.name', 'Technical Web Services') }} @elseif (!empty($post)) {{ $post->seo_title }} @else {{ config('app.name', 'Technical Web Services') }} @endif</title>
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="/css/my-custom.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="/css/modal.css">
<link rel="stylesheet" href="/css/w3.css">
<!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="@if (!empty($post)){{ $post->meta_description }} @elseif (!empty($page)) {{ $page->meta_description }} @else Thoughts on PHP, Magento & Laravel. Step by step guide on finding a solution to the most interesting problems I am coming across during my development career. A deep dive into Magento & Laravel core, extensions/packages, and technologies. @endif">
<meta name="author" content="Danijela Lapcevic">
<meta name="keywords" content="@if (!empty($post)) {{ $post->meta_keywords }}  @elseif (!empty($page)) {{ $page->meta_keywords }} @else Magento, Magento 2, PHP, Tutorials @endif" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@dannie0la" />
<meta name="twitter:title" content="@if (!empty($post)) {!! $post->title !!} @elseif (!empty($page)) {{ $page->title }} @endif" />
<meta name="twitter:description" content="@if (!empty($post)) {!! $post->excerpt !!} @elseif (!empty($page)) {{ $page->excerpt }} @endif" />
<meta name="twitter:image" content="https://www.technicalwebservices.co.uk/storage/{{Voyager::setting("logo")}}" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
{{-- <script type="text/javascript" src="/js/main.js"></script> --}}
<script>
    window.App = {!! json_encode([
        'csrfToken' => csrf_token(),
        'user' => Auth::user(),
        'signedIn' => Auth::check()
    ]) !!};
</script>
<!-- Required-js -->
<!-- main slider-banner -->
<script type="text/javascript" src="/js/skdslider.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<link href="/css/skdslider.css" rel="stylesheet">
<!-- just for testing, delete this comment.css -->
<link href="/css/comment.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

			$('#responsive').change(function(){
			  $('#responsive_wrapper').width($(this).val());
			});

		});
</script>
<!-- //main slider-banner -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- scriptfor smooth drop down-nav -->
<script>
jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
@include('layouts._partials.sessionmsg')
@include('layouts._partials.nav')
@if (Request::is('/'))
<!-- <div id="responsive" style="overflow:hidden;">
    <div id="responsive-wrapper"> -->
	@include('layouts._partials.slider')
<!--     </div>
</div> -->
@else
	@include('layouts._partials.banner')
@endif
<div id="app">
	<div class="container">
		<div class="banner-btm-agile">
			<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
{{-- 			<div id="app"> --}}
				@yield('content')
{{-- 			</div> --}}
			</div>
			<!-- //btm-wthree-left -->
			@include('layouts._partials.sidebar')
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@include('layouts._partials.footer')
<script src="/js/app.js"></script>
<!-- $ (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/bootstrap.js"></script>
{{-- </div> --}}
</body>
</html>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
    <link href="{{asset("assets/img/favicon.png")}}" rel="icon">
    <link href="{{asset("assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta content="" name="description">
    <meta name="description" content="">
	<!-- Meta Keyword -->
	<meta content="" name="keywords">
    <meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="utf-8">
	<!-- Site Title -->
	<title>MAKIDAH</title>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<!--
			CSS
			============================================= -->
	{{-- style --}}
	@stack('before-style')
	@include('includes.styles')
	@stack('after-style')
</head>
<body>
	{{-- header --}}
	@include('includes.home_navbar')

	<div class="content">
		{{-- content --}}
		@yield('content')
	</div>

	<!-- start footer Area -->
	@include('includes.home_footer')
	<!-- End footer Area -->

	{{-- script --}}
	@stack('before-script')
	@include('includes.scripts')
	@stack('after-script')

</body>
</html>

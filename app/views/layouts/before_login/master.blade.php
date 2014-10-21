<!doctype html>
<html lang="en">
	<head>
		<title>The Mandarin | TMIP</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		
		<!-- BEGIN STYLESHEETS -->
		<link rel="stylesheet" href="{{ URL::asset('css/theme-default/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/theme-default/boostbox.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/theme-default/boostbox_responsive.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/theme-default/font-awesome.min.css') }}">

		<!-- Additional CSS includes -->
		@yield('additional_css_includes')

	</head>
	
	<!-- BODY Starts from here -->
	<body class="body-dark">
		@yield('body_content')
		<!-- BEGIN JAVASCRIPT -->
		<link rel="javascript" href="{{ URL::asset('js/libs/jquery/jquery-1.11.0.min.js') }}">
		<link rel="javascript" href="{{ URL::asset('js/libs/jquery/jquery-migrate-1.2.1.min.js') }}">
		<link rel="javascript" href="{{ URL::asset('js/core/BootstrapFixed.js') }}">
		<link rel="javascript" href="{{ URL::asset('js/libs/bootstrap/bootstrap.min.js') }}">
		
		<!-- Additional JS includes -->
		@yield('additional_js_includes')
		
		<!-- Always put App.js and Demo.js last in your javascript imports -->
		<link rel="javascript" href="{{ URL::asset('js/core/App.js') }}">
		
	</body>
</html>
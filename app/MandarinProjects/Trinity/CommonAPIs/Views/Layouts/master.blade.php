<!doctype html>
<html lang="en">
	<head>
		<title>TMIP</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">

		<!-- BEGIN STYLESHEETS -->
		{{ HTML::style('css/theme-default/bootstrap.css') }}
		{{ HTML::style('css/theme-default/boostbox.css') }}
		{{ HTML::style('css/theme-default/boostbox_responsive.css') }}
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Additional CSS includes -->
		@yield('additional_css_includes')

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
        {{ HTML::script('js/libs/utils/html5shiv.js') }}
        {{ HTML::script('js/libs/utils/respond.min.js') }}
		<![endif]-->
	</head>

    <!-- BODY Starts from here -->
    @if(!$currentUser)

        <body class="body-dark">
            @yield('main_content')

            <!-- BEGIN JAVASCRIPT -->
            {{ HTML::script('js/libs/jquery/jquery-1.11.0.min.js') }}
            {{ HTML::script('js/libs/jquery/jquery-migrate-1.2.1.min.js') }}
            {{ HTML::script('js/core/BootstrapFixed.js') }}
            {{ HTML::script('js/libs/bootstrap/bootstrap.min.js') }}
            <!-- Additional JS includes -->
            @yield('additional_js_includes')

            <!-- Always put App.js last in your javascript imports -->
            {{ HTML::script('js/core/App.js') }}
        </body>

    @else

        <body>
            <header id="header">
                @include('TrinityCommonViews::Layouts.Partials.header')
            </header>
            <div id="base">
                <div id="sidebar" class="sidebar-fixed">
                    @include('TrinityCommonViews::Layouts.Partials.sidebar')
                </div>
                <div id="content">
                    <section>
                        <ol class="breadcrumb">
                            @yield('main_content_breadcrumb')
                        </ol>
                        <div class="section-header">
                            @yield('main_content_section-header')
                        </div>
                        <div class="section-body">
                            @yield('main_content_section-body')
                        </div>
                    </section>
                </div>
            </div>

            <!-- BEGIN JAVASCRIPT -->
            {{ HTML::script('js/libs/jquery/jquery-1.11.0.min.js') }}
            {{ HTML::script('js/libs/jquery/jquery-migrate-1.2.1.min.js') }}
            {{ HTML::script('js/core/BootstrapFixed.js') }}
            {{ HTML::script('js/libs/bootstrap/bootstrap.min.js') }}
            <!-- Additional JS includes -->
            @yield('additional_js_includes')

            <!-- Always put App.js last in your javascript imports -->
            {{ HTML::script('js/core/App.js') }}
        </body>

    @endif
    <!-- End of the BODY --!>

</html>
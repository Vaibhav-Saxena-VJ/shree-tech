<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="Untree.co">
      <link rel="shortcut icon" href="favicon.png">

      <title>@yield('title')</title>
      <meta name="description" content="@yield('description')">
      <meta name="Keywords" content="@yield('keywords')">

		<!-- Bootstrap CSS -->
		<link href="{{ asset('theme') }}/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('theme') }}/css/tiny-slider.css" rel="stylesheet">
		<link href="{{ asset('theme') }}/css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar shadow-sm sticky-top navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('theme/images/logo-shri.png') }}" alt="Furni Logo" style="width: 150px;">
         </a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>

        <!-- Product Dropdown with Submenus -->
        <li class="nav-item dropdown main-dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('product') ? 'active' : '' }}" href="#" id="productDropdown" role="button">
                Product
            </a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Burner Controls</a>
                    <ul class="dropdown-menu sub-dropdown">
                        <li><a class="dropdown-item" href="{{ url('/gas-burner-honeywell') }}">Honeywell</a></li>
                        <li><a class="dropdown-item" href="{{ url('/gas-burner-kromschroeder') }}">Kromschroeder</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Flame Monitoring</a>
                    <ul class="dropdown-menu sub-dropdown">
                        <li><a class="dropdown-item" href="{{ url('/flame-monitoring-honeywell') }}">Honeywell</a></li>
                        <li><a class="dropdown-item" href="{{ url('/flame-monitoring-kromschroeder') }}">Kromschroeder</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Gas Train Components</a>
                    <ul class="dropdown-menu sub-dropdown">
                        <li><a class="dropdown-item" href="{{ url('/gas-train-components-honeywell') }}">Honeywell</a></li>
                        <li><a class="dropdown-item" href="{{ url('/gas-train-components-kromschroeder') }}">Kromschroeder</a></li>
                        <li><a class="dropdown-item" href="{{ url('/gas-train-components-maxon') }}">Maxon</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Ignition Transformer</a>
                    <ul class="dropdown-menu sub-dropdown">
                        <li><a class="dropdown-item" href="{{ url('/ignition-transformer-honeywell') }}">Honeywell</a></li>
                        <li><a class="dropdown-item" href="{{ url('/ignition-transformer-kromschroeder') }}">Kromschroeder</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Industrial Burners</a>
                    <ul class="dropdown-menu sub-dropdown">
                        <li><a class="dropdown-item" href="{{ url('/industrial-burners-kromschroeder') }}">kromschroeder</a></li>
                        <li><a class="dropdown-item" href="{{ url('/industrial-burners-maxon') }}">Maxon</a></li>
                        <li><a class="dropdown-item" href="{{ url('/industrial-burners-eclipse') }}">Eclipse</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">Other Products</a>
                    <ul class="dropdown-menu sub-dropdown">
                        <!-- <li><a class="dropdown-item" href="{{ url('/industrial-burners-kromschroeder') }}">kromschroeder</a></li>
                        <li><a class="dropdown-item" href="{{ url('/industrial-burners-maxon') }}">Maxon</a></li>
                        <li><a class="dropdown-item" href="{{ url('/industrial-burners-eclipse') }}">Eclipse</a></li> -->
                    </ul>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/about') }}">About us</a>
        </li>
        <!-- <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/services') }}">Services</a>
        </li> -->
        <!-- <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
        </li> -->
        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/contact') }}">Contact us</a>
        </li>
    </ul>

    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
        <li><a class="nav-link" href="#"><img src="{{ asset('theme') }}/images/user.svg"></a></li>
        <li><a class="nav-link" href="cart.html"><img src="{{ asset('theme') }}/images/cart.svg"></a></li>
    </ul>
</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

      {{-- main content --}}
        <div class="main-content">
            @yield('content')
        </div>
        {{-- end main content --}}

        @include('frontend.layouts.footer')
   </body>
</html>

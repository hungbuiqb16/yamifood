<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('index/images/favicon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('index/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('index/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('index/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('index/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('index/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{('/')}}">
					<img src="{{asset('index/images/logo.png')}}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a><li>
						<li class="nav-item"><a class="nav-link" href="/">About</a></li>
						<li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('booking') }}">Booking</a></li>
						<li class="nav-item"><a class="nav-link" href="/">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="/">Contact</a></li>
                        @if(Auth::user())
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{Auth::user()->fname}}</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{ route('dashboard') }}">Manage</a>
								<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
							</div>
						</li>
						@else
						<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
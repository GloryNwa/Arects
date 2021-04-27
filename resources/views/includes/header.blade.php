<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>::: ARECT ::</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
<link rel="icon" href="/arects/images/logo1.PNG" type="image/x-icon">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="/assetts/custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="/assetts/csss/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assetts/csss/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="/assetts/csss/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="/assetts/csss/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="/assetts/csss/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->

        <!-- Header -->
        <header>
            <!-- Top Navbar -->
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li><a class="url" href="tel:+ 07088494442"><span class="fa fa-phone"></span> 07088494442</a></li>
                        <li><a href="mailto:info@arectlimited.com.ng?Subject= Welcome to Arects Builders Limited" target="_top"><span class="fa fa-envelope"></span> info@arectlimited.com.ng</a></li>
                        <li><a href="#"><span class="fa fa-clock-o"></span> Mon - Sat 9:am - 9:pm</a></li>
                    </ul>
                    <ul class="list-inline social_icon">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href=""><span class="fa fa-linkedin"></span></a></li> 
                        <!-- <li><a href=""><span class="fa fa-dribbble"></span></a></li>  -->
                        <li><a href="https://api.whatsapp.com/send?phone=+2347088494442"><span class="fa fa-whatsapp"></span></a></li>
                        <!-- <li><a href=""><span class="fa fa-youtube"></span></a></li> -->
                    </ul>			
                </div>
            </div><!-- Top Navbar end -->

            <!-- Navbar -->
            <nav class="navbar bootsnav">
                <div class="container">
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href=""><img class="logo" src="/arects/images/logo1.png" alt=""></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="/">Home</a></li>                    
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="{{route('clients')}}">Our Clients</a></li>
                            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                            <li><a href="{{route('contactus')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->
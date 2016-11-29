<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Softmed Company Ltd.</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body class="homepage">
<header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{url('home')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('soft_soln')}}">Software Solution</a></li>
                            <li><a href="{{url('net_soln')}}">Network Solution</a></li>
                            {{--<li><a href="{{url('gis')}}">GIS</a></li>--}}
                            <li><a href="{{url('research')}}">Research & Consultancy</a></li>
                            <li><a href="{{url('ict_training')}}">Training(E-Health  care )</a></li>
                            <li><a href="{{url('business')}}">Business process Eng</a></li>
                        </ul>
                    <li><a href="{{url('contacts')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('contents')

<footer id="footer" class="midnight-blue">
    <div class="container">

        <div class="row">

            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="pull-left">
                                <li><a href="{{url('home')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About Us</a></li>
                                <li><a href="{{url('contacts')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-xs-4">
                            {{--empty space--}}
                        </div>
                        <div class="col-sm-6 col-xs-8">
                            <div class="social">
                                <ul class="social-share">
                                    <li><a href="{{url('http://www.facebook.com/softMed')}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{url('http://www.twitter.com/softMed')}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{url('home')}}"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="{{url('home')}}"><i class="fa fa-linkedin"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 center">
                &copy; 2016 <a target="_blank" href="#">Softmed Company LTD</a>. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>

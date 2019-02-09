<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    {!! Html::style('amit_laravel/css/bootstrap.min.css') !!}
    {!! Html::style('amit_laravel/css/flexslider.css') !!}
    {!! Html::style('amit_laravel/css/style.css') !!}
    {!! Html::style('amit_laravel/css/font-awesome.min.css') !!}
    {!! Html::script('amit_laravel/js/jquery.min.js') !!}
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

</head>
<body id="app-layout">
            <div class="header">
                <div class="container"> <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-paper-plane"></i> Building</a>
                    <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                        <ul class="nav" id="nav">
                            <li class="current"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                            @if(Auth::user()->groupid ==1)
                                                <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-archive"></i>Dashboard</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                @endif

                            <div class="clear"></div>
                        </ul>
                        <script type="text/javascript" src="js/responsive-nav.js"></script>
                    </div>
                </div>
        </div>
    @yield('content')
            <div class="footer">
                <div class="footer_bottom">
                    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
                    <div class="copy">
                        <p>Copyright &copy; 2019 Company AMIT. Design by <a href="http://www.templategarden.com" rel="nofollow">Mohamed Mostafa</a></p>
                    </div>
                </div>
            </div>
    <!-- JavaScripts -->
    {!! Html::script('amit_laravel/js/bootstrap.min.js') !!}
    {!! Html::script('amit_laravel/js/jquery.flexslider.js') !!}
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

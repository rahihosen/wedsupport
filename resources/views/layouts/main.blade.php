<!DOCTYPE HTML>
<html>

<head>
    <title>Wedsupport</title>
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:image" content="{{ asset('assets/images/slide1.jpg') }}" />
    <meta property="og:title" content="Start your Match making" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://wedsupport.com/" />
    <meta name="keywords" content="Wedsupport" />
    <meta property="og:description"
        content="wedsupport.com, is an international matrimonial web portal aim to help those people are trying to find their perfect match. It is designed to help the members to brows their partner with in a secured environment sourcing only verified, trusted and genuine people trying to find their soul mates" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ asset('assets/css/bootstrap-3.1.1.min.css') }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('assets/css/style.css') }}?i=18" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    {{-- <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"> --}}


    <script type="text/javascript" src="{{ asset('assets/js/countries.js') }}"></script>
    <!--<script type="text/javascript" src="{{ asset('assets/zoom2/ezoom.js') }}"></script>-->
    <script type="text/javascript"
        src="{{ asset('assets/Minimalist-Image-Zoom-Plugin-For-jQuery-ViewImage-js/view-image.js') }}"></script>


    <!----font-Awesome----->
    <script>
        $(document).ready(function() {
            // $(".dropdown").hover(
            //     function() {
            //         $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            //         $(this).toggleClass('open');
            //     },
            //     function() {
            //         $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            //         $(this).toggleClass('open');
            //     }
            // );


            jQuery.viewImage({
                'target': 'img'

            });

            jQuery.viewImage({
                'exclude': '.exclude',
            });






        });
    </script>
</head>

<body>
    <!-- ============================  Navigation Start =========================== -->
    <div class="navbar navbar-inverse-blue navbar sticky">
        <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
        <div class="navbar-inner-two">
            <div class="container">
                <div class="navigation">
                    <nav id="colorNav">
                        {{-- <ul>
				<li class="green">
					<a href="#" class="icon-home"></a>
					<ul>


						<li class="last"><a href="{{ route("login") }}">Login</a></li>
					<li class="last"><a href="{{ route("register") }}">Register</a></li>
					    <li><a href="{{route("logout")}}">Logout</a></li>
					</ul>
				</li>
			   </ul> --}}
                    </nav>
                </div>
                <a class="brand2" href="{{ route('index') }}"><img class="exclude"
                        src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                <div class="pull-right">
                    <nav class="navbar nav_bottom" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                                data-target="#bs-megadropdown-tabs"><i class="fa fa-bars" aria-hidden="true"></i>
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav nav_1">
                                <li><a style="color:rgb(0, 0, 0); font-weight:bold"
                                        href="{{ route('index') }}">Home</a></li>
                                <li><a style="color:rgb(0, 0, 0); font-weight:bold"
                                        href="{{ route('about') }}">About</a></li>

                                <li class="last"><a style="color:rgb(0, 0, 0); font-weight:bold"
                                        href="{{ route('contact') }}">Contacts</a></li>
                                <li>
                                    @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                    <li> <a style="color:rgb(0, 0, 0); font-weight:bold" href="{{ route('redirects') }}"
                                            class="text-sm text-gray-700 underline">{{ Auth::user()->name }}</a></li>
                                    <li>
                                        <a style="color:rgb(0, 0, 0); font-weight:bold"
                                            href="{{ route('logout') }}">Logout</a>

                                    </li>
                                @else
                                    <li><a style="color:rgb(0, 0, 0); font-weight:bold" href="{{ route('login') }}">Log
                                            in</a></li>

                                    @if (Route::has('register'))
                                        <li><a style="color:rgb(0, 0, 0); font-weight:bold"
                                                href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                        </div>
                        @endif
                        </li>



                        </ul>
                </div><!-- /.navbar-collapse -->
                </nav>
            </div> <!-- end pull-right -->
            <div class="clearfix"> </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
    <!-- ============================  Navigation End ============================ -->
    @yield('content')
    {{-- <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25573.724167064905!2d93.81412267801736!3d22.699385183949182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277caa9220cb%3A0xf274740d35824861!2sPanchlaish%2C%20Chattogram%2C%20Bangladesh!5e1!3m2!1sen!2sus!4v1623148553670!5m2!1sen!2sus" width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div> --}}
    <div class="footer" style="background-color: #f1f1c6;">
        <div class="container">
            <div class="col-md-4 col_2">
                <h4>About Us</h4>
                <p>" wedsupport.com, is an international matrimonial web portal aim to help those people are trying to
                    find their perfect match. It is designed to help the members to brows their partner with in a
                    secured environment sourcing only verified, trusted and genuine people trying to find their soul
                    mates."</p>
            </div>
            <div class="col-md-2 col_2">
                <h4>Help & Support</h4>
                <ul class="footer_links">
                    <li><a href="#">24x7 Live help</a></li>
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                </ul>
            </div>
            <div class="col-md-2 col_2">
                <h4>Quick Links</h4>
                <ul class="footer_links">
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                </ul>
            </div>
            <div class="col-md-2 col_2">
                <h4>Social</h4>
                <ul class="footer_social">
                    <li><a href="https://www.facebook.com/Wedsupport"><i class="fa fa-facebook fa1"> </i></a></li>
                    <li><a href="https://twitter.com/wedsupport1"><i class="fa fa-twitter fa1"> </i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCRwvQfo9NsiKqh2T-VIrA0w"><i class="fa fa-youtube fa1">
                            </i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="copy">
                <p>Copyright © 2021 . All Rights Reserved | Design by <a href="https://nxgit.com/"
                        target="_blank">Nxgitsoft</a> </p>
            </div>

            <a href="#" class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        </div>
    </div>




    <!--<script type="text/javascript" src="{{ asset('assets/js/image-zoom.js') }}"></script>-->

</body>

</html>

<style>
    /*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
    .back-to-top {
        position: fixed;
        display: none;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        right: 15px;
        bottom: 15px;
        background: #ec5896;
        color: #fff;
        transition: display 0.5s ease-in-out;
        z-index: 99999;
    }

    .back-to-top i {
        font-size: 24px;
        position: absolute;
        top: 7px;
        left: 8px;
        color: white;
    }

    .back-to-top:hover {
        color: #fff;
        background: #e4399d;
        transition: background 0.2s ease-in-out;
    }

    .sticky {
        /* position: fixed;
   top: 0; */
        /* width: 100%;  */
        z-index: 999;


        position: -webkit-sticky;
        position: sticky;
        top: 0;

    }

</style>

{{-- ----------for back to top---------- --}}
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function() {
        $('html, body').animate({
                scrollTop: 0
            },
            1500,
            'easeInOutExpo'
        );
        return false;
    });
</script>


{{-- ----------for back to top---------- --}}

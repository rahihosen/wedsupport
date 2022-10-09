<!DOCTYPE HTML>
<html>

<head>
    <title>WedSupport</title>
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
    <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <!----font-Awesome----->
    <script type="text/javascript" src="{{ asset('assets/js/countries.js') }}"></script>
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



            $('.like').click(function() {
                var id_stuff = $(this).val();

                //var	tokken = $('input[name="_token"]').val();
                //alert(id_stuff);
                $.ajax({
                    type: 'POST',
                    url: '/addlike',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id_stuff: id_stuff
                    },
                    success: function(data) {
                        // alert("like added successfully");
                    },
                });



            });









            $('.fvrt').click(function() {
                var id_stuff = $(this).val();

                //var	tokken = $('input[name="_token"]').val();
                //alert(id_stuff);
                $.ajax({
                    type: 'POST',
                    url: '/addfvrt',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id_stuff: id_stuff
                    },
                    success: function(data) {
                        // alert("favourite added successfully");
                    },
                });
            });

        });
    </script>
</head>

<body>

    <!-----============================== ad top Banner start    ======================================-->

    <!--<div class="ad-banner-top">-->
    <!--	<div class="container">-->
    <!--		<div class="col-md-1">hello</div>-->
    <!--		<div class="col-md-10"><img src="https://seocustomer.com/wp-content/uploads/2020/05/google-ads-logo.png" style="width: 914px; height: 126px; background: white; " alt=""></div>-->
    <!--		<div class="col-md-1">hello</div>-->
    <!--	</div>-->


    <!--     </div>-->

    <!-----============================== ad top Banner End    ======================================-->




    <!-- ============================  Navigation Start =========================== -->
    <div class="navbar navbar-inverse-blue navbar sticky">
        <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
        <div class="navbar-inner">
            <div class="container">
                {{-- <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
					<a href="#" class="icon-home"></a>
					<ul>
						<li><a href="{{route("login")}}">Login</a></li>
					    <li><a href="{{route("register")}}">Register</a></li>
					    <li><a href="{{route("index")}}">Logout</a></li>
					</ul>
				</li>
			   </ul>
             </nav>
           </div> --}}
                <div class="col-md-1">
                    <a style="" class="brand" href="{{ route('index') }}"><img
                            src="{{ asset('assets/images/logo.png') }}" alt="logo" style="height: 40px; width: 60px;">
                    </a>
                </div>


                <div class="col-md-7">
                    <div class="pull-right">
                        <nav class="navbar nav_bottom" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1"
                                    data-toggle="collapse" data-target="#bs-megadropdown-tabs"><i class="fa fa-bars"
                                        aria-hidden="true"></i>
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
                                    <li><a style="color:rgb(255, 255, 255); font-weight:bold"
                                            href="{{ route('index') }}">Home</a></li>
                                    <li><a style="color:rgb(255, 255, 255); font-weight:bold"
                                            href="{{ route('about') }}">About</a></li>

                                    <li class="last"><a style="color:rgb(255, 255, 255); font-weight:bold"
                                            href="{{ route('contact') }}">Contacts</a></li>


                                    {{-- <form method="POST" action="http://127.0.0.1:8000/logout">
						  <input type="hidden" name="_token" value="yNyGIAmEsHb6FHW6kRD3eLWq37rDteijersATO6v">
						  <li><a  href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
										  this.closest('form').submit();">Log Out</a></li>
					  </form> --}}

                                    <li class="dropdown">
                                        <a style="color:rgb(252, 247, 247); font-weight:bold" href="#"
                                            class="dropdown-toggle "
                                            data-toggle="dropdown">{{ Auth::user()->name }}<span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a style="color:rgb(255, 255, 255); font-weight:bold"
                                                    href="{{ route('information') }}">Profile</a>

                                            </li>
                                            <!--<li>-->
                                            <!-- <a style="color:rgb(255, 254, 254); font-weight:bold" href="{{ route('addinfo') }}">Add Information</a>-->

                                            <!--</li>-->
                                            <li>
                                                <a style="color:rgb(255, 255, 255); font-weight:bold"
                                                    href="{{ route('updateinfo') }}">Update Information</a>

                                            </li>
                                            <li>
                                                <a style="color:rgb(255, 255, 255); font-weight:bold"
                                                    href="{{ route('setting') }}">Setting</a>
                                            </li>
                                            <li>
                                                <a style="color:rgb(253, 252, 252); font-weight:bold"
                                                    href="{{ route('photos') }}">Photos Gallery</a>

                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                    <li class="dropdown">
                                        <a style="color:rgb(252, 247, 247); font-weight:bold" href="#"
                                            class="dropdown-toggle " data-toggle="dropdown">Activity<span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a style="color:rgb(255, 255, 255); font-weight:bold"
                                                    href="{{ route('likepage') }}">likes</a>

                                            </li>
                                            <li>
                                                <a style="color:rgb(255, 254, 254); font-weight:bold"
                                                    href="{{ route('fvrtpage') }}">Favourites</a>

                                            </li>
                                            <!--<li >-->
                                            <!--	<a style="color:rgb(255, 255, 255); font-weight:bold" href="{{ route('profileviewpage') }}">Profile View</a>-->

                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--	<a style="color:rgb(255, 255, 255); font-weight:bold"   href="{{ route('setting') }}">Block list</a>-->
                                            <!--</li>-->

                                        </ul>
                                    </li>


                                    </li>

                                    <li><a style="color:rgb(253, 251, 251); font-weight:bold"
                                            href="{{ route('logout') }}">Logout</a></li>



                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div> <!-- end pull-right -->
                    <div class="clearfix"> </div>
                </div>


                <div class="col-md-4 sticky-right" style="padding-left: 0px; padding-right: 0px; display:none;">
                    {{-- <nav class="navbar navbar-inverse">
				<div class="container-fluid">

				  <ul class="nav navbar-nav11">
					<li><i class="fas fa-arrow-circle-up"></i></li>
					<li><strong>sent unlimited communication</strong>
					<p>upgrade your profile</p>
					</li>

				  </ul>

				</div>


			  </nav> --}}

                    <div style="float: left;" class="upgrade">

                        <div style="float: left"><i class="fas fa-arrow-circle-up"></i></div>


                        <div style="float: left" class="up-text">
                            <strong>sent unlimited communication</strong>
                            <p>upgrade your profile</p>
                        </div>


                    </div>
                    <div style="float: left;" class="globe"><i class="fas fa-globe"></i></div>
                    <div style="float: left;" class="tham"><i class="far fa-user-circle"></i> </div>
                    <div style="float: left;" class="tham"><i class="fas fa-cog"></i> </div>






                </div>
            </div> <!-- end container -->



        </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
    <!-- ============================  Navigation End ============================ -->
    <ul class="nav nav-tabs" style="background-color: #524b4b">
        <li class="active"><a data-toggle="tab" href="#home">I'm their Favourite</a></li>
        <li><a data-toggle="tab" href="#menu1">My Favourite</a></li>
        <!--<li><a data-toggle="tab" href="#menu2">Mutual Favourite</a></li>-->

    </ul>


    <div class="container">



        <div class="tab-content">


            <div id="home" class="tab-pane fade in active">


                @foreach ($imTheirFvrt as $data)

                    <?php

                    $image = DB::table('userprofiles')
                        ->where('user_id', $data->id_user)
                        ->value('imagePath');
                    $imgpath = 'https://wedsupport.com/userImage/' . $image;

                    ?>
                    <div class="col-md-4 " style="padding-top: 20px;">
                        <div class="card" style="max-width: 500px;">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <img style="height: 141px; width: 138px;padding: 10px;border-radius: 95px;margin-top: 20px;"
                                        src="<?= $imgpath ?>" class="card-img-top h-100" alt="..."
                                        onerror="this.src='{{ asset('assets/images/avatar.png') }}'">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= DB::table('users')
                                            ->where('id', $data->id_user)
                                            ->value('name') ?></h5>
                                        <div class="h5 truncate"><?= DB::table('userprofiles')
                                            ->where('user_id', $data->id_user)
                                            ->value('country') ?></div>
                                        <div class="h5 mt1 text-truncate-multi text-truncate-multi-2">
                                            Seeking: <?= DB::table('userprofiles')
                                                ->where('user_id', $data->id_user)
                                                ->value('from_age') ?> - <?= DB::table('userprofiles')
                                                ->where('user_id', $data->id_user)
                                                ->value('to_age') ?><br>

                                        </div>
                                        <div class="h5 my1 text-truncate-multi text-truncate-multi-2">


                                            <button type="button" value="" class="like"
                                                style="border: none !important;"><i
                                                    class="icon fas fa-thumbs-up fa-lg"></i></button>
                                            <span id="showlike"></span>

                                            <button type="button" value="" class="fvrt"
                                                style="border: none !important; padding: 0px;"><i
                                                    class="icon fas fa-heart fa-lg"></i>&emsp;</button>
                                            <span></span>
                                            <i class="icon fas fa-comment-alt fa-lg"></i>&emsp;


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                @endforeach





            </div>





            <div id="menu1" class="tab-pane fade">



                @foreach ($myFvrtProfileID as $data)

                    <?php

                    $image = DB::table('userprofiles')
                        ->where('user_id', $data->id_stuff)
                        ->value('imagePath');
                    $imgpath = 'https://wedsupport.com/userImage/' . $image;

                    ?>
                    <div class="col-md-4 " style="padding-top: 20px;">
                        <div class="card" style="max-width: 500px;">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <img style="height: 141px; width: 138px;padding: 10px;border-radius: 95px;margin-top: 20px;"
                                        src="<?= $imgpath ?>" class="card-img-top h-100" alt="..."
                                        onerror="this.src='{{ asset('assets/images/avatar.png') }}'">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= DB::table('users')
                                            ->where('id', $data->id_stuff)
                                            ->value('name') ?></h5>
                                        <div class="h5 truncate"><?= DB::table('userprofiles')
                                            ->where('user_id', $data->id_stuff)
                                            ->value('country') ?></div>
                                        <div class="h5 mt1 text-truncate-multi text-truncate-multi-2">
                                            Seeking: <?= DB::table('userprofiles')
                                                ->where('user_id', $data->id_stuff)
                                                ->value('from_age') ?> - <?= DB::table('userprofiles')
     ->where('user_id', $data->id_stuff)
     ->value('to_age') ?><br>

                                        </div>
                                        <div class="h5 my1 text-truncate-multi text-truncate-multi-2">


                                            <button type="button" value="" class="like"
                                                style="border: none !important;"><i
                                                    class="icon fas fa-thumbs-up fa-lg"></i></button>
                                            <span id="showlike"></span>

                                            <button type="button" value="" class="fvrt"
                                                style="border: none !important; padding: 0px;"><i
                                                    class="icon fas fa-heart fa-lg"></i>&emsp;</button>
                                            <span></span>
                                            <i class="icon fas fa-comment-alt fa-lg"></i>&emsp;


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                @endforeach







            </div>









            <!--      <div id="menu2" class="tab-pane fade">-->



            <!--		<div class="col-md-4 " style="padding-top: 20px;">-->
            <!--			<div class="card" style="max-width: 500px;">-->
            <!--    <div class="row no-gutters">-->
            <!--        <div class="col-sm-5">-->
            <!--            <img style="height: 141px; width: 138px;padding: 10px;border-radius: 95px;margin-top: 20px;" src="https://ix-www.imgix.net/hp/snowshoe.jpg?q=70&w=1800&auto=compress%2Cenhance&fm=jpeg" class="card-img-top h-100" alt="...">-->
            <!--        </div>-->
            <!--        <div class="col-sm-7">-->
            <!--            <div class="card-body">-->
            <!--                <h5 class="card-title">Alice Liddel</h5>-->
            <!--                <div class="h5 truncate">27 <span>•</span> Dhaka, Dhaka, Bangladesh</div>-->
            <!--                <div class="h5 mt1 text-truncate-multi text-truncate-multi-2">-->
            <!--                    Seeking: Male 28 - 33<br>-->
            <!--                    <span class="color-medium-grey">Last active: 14 mins ago</span>-->
            <!--                </div>-->
            <!--                <div class="h5 my1 text-truncate-multi text-truncate-multi-2">-->
            <!--                <span class="bold">Sent:</span> 4 mins ago</div>-->

            <!--                <button type="button" value="" class="like" style="border: none !important;"><i class="icon fas fa-thumbs-up fa-lg"></i></button>-->
            <!--					  <span id="showlike"></span>-->

            <!--					  <button type="button" value="" class="fvrt" style="border: none !important; padding: 0px;"><i class="icon fas fa-heart fa-lg" ></i>&emsp;</button>-->
            <!--					  <span></span>-->
            <!--					  <i class="icon fas fa-comment-alt fa-lg"></i>&emsp;-->


            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--</div>-->


            <!--<div class="col-md-4 " style="padding-top: 20px;">-->
            <!--    <div class="card" style="max-width: 500px;">-->
            <!--<div class="row no-gutters">-->
            <!--<div class="col-sm-5">-->
            <!--    <img style="height: 141px; width: 138px;padding: 10px;border-radius: 95px;margin-top: 20px;" src="https://ix-www.imgix.net/hp/snowshoe.jpg?q=70&w=1800&auto=compress%2Cenhance&fm=jpeg" class="card-img-top h-100" alt="...">-->
            <!--</div>-->
            <!--<div class="col-sm-7">-->
            <!--    <div class="card-body">-->
            <!--        <h5 class="card-title">Alice Liddel</h5>-->
            <!--        <div class="h5 truncate">27 <span>•</span> Dhaka, Dhaka, Bangladesh</div>-->
            <!--        <div class="h5 mt1 text-truncate-multi text-truncate-multi-2">-->
            <!--            Seeking: Male 28 - 33<br>-->
            <!--            <span class="color-medium-grey">Last active: 14 mins ago</span>-->
            <!--        </div>-->
            <!--        <div class="h5 my1 text-truncate-multi text-truncate-multi-2">-->
            <!--        <span class="bold">Sent:</span> 4 mins ago</div>-->

            <!--        <button type="button" value="" class="like" style="border: none !important;"><i class="icon fas fa-thumbs-up fa-lg"></i></button>-->
            <!--              <span id="showlike"></span>-->

            <!--              <button type="button" value="" class="fvrt" style="border: none !important; padding: 0px;"><i class="icon fas fa-heart fa-lg" ></i>&emsp;</button>-->
            <!--              <span></span>-->
            <!--              <i class="icon fas fa-comment-alt fa-lg"></i>&emsp;-->


            <!--    </div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->




            <!--<div class="col-md-4 " style="padding-top: 20px;">-->
            <!--    <div class="card" style="max-width: 500px;">-->
            <!--<div class="row no-gutters">-->
            <!--<div class="col-sm-5">-->
            <!--    <img style="height: 141px; width: 138px;padding: 10px;border-radius: 95px;margin-top: 20px;" src="https://www.slazzer.com/static/images/banner-orignal-image.jpg" class="card-img-top h-100" alt="...">-->
            <!--</div>-->
            <!--<div class="col-sm-7">-->
            <!--    <div class="card-body">-->
            <!--        <h5 class="card-title">Alice Liddel</h5>-->
            <!--        <div class="h5 truncate">27 <span>•</span> Dhaka, Dhaka, Bangladesh</div>-->
            <!--        <div class="h5 mt1 text-truncate-multi text-truncate-multi-2">-->
            <!--            Seeking: Male 28 - 33<br>-->
            <!--            <span class="color-medium-grey">Last active: 14 mins ago</span>-->
            <!--        </div>-->
            <!--        <div class="h5 my1 text-truncate-multi text-truncate-multi-2">-->
            <!--        <span class="bold">Sent:</span> 4 mins ago</div>-->

            <!--        <button type="button" value="" class="like" style="border: none !important;"><i class="icon fas fa-thumbs-up fa-lg"></i></button>-->
            <!--              <span id="showlike"></span>-->

            <!--              <button type="button" value="" class="fvrt" style="border: none !important; padding: 0px;"><i class="icon fas fa-heart fa-lg" ></i>&emsp;</button>-->
            <!--              <span></span>-->
            <!--              <i class="icon fas fa-comment-alt fa-lg"></i>&emsp;-->


            <!--    </div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

            <!--<div class="col-md-4 " style="padding-top: 20px;">-->
            <!--    <div class="card" style="max-width: 500px;">-->
            <!--<div class="row no-gutters">-->
            <!--<div class="col-sm-5">-->
            <!--    <img style="height: 141px; width: 138px;padding: 10px;border-radius: 95px;margin-top: 20px;" src="https://www.slazzer.com/static/images/banner-orignal-image.jpg" class="card-img-top h-100" alt="...">-->
            <!--</div>-->
            <!--<div class="col-sm-7">-->
            <!--    <div class="card-body">-->
            <!--        <h5 class="card-title">Alice Liddel</h5>-->
            <!--        <div class="h5 truncate">27 <span>•</span> Dhaka, Dhaka, Bangladesh</div>-->
            <!--        <div class="h5 mt1 text-truncate-multi text-truncate-multi-2">-->
            <!--            Seeking: Male 28 - 33<br>-->
            <!--            <span class="color-medium-grey">Last active: 14 mins ago</span>-->
            <!--        </div>-->
            <!--        <div class="h5 my1 text-truncate-multi text-truncate-multi-2">-->
            <!--        <span class="bold">Sent:</span> 4 mins ago</div>-->

            <!--        <button type="button" value="" class="like" style="border: none !important;"><i class="icon fas fa-thumbs-up fa-lg"></i></button>-->
            <!--              <span id="showlike"></span>-->

            <!--              <button type="button" value="" class="fvrt" style="border: none !important; padding: 0px;"><i class="icon fas fa-heart fa-lg" ></i>&emsp;</button>-->
            <!--              <span></span>-->
            <!--              <i class="icon fas fa-comment-alt fa-lg"></i>&emsp;-->


            <!--    </div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->


            <!--<div class="col-md-4 " style="padding-top: 20px;">-->
            <!--    <div class="card" style="max-width: 500px;">-->
            <!--<div class="row no-gutters">-->
            <!--<div class="col-sm-5">-->
            <!--    <img style="height: 141px; width: 138px;padding: 10px;border-radius: 95px;margin-top: 20px;" src="https://www.slazzer.com/static/images/banner-orignal-image.jpg" class="card-img-top h-100" alt="...">-->
            <!--</div>-->
            <!--<div class="col-sm-7">-->
            <!--    <div class="card-body">-->
            <!--        <h5 class="card-title">Alice Liddel</h5>-->
            <!--        <div class="h5 truncate">27 <span>•</span> Dhaka, Dhaka, Bangladesh</div>-->
            <!--        <div class="h5 mt1 text-truncate-multi text-truncate-multi-2">-->
            <!--            Seeking: Male 28 - 33<br>-->
            <!--            <span class="color-medium-grey">Last active: 14 mins ago</span>-->
            <!--        </div>-->
            <!--        <div class="h5 my1 text-truncate-multi text-truncate-multi-2">-->
            <!--        <span class="bold">Sent:</span> 4 mins ago</div>-->

            <!--        <button type="button" value="" class="like" style="border: none !important;"><i class="icon fas fa-thumbs-up fa-lg"></i></button>-->
            <!--              <span id="showlike"></span>-->

            <!--              <button type="button" value="" class="fvrt" style="border: none !important; padding: 0px;"><i class="icon fas fa-heart fa-lg" ></i>&emsp;</button>-->
            <!--              <span></span>-->
            <!--              <i class="icon fas fa-comment-alt fa-lg"></i>&emsp;-->


            <!--    </div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->



            <!--<div class="col-md-4 " style="padding-top: 20px;">-->
            <!--    <div class="card" style="max-width: 500px;">-->
            <!--<div class="row no-gutters">-->
            <!--<div class="col-sm-5">-->
            <!--    <img style="height: 141px; width: 138px;padding: 10px;border-radius: 95px;margin-top: 20px;" src="https://ix-www.imgix.net/hp/snowshoe.jpg?q=70&w=1800&auto=compress%2Cenhance&fm=jpeg" class="card-img-top h-100" alt="...">-->
            <!--</div>-->
            <!--<div class="col-sm-7">-->
            <!--    <div class="card-body">-->
            <!--        <h5 class="card-title">Alice Liddel</h5>-->
            <!--        <div class="h5 truncate">27 <span>•</span> Dhaka, Dhaka, Bangladesh</div>-->
            <!--        <div class="h5 mt1 text-truncate-multi text-truncate-multi-2">-->
            <!--            Seeking: Male 28 - 33<br>-->
            <!--            <span class="color-medium-grey">Last active: 14 mins ago</span>-->
            <!--        </div>-->
            <!--        <div class="h5 my1 text-truncate-multi text-truncate-multi-2">-->
            <!--        <span class="bold">Sent:</span> 4 mins ago</div>-->

            <!--        <button type="button" value="" class="like" style="border: none !important;"><i class="icon fas fa-thumbs-up fa-lg"></i></button>-->
            <!--              <span id="showlike"></span>-->

            <!--              <button type="button" value="" class="fvrt" style="border: none !important; padding: 0px;"><i class="icon fas fa-heart fa-lg" ></i>&emsp;</button>-->
            <!--              <span></span>-->
            <!--              <i class="icon fas fa-comment-alt fa-lg"></i>&emsp;-->


            <!--    </div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->







            <!--      </div>-->

        </div>
    </div>












    <div class="container" style="padding: 0px 20px;">











    </div>


    <div class="row" style="margin-top: 70px">

    </div>

    <div class="container">
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>

    </div>
    <style>
        .membersn {
            font-size: 16px;
            color: rgb(65, 20, 138);
        }

        .status-circle {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: grey;
            border: 2px solid white;
            /* bottom: 0;
   right: 0; */

            position: absolute;
        }

        .card {
            width: 330px;
            display: inline-block;
            box-shadow: 2px 2px 10px rgb(126, 124, 124);
            border-radius: 5px;
            /* margin:100px; */
            height: 180px;
        }





        height: 141px;
        width: 138px;
        padding: 10px;
        border-radius: 95px;
        margin-top: 20px;

        .membersp {
            font-size: 14px;
            padding-bottom: 10px
        }

        .card-body {
            padding: 50px 10px;



        }

        .icon:hover {
            color: rgb(121, 130, 212)
        }


        .icon {
            color: rgb(143, 138, 138);
        }

        /* --------hovar text--------- */
        .hide {
            display: none;
        }

        .myDIV:hover+.hide {
            display: block;
            color: black;

        }

        /* --------hovar text--------- */

        i.fa1 {
            background: #c32143;
            width: 26px;
            height: 26px;
            color: #fff;
            line-height: 26px;
            border-radius: 20px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            -o-border-radius: 20px;
        }


        .border {
            border-bottom: 1px solid black;
        }

    </style>

    <!--<div class="map">-->
    <!--	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25573.724167064905!2d93.81412267801736!3d22.699385183949182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277caa9220cb%3A0xf274740d35824861!2sPanchlaish%2C%20Chattogram%2C%20Bangladesh!5e1!3m2!1sen!2sus!4v1623148553670!5m2!1sen!2sus" width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
    <!--	</div>-->
    <div class="footer">
        <div class="container">
            <div class="col-md-4 col_2">
                <h4>About Us</h4>
                <p style="color: #555555">" wedsupport.com, is an international matrimonial web portal aim to help those
                    people are trying to find their perfect match. It is designed to help the members to brows their
                    partner with in a secured environment sourcing only verified, trusted and genuine people trying to
                    find their soul mates."</p>
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
                    {{-- <li><a href="#"><i class="fas fa-facebook fa1"> </i></a></li> --}}

                    <li><a href="#"><i class="fab fa-facebook-f fa1"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter fa1"> </i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus fa1"> </i></a></li>
                    <li><a href="#"><i class="fab fa-youtube fa1"> </i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="copy">
                <p>Copyright © 2021 . All Rights Reserved | Design by <a href="https://nxgit.com/"
                        target="_blank">Nxgitsoft</a> </p>
            </div>
        </div>
    </div>
    <script language="javascript">
        print_country("country");
    </script>
</body>

</html>

</html>

<style>
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

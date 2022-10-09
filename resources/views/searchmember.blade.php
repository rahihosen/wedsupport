<!DOCTYPE HTML>
<html>

<head>
    <title>WedSupport</title>
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <style>
        .content {

            display: none;
        }

        #loadMore {
            width: 200px;
            color: #fff;
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid transparent;
            background-color: rgb(172, 170, 170);
            transition: .3s;
        }

        #loadMore:hover {
            color: rgb(7, 7, 7);
            background-color: #fff;
            border: 1px solid rgb(180, 178, 178);
            text-decoration: none;
        }

        .noContent {
            font-weight: 700;
            color: #000 !important;
            background-color: transparent !important;
            pointer-events: none;
        }

    </style>
    <script type="text/javascript" src="{{ asset('assets/js/countries.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
     <script>
        $(document).ready(function() {
            $('.like').click(function() {
                var id_stuff = $(this).val();

                //var	tokken = $('input[name="_token"]').val();
                //alert(id_stuff)
                $.ajax({
                    type: 'GET',
                    url: '/addlike',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id_stuff: id_stuff
                    },
                    success: function(data) {
                        //alert("like added successfully");

                        var likeicon = "likeicon_" + id_stuff;
                        var likei = document.getElementById(likeicon);
                        likei.classList.add('likeiconclass');


                        likecount(id_stuff);
                    },
                });
            });




            function likecount(id) {
                var id_stuff = id;
                var test = "resti_" + id_stuff;
                $.ajax({
                    type: 'GET',
                    url: '/showlike/' + id_stuff,
                    dataType: 'json',
                    success: function(data) {
                        var spanclass = document.getElementById(test);
                        spanclass.innerHTML = "";
                        spanclass.innerHTML = data;
                    },
                });
            }











            $('.fvrt').click(function() {
                var id_stuff = $(this).val();

                //var	tokken = $('input[name="_token"]').val();
                //alert(id_stuff);
                $.ajax({
                    type: 'GET',
                    url: '/addfvrt',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id_stuff: id_stuff
                    },
                    success: function(data) {
                        // alert("favourite added successfully");
                        var fvrticon = "fvrticon_" + id_stuff;
                        var fvrti = document.getElementById(fvrticon);
                        fvrti.classList.add('fvrticonclass');

                        fvrtcount(id_stuff);
                    },
                });
            });

            function fvrtcount(id) {
                var id_stuff = id;
                var test = "result_" + id_stuff;

                $.ajax({
                    type: 'GET',
                    url: '/showfvrt/' + id_stuff,
                    dataType: 'json',
                    success: function(data) {
                        var spanclass = document.getElementById(test);
                        spanclass.innerHTML = "";
                        spanclass.innerHTML = data;
                        //alert("Data: " + spanclass + "\nStatus: " + status);

                        //$('.result').html(data);
                    },
                });
            }
        });
    </script>
</head>

<body>
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
                <a class="brand" href="{{ route('index') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" style="height: 42px;width: 59px;" alt="logo">
                </a>
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


                                {{-- <form method="POST" action="http://127.0.0.1:8000/logout">
						<input type="hidden" name="_token" value="yNyGIAmEsHb6FHW6kRD3eLWq37rDteijersATO6v">
						<li><a  href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
										this.closest('form').submit();">Log Out</a></li>
					</form> --}}

                                <li class="dropdown">
                                    <a style="color:rgb(0, 0, 0); font-weight:bold" href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">{{ Auth::user()->name }}<span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a style="color:rgb(0, 0, 0); font-weight:bold"
                                                href="{{ route('information') }}">Profile</a>

                                        </li>
                                        <li>
                                            <a style="color:rgb(0, 0, 0); font-weight:bold"
                                                href="{{ route('addinfo') }}">Add Information</a>

                                        </li>
                                        <li>
                                            <a style="color:rgb(0, 0, 0); font-weight:bold"
                                                href="{{ route('updateinfo') }}">Update Information</a>

                                        </li>
                                        <li>
                                            <a style="color:rgb(0, 0, 0); font-weight:bold"
                                                href="{{ route('setting') }}">Setting</a>

                                        </li>
                                        <li>
                                            <a style="color:rgb(0, 0, 0); font-weight:bold"
                                                href="{{ route('photos') }}">Photos Gallery</a>

                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a style="color:rgb(0, 0, 0); font-weight:bold"
                                        href="{{ route('logout') }}">Logout</a>

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


    <div class="navbar navbar-inverse-blue navbar " style="background-color: rgb(141, 141, 189) ">
        <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
        <div class="navbar-inner" style="background-color: rgb(141, 141, 189)">
            <div class="container" style="background-color: rgb(141, 141, 189)">
                <div class="col-md-4">
                    <img src="{{ asset('userImage/' . Auth::user()->userprofile->imagePath) }}"
                        onerror="this.src='{{ asset('assets/images/avatar.PNG') }}'" alt=""
                        style="border-radius: 50%;height:100px;width:100px;">
                    {{-- <img src=  "{{asset('assets/images/p3.jpg')}}"  alt="" style="border-radius: 50%;height:100px;width:100px;" > --}}
                    <label style="font-size: 20px">&ensp;<a href="{{ route('information') }}"
                            style="color: rgb(197, 31, 95)">{{ Auth::user()->name }}</a></label>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: right;padding-top:50px;">

                    {{-- ------hide option----- --}}

                    {{-- <div class="row">
				<div class="col-md-8"></div>

				<div class="col-md-2 dropdown" style="text-align: right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fas fa-user-circle fa-3x" style="color: white"></i>&ensp;<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="{{ route("view_profile") }}">View Profile</a></li>
					  <li><a href="{{ route("edit_profile") }}">Edit Profile</a></li>
					  <li><a href="{{ route("switch_off") }}">Switch Off Profile</a></li>
					</ul>
				  </div>
				  <div class="col-md-2 dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fas fa-cog fa-3x" style="color: white" ></i><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="{{ route("email") }}">Email Address</a></li>
					  <li><a href="{{ route("password") }}">Password</a></li>
					  <li><a href="{{ route("profile_setting") }}">Profile Setting</a></li>

					  <li><a href="#">Help</a></li>
					  <li><a href="{{ route("upgrade") }}">Upgrade Membership</a></li>
					  <li><a href="{{ route("index") }}">Logout</a></li>
					</ul>
				  </div>
			</div> --}}

                    {{-- ------hide option----- --}}



                </div>

            </div><!-- /.navbar-collapse -->
            </nav>
        </div> <!-- end pull-right -->
        <div class="clearfix"> </div>
    </div> <!-- end container -->

    </div> <!-- end navbar-inner -->

    </div>

    {{-- <div class="container" style="margin: 0%;padding:0%;margin-right:0%;padding-right:0%;">
	<div class="profile" style="background-color: rgb(141, 141, 189);width:100%">
		<i class="icon fas fa-user-circle fa-5x"></i>
	</div>
</div> --}}
    <div class="profile" style="background-color: rgb(166, 166, 231);padding:10px 0px;">
        <div class="container wrap_1">
            <form action="{{ route('search.people') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="search_top">
                    <div class="inline-block">
                        <label class="gender_1">Seeking:</label>
                        <div class="age_box1" style="max-width: 100%; display: inline-block;">
                            <select name="gender">
                                <option value="">* Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="inline-block">
                        <label class="gender_1">Country :</label>
                        <div class="age_box1" style="max-width: 100%; display: inline-block;">
                            {{-- <select><option value="">Any Country</option>
                    <option value="Country1">Country1</option>
                    <option value="Country2">Country2</option>
                    <option value="Country3">Country3</option>
                    <option value="Country4">Country4</option>
                    <option value="Country5">Country5</option>
                </select> --}}
                            <select onchange="print_state('state',this.selectedIndex);" id="country"
                                name="country"></select>
                        </div>
                    </div>

                    <div class="inline-block">
                        <label class="gender_1">State/province :</label>
                        <div class="age_box1" style="max-width: 100%; display: inline-block;">
                            {{-- <select>
                        <option value="">Any State</option>
                        <option value="Washington">Washington</option>
                        <option value="Texas">Texas</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Colorado">Colorado</option>
                </select> --}}
                            <select name="state" id="state"></select>
                        </div>
                    </div>
                </div>

                {{-- <div class="inline-block">
            <label class="gender_1">City :</label>
                <div class="age_box1" style="max-width: 100%; display: inline-block;">
                    <select>
                        <option value="">Any City</option>
                        <option value="City1">City1</option>
                        <option value="City2">City2</option>
                        <option value="City3">City3</option>
                        <option value="City4">City4</option>
                    </select>
            </div>
            </div> --}}

                <div class="inline-block">
                    <div class="age_box2" style="max-width: 220px;">
                        <label class="gender_1">Age :</label>
                        <input class="transparent" placeholder="From:" name="min_age" style="width: 34%;" type="text"
                            value="">&nbsp;-&nbsp;<input class="transparent" placeholder="To:" name="max_age"
                            style="width: 34%;" type="text" value="">
                    </div>
                </div>

                <div class="submit inline-block">
                    <input id="submit-btn" class="hvr-wobble-vertical" type="submit" value="Find Matches">
                </div>
            </form>
        </div>
    </div>


    <body>



        @if ($users->count() > 0)
            <div class="container" style="padding: 0px 20px;">

                @foreach ($users as $data)
                    @if ($data->usertype != '0' && $data->id != Auth::user()->id)
                    
                    
                       <div class="col-md-2" style="padding-top: 20px;">
                        <div class="card">
                            <a href="{{ route('showprofile', $data->id) }}" class="membersn"><img
                                    class="card-img-top"
                                    src="{{ asset('userImage/' . $data->userprofile->imagePath) }}"
                                    onerror="this.src='{{ asset('assets/images/avatar.png') }}'" alt="Card image"
                                    @if ($data->userprofile->blur == 0)
                                style="width:100%; object-fit: cover;"
                            @else
                                style="width:100%; object-fit: cover; filter: blur(5px);"
                @endif
                height="180px" width="170px"></a>
                <div class="card-body" height="190px" width="170px">




                    @if ($data->active_status == '1')
                        &emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i style="color:#4caf50;"
                            class="icon fas fa-circle fa-xs"></i><br>
                    @else
                        &emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i
                            class="icon fas fa-circle fa-xs"></i><br>
                    @endif
                    <a href="{{ route('showprofile', $data->id) }}" class="membersn">{{ $data->name }}</a>
                    <i class="icon fas fa-user"></i>
                    <p class="membersp">{{ $data->userprofile->age }} <span>&#8226;</span>
                        {{ $data->userprofile->city }}
                        @if ($data->userprofile->city != null && $data->userprofile->state != null)
                            {{ ',' }}
                        @endif
                        {{ $data->userprofile->state }}
                        @if ($data->userprofile->country != null)
                            {{ ',' }}
                        @endif
                        {{ $data->userprofile->country }}<br>



                        <?= $like = DB::table('likes')
                            ->where('id_stuff', $data->id)
                            ->where('type_action', 2)
                            ->count('id_stuff') ?> - {{ $data->userprofile->to_age }}
                    </p>

                    <?php

                    $userid = Auth::user()->id;

                    $likecheck = DB::table('likes')
                        ->where('id_stuff', $data->id)
                        ->where('id_user', $userid)
                        ->where('type_action', 1)
                        ->value('id');
                    //  echo $likecheck;

                    $fvrtcheck = DB::table('likes')
                        ->where('id_stuff', $data->id)
                        ->where('id_user', $userid)
                        ->where('type_action', 2)
                        ->value('id');
                    ?>

                    @if ($likecheck == null)
                        <button type="button" name="id_stuff" value="{{ $data->userprofile->user_id }}"
                            class="like" style="border: none !important;">
                            <i id="likeicon_{{ $data->id }}" class="icon fas fa-thumbs-up fa-lg"></i></button>
                    @else

                        <button type="button" name="id_stuff" value="{{ $data->userprofile->user_id }}"
                            class="like" style="border: none !important;">
                            <i id="likeicon_{{ $data->id }}" style="color:#454eb5;"
                                class="icon fas fa-thumbs-up fa-lg"></i></button>

                    @endif


                    <span class="result" id="resti_{{ $data->id }}"><?= $like = DB::table('likes')
                        ->where('id_stuff', $data->id)
                        ->where('type_action', 1)
                        ->count('id_stuff') ?></span>


                    @if ($fvrtcheck == null)
                        <button type="button" value="{{ $data->userprofile->user_id }}" class="fvrt"
                            style="border: none !important; padding: 0px;">
                            <i id="fvrticon_{{ $data->id }}" class="icon fas fa-heart fa-lg"></i>&emsp;</button>
                    @else

                        <button type="button" value="{{ $data->userprofile->user_id }}" class="fvrt"
                            style="border: none !important; padding: 0px;">
                            <i id="fvrticon_{{ $data->id }}" class="icon fas fa-heart fa-lg"
                                style="color:red"></i>&emsp;</button>
                    @endif



                    <span id="result_{{ $data->id }}"><?= $like = DB::table('likes')
                        ->where('id_stuff', $data->id)
                        ->where('type_action', 2)
                        ->count('id_stuff') ?></span>
                    <a href="/{{ config('chatify.routes.prefix') }}" target="_blank"><i
                            class="icon fas fa-comment-alt fa-lg"></i></a>&emsp;

                </div>

        </div>

        </div>
                        
                        
                        
                    @endif
                @endforeach

            </div>
        @else
            <div class="container">
                <h3 style="text-align: center; padding:50px 0 0 0; color:#A09D9D"> <b> NO user found! </b></h3>
            </div>
        @endif


        {{-- <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                @if ($data->usertype == '0')
                <td>Admin</td>
                @elseif ($data->usertype=="1")
                <td>Member</td>
                @else

                <td>Visitor</td>

                @endif

                <td>{{ $data->isBan }}</td>

                @if ($data->usertype == '0')
                <td>Not allowed</td>
                @else
                <td><a href="{{ route('deleteuser',$data->id) }}">Delete</a></td>
                @endif


            </tr>
               @endforeach --}}

        {{-- <div class="container" style="padding: 0px 20px;">


		<div class="col-md-2 " style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/2.jpg')}}" alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2 " style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/p5.jpg')}}" alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2 " style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/p3.jpg')}}" alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2" style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/p5.jpg')}}" alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2" style="padding-top: 20px;">
	    	<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/2.jpg')}}" alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2" style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/p5.jpg')}}"  alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>

				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>


		<div class="col-md-2 " style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src="{{asset('assets/images/p3.jpg')}}"  alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2 " style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src="{{asset('assets/images/p5.jpg')}}"   alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2 " style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/2.jpg')}}" alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2" style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/p5.jpg')}}"  alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2" style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/p3.jpg')}}" alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div>
		<div class="col-md-2" style="padding-top: 20px;">
		<div class="card" >
			<img class="card-img-top" src= "{{asset('assets/images/p5.jpg')}}" alt="Card image" style="width:100%">


			  <div class="card-body" >
				&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="icon fas fa-circle fa-xs"></i><br>
				  <a href="" class="membersn" >Isnaena </a> <i class="icon fas fa-user"></i>
				  <p class="membersp">33 <span>&#8226;</span> Tangerang, Banten, Indonesia<br><br>Seeking: Male 26 - 47<br>53 mins ago</p>
				  <i class="icon fas fa-heart fa-lg" ></i>&emsp;
				  <i class="icon fas fa-comment-alt fa-lg "></i>&emsp;
				  <i class="icon fas fa-camera fa-lg"></i>&emsp;1
			 </div>

		  </div>

		</div> --}}
        <div class="row" style="margin-top: 70px">

        </div>
        <a href="#" id="loadMore">Load More</a>
        {{-- <div class="container">
		<ul class="pager">
			<li><a href="#">Previous</a></li>
			<li><a href="#">Next</a></li>
		  </ul>
	</div> --}}

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
                width: 170px;
                display: inline-block;
                box-shadow: 2px 2px 10px rgb(126, 124, 124);
                border-radius: 5px;
                /* margin:100px; */


            }

            .membersp {
                font-size: 14px;
                padding-bottom: 10px
            }

            .card-body {
                padding: 5px 10px;



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

        </style>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25573.724167064905!2d93.81412267801736!3d22.699385183949182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277caa9220cb%3A0xf274740d35824861!2sPanchlaish%2C%20Chattogram%2C%20Bangladesh!5e1!3m2!1sen!2sus!4v1623148553670!5m2!1sen!2sus"
                width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="footer">
            <div class="container">
                <div class="col-md-4 col_2">
                    <h4>About Us</h4>
                    <p style="color: #555555">" wedsupport.com, is an international matrimonial web portal aim to help
                        those people are trying to find their perfect match. It is designed to help the members to brows
                        their partner with in a secured environment sourcing only verified, trusted and genuine people
                        trying to find their soul mates."</p>
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
        <script>
            $(document).ready(function() {
                $(".content").slice(0, 1).show();
                $("#loadMore").on("click", function(e) {
                    e.preventDefault();
                    $(".content:hidden").slice(0, 8).slideDown();
                    if ($(".content:hidden").length == 0) {
                        $("#loadMore").text("").addClass("noContent");
                    }
                });

            });
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

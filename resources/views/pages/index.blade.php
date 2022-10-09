@extends('layouts.main')

@section('content')

    <!-- Carousel container -->
    <!--<div id="my-pics" class="carousel slide" data-ride="carousel" >-->

    <!-- Indicators -->
    <!--	<ol class="carousel-indicators">-->
    <!--	<li data-target="#my-pics" data-slide-to="0" class="active"></li>-->
    <!--	<li data-target="#my-pics" data-slide-to="1"></li>-->
    <!--	<li data-target="#my-pics" data-slide-to="2"></li>-->
    <!--	<li data-target="#my-pics" data-slide-to="3"></li>-->
    <!--	<li data-target="#my-pics" data-slide-to="4"></li>-->
    <!--	{{-- <li data-target="#my-pics" data-slide-to="3"></li>-->
<!--	<li data-target="#my-pics" data-slide-to="4"></li> --}}-->

    <!--	</ol>-->

    <!-- Content -->
    <!--	<div class="carousel-inner" role="listbox">-->

    <!-- Slide 1 -->
    <!--	<div class="item active">-->
    <!--	<img src="{{ asset('assets/images/slide1.jpg') }}" alt="" width="100%">-->
    <!--	</div>-->

    <!-- Slide 2 -->
    <!--	<div class="item">-->
    <!--	<img src="{{ asset('assets/images/slide2.jpg') }}" alt="" width="100%">-->
    <!--	</div>-->

    <!-- Slide 3 -->
    <!--	<div class="item">-->
    <!--	<img src="{{ asset('assets/images/slide3.jpg') }}" alt="" width="100%">-->
    <!--	</div>-->
    <!--	<div class="item">-->
    <!--		<img src="{{ asset('assets/images/slide4.jpg') }}" alt="" width="100%">-->
    <!--	</div>-->
    <!--	<div class="item">-->
    <!--			<img src="{{ asset('assets/images/slide5.jpg') }}" alt="" width="100%">-->
    <!--	</div>-->

    <!--  </div>-->



    <!-- Previous/Next controls -->
    <!--  <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">-->
    <!--	<span class="icon-prev" aria-hidden="true"></span>-->
    <!--	<span class="sr-only">Previous</span>-->
    <!--	</a>-->
    <!--	<a class="right carousel-control" href="#my-pics" role="button" data-slide="next">-->
    <!--	<span class="icon-next" aria-hidden="true"></span>-->
    <!--	<span class="sr-only">Next</span>-->
    <!--	</a>-->

    <!--</div>-->


    <section class="hero-section">
        <video width="100%" height="auto" autoplay loop muted style="object-fit: initial;">
            <source src="assets/images/Wed1.mp4" type="video/mp4">
        </video>

        <!--<iframe width="100%" height="500" src="assets/images/Wed1.mp4"  frameborder="0"  allowfullscreen></iframe>-->
        <!--<div class="hero-items owl-carousel"> -->
        <!-- <div class="single-hero-items set-bg" data-setbg="https://www.arabianshelf.com/assets/frontend/img/Ajmal_Product.jpg">-->

        <!--</div> -->
        <!-- <div class="single-hero-items set-bg" data-setbg="">-->

        <!--</div> -->
        <!-- <div class="single-hero-items set-bg" data-setbg="https://www.arabianshelf.com/assets/frontend/img/hero-1.jpg">-->
        <!-- <div class="container">-->
        <!--  <div class="row">-->
        <!--   <div class="col-lg-5">-->
        <!--	   <span>Bag,kids</span>-->
        <!--	   <h1>Arabian Shelf</h1>-->
        <!--	   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor-->
        <!--		   incididunt ut labore et dolore</p>-->
        <!--	   <a href="#" class="primary-btn">Shop Now</a>-->
        <!--   </div>-->
        <!--  </div>-->
        <!--  <div class="off-card">-->
        <!--   <h2>Sale <span>50%</span></h2>-->
        <!--  </div>-->
        <!-- </div>-->
        <!--</div> -->
        <!--</div> -->
    </section>


    {{-- <div class="banner">

	<div class="container">
	  <div class="banner_info">
		<h3>Find Your Life Partner</h3>
		<a href="{{route("register")}}" class="hvr-shutter-out-horizontal">View Singles Now</a>

	  </div>

	</div>


  </div> --}}


    {{-- <div class="container" style="padding: 1em;  width:100%;  background-color:rgba(155, 152, 153, 0.29);">
	  <p style="text-align: center">	<a href="{{route('login')}}">Men |</a>
		  <a href="{{route('login')}}">Women |</a>
		  <a href="{{route("register")}}">Join Free</a></p>

  </div> --}}


    {{-- ---------------why choose -------------------- --}}
    <br><br><br><br>
    <div class="container">
        <div class="col-md-4 col_2">
            <h4>Why Choose WedSupport?</h4>
            <p> Our members are verified. Platform is easy to use, search and interact. We tried to gather all the necessary
                information for decision making and find the best possible match and the information that useful to choose
                each other. </p>


        </div>
        <div class="col-md-4 col_2">
            <h4>Matrimonial Website - Trusted By Many People</h4>
            <p> It’s a highly secured site and photos uploaded in our site cannot be downloaded. Our wedsupport team
                verifies each member’s profile so that only genuine people becomes member. Members can browse any time and
                unlimited with in a secured environment. We provide wide range of preference for choosing partners. </p>


        </div>
        <div class="col-md-4 col_2">
            <h4>Your Success is our success!</h4>
            <p> We bring singles from around the world and give them chances to choose each other based on their
                requirements. We help singles to find their soul mate and be blessed, coming single on our website and
                leaving with partner successfully because your success is our success!</p>


        </div>


    </div>

    {{-- ---------------why choose -------------------- --}}



    {{-- -------------Members found love------------- --}}

    <div class="grid_1">
        <div class="container-fluid" style="padding:5em 0;  background-color:rgba(155, 152, 153, 0.29);">

            <h1 style="text-align: center">Members Who Found Love</h1>
            <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="fa fa-heart pink-heart"></i>
                <i class="fa fa-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>
            <div class="container">
                <div class="col-md-3 col-xs-6 col_2_love">


                    <img src="{{ asset('assets/images/13.jpg') }}">

                    <h4 class="title" style="font-size: 1em">The site is trustworthy. I have found my partner on
                        wedsupport.com Thank you wedsupport! </h4>
                    <h5 class="name">Name</h5>

                </div>
                <div class="col-md-3 col-xs-6 col_2_love ">

                    <img src="{{ asset('assets/images/13.jpg') }}">

                    <h4 class="title" style="font-size: 1em">At the beginning I was not sure that I would find my
                        love one here in wedsupport but I found. You can find as well. </h4>
                    <h5 class="name"> Name</h5>

                </div>
                <div class="col-md-3 col-xs-6 col_2_love">
                    <img src="{{ asset('assets/images/13.jpg') }}">

                    <h4 class="title" style="font-size: 1em">I thought it was difficult to find life partner from a
                        website. But wedsupport.com made it easy for me!</h4>
                    <h5 class="name"> Name</h5>

                </div>
                <div class="col-md-3 col-xs-6 col_2_love">
                    <img src="{{ asset('assets/images/13.jpg') }}">

                    <h4 class="title" style="font-size: 1em">I become successful.Never believed that I can find my
                        partner from any website. But wedsupport.com did it for me!</h4>
                    <h5 class="name"> Name</h5>


                </div>


            </div>

            {{-- <div class="row" style="padding-top: 50px">
			  <div class="col-lg-3 col-md-6 col-sm-12 icon-box" data-aos="fade-up">

				  <img src="{{asset('assets/images/13.jpg')}}" style=" border-radius: 50%;width:150px;height:150px;"  >

				<h4 class="title">The site is trustworthy. I have found my partner on wedsupport.com Thank you wedsupport! </h4>
				<h5 class="name" >Name</h5>

			  </div>
			  <div class="col-lg-3 col-md-6 col-sm-12 icon-box" data-aos="fade-up">

				  <img src= "{{asset('assets/images/13.jpg')}}"  style=" border-radius: 50%;width:150px;height:150px;"  >

				<h4 class="title">I have found my love! You can try also. At the beginning I was not sure that I would find my love one here in wedsupport but I found. You can find as well. </h4>
				<h5 class="name"> Name</h5>

			  </div>
			  <div class="col-lg-3 col-md-6 col-sm-12 icon-box" data-aos="fade-up">

				  <img src="{{asset('assets/images/13.jpg')}}"   style=" border-radius: 50%;width:150px;height:150px;"  >

				<h4 class="title">I am happy. I thought it was difficult to find life partner from a website. But wedsupport.com made it easy for me. I am really happy now!</h4>
				<h5 class="name"> Name</h5>

			  </div>
			  <div class="col-lg-3 col-md-6 col-sm-12 icon-box" data-aos="fade-up">

				  <img src="{{asset('assets/images/13.jpg')}}" style=" border-radius: 50%;width:150px;height:150px;"  >

				<h4 class="title">I become successful. I was trying different way to find my life partner and never believed that I can find my partner from any website. But wedsupport.com did it for me!</h4>
				<h5 class="name"> Name</h5>

			  </div>
	  </div> --}}

            <div class="flexbox">

                <div class="flex-item"><a href="{{ route('testimonial') }}" class="hvr-shutter-out-horizontal"
                        style="padding:8px;width:150px">Read Testimonial</a>
                </div>
            </div>


        </div>

    </div>

    {{-- -------------Members found love------------- --}}
    
    
    {{-- ---------How it works------------ --}}

    <div class="col-12">
        <div class="grid_1" style="padding: 1em 0">
            <h1 style="text-align: center">How It works</h1>
            <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="fa fa-heart pink-heart"></i>
                <i class="fa fa-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>

            <h4 style="text-align: center;padding: 15px;">Start using wedsupport.com by following 3 easy and quick steps.
            </h4>

            <div class="container">

                <div class="col-md-4 col_2 how_it_work">
                    <img src="{{ asset('assets/images/hiw1.png') }}" alt="">
                    <h4>Create your profile</h4>
                    <p>Create your profile by using easy sign up process with in a second. Add photos to find your perfect
                        match.</p>


                </div>
                <div class="col-md-4 col_2 how_it_work">
                    <img src="{{ asset('assets/images/hiw2.png') }}" alt="">
                    <h4>Search your preferred match</h4>
                    <p>Find your life partner from our large database of verified members who may sitting any part of the
                        world and waiting for you.</p>


                </div>
                <div class="col-md-4 col_2 how_it_work">
                    <img src="{{ asset('assets/images/hiw3.png') }}" alt="">
                    <h4> Start communication:</h4>
                    <p>Start communicating with potential matches via message, email, phone etc. It’s your time to hit!</p>


                </div>


            </div>


        </div>
    </div>
 <br><br><br>
    {{-- ---------How it works------------ --}}
    
     <section class="user-tutorial grid_2">
          <h1 style="text-align: center; margin-bottom:20px;">User Guide</h1>
          <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="fa fa-heart pink-heart"></i>
                <i class="fa fa-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>
        <video width="100%" height="auto" autoplay loop muted style="object-fit: initial;">
            <source src="assets/images/edit_wed_support.mp4" type="video/mp4">
        </video>
    </section>
   
    <div class="grid_1" style="padding-top: 50px">
        <div class="container">
            <h1 style="text-align: center;">Featured Profiles</h1>
            <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="fa fa-heart pink-heart"></i>
                <i class="fa fa-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>
            <ul id="flexiselDemo3">
                @foreach($feather_profile as $key => $row)
                    <li>
                    <div class="col_1">
                        <a href="#">
                            <img src="{{ asset('userImage/'.$row->userProfile->imagePath) }}" alt=""
                                class="hover-animation image-zoom-in img-responsive" style="height: 150px !important" onerror="this.src='{{ asset('assets/images/avatar.png') }}'" />
                            <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                                <div class="center-middle">{{ $row->name }}</div>
                            </div>
                            <h3><span class="m_3">Profile ID : WS- 001{{ $row->id }}</span><br>{{$row->userProfile->state}},
                                {{$row->userProfile->country}}<br>{{$row->userProfile->profession}}</h3>
                        </a>
                    </div>
                </li>
                
                @endforeach
               
                <!--<li>-->
                <!--    <div class="col_1"><a href="#">-->
                <!--            <img src="{{ asset('assets/images/avatar.png') }}" alt=""-->
                <!--                class="hover-animation image-zoom-in img-responsive" />-->
                <!--            <div class="layer m_1 hidden-link hover-animation delay1 fade-in">-->
                <!--                <div class="center-middle">About Her</div>-->
                <!--            </div>-->
                <!--            <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian,-->
                <!--                Australia<br>Corporate</h3>-->
                <!--        </a></div>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <div class="col_1"><a href="#">-->
                <!--            <img src="{{ asset('assets/images/avatar.png') }}" alt=""-->
                <!--                class="hover-animation image-zoom-in img-responsive" />-->
                <!--            <div class="layer m_1 hidden-link hover-animation delay1 fade-in">-->
                <!--                <div class="center-middle">About Him</div>-->
                <!--            </div>-->
                <!--            <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian,-->
                <!--                Australia<br>Corporate</h3>-->
                <!--        </a></div>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <div class="col_1"><a href="#">-->
                <!--            <img src="{{ asset('assets/images/avatar.png') }}" alt=""-->
                <!--                class="hover-animation image-zoom-in img-responsive" />-->
                <!--            <div class="layer m_1 hidden-link hover-animation delay1 fade-in">-->
                <!--                <div class="center-middle">About Her</div>-->
                <!--            </div>-->
                <!--            <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian,-->
                <!--                Australia<br>Corporate</h3>-->
                <!--        </a></div>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <div class="col_1"><a href="#">-->
                <!--            <img src="{{ asset('assets/images/avatar.png') }}" alt=""-->
                <!--                class="hover-animation image-zoom-in img-responsive" />-->
                <!--            <div class="layer m_1 hidden-link hover-animation delay1 fade-in">-->
                <!--                <div class="center-middle">About Him</div>-->
                <!--            </div>-->
                <!--            <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian,-->
                <!--                Australia<br>Corporate</h3>-->
                <!--        </a></div>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <div class="col_1"><a href="#">-->
                <!--            <img src="{{ asset('assets/images/avatar.png') }}" alt=""-->
                <!--                class="hover-animation image-zoom-in img-responsive" />-->
                <!--            <div class="layer m_1 hidden-link hover-animation delay1 fade-in">-->
                <!--                <div class="center-middle">About Her</div>-->
                <!--            </div>-->
                <!--            <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian,-->
                <!--                Australia<br>Corporate</h3>-->
                <!--        </a></div>-->
                <!--</li>-->
            </ul>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo3").flexisel({
                        visibleItems: 6,
                        animationSpeed: 1000,
                        autoPlay: false,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{ asset('assets/js/jquery.flexisel.js') }}"></script>
        </div>
    </div>
    


    <div class="map" style="display: none;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25573.724167064905!2d93.81412267801736!3d22.699385183949182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277caa9220cb%3A0xf274740d35824861!2sPanchlaish%2C%20Chattogram%2C%20Bangladesh!5e1!3m2!1sen!2sus!4v1623148553670!5m2!1sen!2sus"
            width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


   

   <div class="bg">
		  <div class="container">
			  <h3>Client Reviews</h3>
			  <div class="heart-divider">
				  <span class="grey-line"></span>
				  <i class="fa fa-heart pink-heart"></i>
				  <i class="fa fa-heart grey-heart"></i>
				  <span class="grey-line"></span>
			  </div>
			  @foreach($review as $key => $row)
			  
			  <div class="col-sm-6">
				  <div class="bg_left">
					  <h5>From :  {{$row->user->name}}</h5>
					  <p>" {{ $row->review}} "</p>
					 <ul class="team-socials">
					  <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
					  <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
					  <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
					 </ul>
				  </div>
			  </div>
			  @endforeach
			  <!--<div class="col-sm-6">-->
				 <!-- <div class="bg_left">-->
					<!--  <h4>But I must explain</h4>-->
					<!--  <h5>Friend of Groom</h5>-->
					<!--  <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
					<!-- <ul class="team-socials">-->
					<!--  <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>-->
					<!--  <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>-->
					<!--  <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>-->
					<!-- </ul>-->
				 <!-- </div>-->
			  <!--</div>-->
			  <div class="clearfix"> </div>
		  </div>
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

@endsection

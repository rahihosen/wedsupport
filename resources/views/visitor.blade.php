
<!DOCTYPE HTML>
<html>
<head>
<title>WedSupport</title>
<link href="{{asset('assets/images/logo.png')}}"  rel="icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href= "{{asset('assets/css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('assets/js/jquery.min.js')}}" ></script>
<script src= "{{asset('assets/js/bootstrap.min.js')}}"  ></script>
<!-- Custom Theme files -->
<link href= "{{asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
<!----font-Awesome----->
<script>
$(document).ready(function(){
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
});
</script>
<style>
    .modal-backdrop {
   background-color: rgb(72, 74, 75) !important;
}
.modal .modal-dialog .modal-content{
    background-color: #ecf8fa !important;
     }
     .modeltext{
         color: #c32143;
         text-align: center;
         font-size: 15px;
         font-weight: 700;

     }
     .modelbtn{
        margin: 0 auto;
        display: block;
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
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar sticky" >
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

		   <a style="margin-left: -20px;" class="brand" href="{{ route("index") }}"><img src= "{{asset('assets/images/logo.png')}}"  alt="logo" style="height: 40px; width: 60px;">
			</a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2" >
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1"  data-toggle="collapse" data-target="#bs-megadropdown-tabs"><i class="fa fa-bars" aria-hidden="true"></i>
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
		            <li><a style="color:rgb(0, 0, 0); font-weight:bold"  href="{{ route("index") }}">Home</a></li>
		            <li><a style="color:rgb(0, 0, 0); font-weight:bold"  href="{{ route("about") }}">About</a></li>

		            <li class="last"><a style="color:rgb(0, 0, 0); font-weight:bold"  href="{{ route("contact") }}">Contacts</a></li>


					{{-- <form method="POST" action="http://127.0.0.1:8000/logout">
						<input type="hidden" name="_token" value="yNyGIAmEsHb6FHW6kRD3eLWq37rDteijersATO6v">
						<li><a  href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
										this.closest('form').submit();">Log Out</a></li>
					</form> --}}

					<li class="dropdown">
						<a style="color:rgb(0, 0, 0); font-weight:bold" href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a style="color:rgb(0, 0, 0); font-weight:bold"   href="{{ route('information') }}">Profile</a>

							</li>
						{{--	<li>
								<a style="color:rgb(0, 0, 0); font-weight:bold" href="{{ route('addinfo') }}">Add Information</a>

							</li>--}}
							<li>
								<a style="color:rgb(0, 0, 0); font-weight:bold" href="{{ route('updateinfo') }}">Update Information</a>

							</li>
							<li>
								<a style="color:rgb(0, 0, 0); font-weight:bold"   href="{{ route('setting') }}">Setting</a>

							</li>
              <li>
								<a style="color:rgb(0, 0, 0); font-weight:bold"   href="{{ route('photos') }}">Photos Gallery</a>

							</li>
						</ul>
					</li>
                    <li><a style="color:rgb(0, 0, 0); font-weight:bold" @if($sub != null) data-toggle="modal" data-target="#myModal1"  @else href="{{ route('upgrade') }}" @endif>Upgrade Account</a></li>
					<li>
						<a style="color:rgb(0, 0, 0); font-weight:bold"   href="{{ route('logout') }}">Logout</a>

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


<div class="navbar navbar-inverse-blue navbar" style="background-color: rgb(141, 141, 189)">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner" style="background-color: rgb(141, 141, 189)">
        <div class="container" style="background-color: rgb(141, 141, 189)">
			<div class="col-md-4">
				<img src="{{ asset('userImage/'.Auth::user()->userprofile->imagePath) }}"    onerror="this.src='{{asset('assets/images/avatar.png')}}'"  alt="" style="border-radius: 50%;height:110px;width:110px; padding: 5px;" >
        <label style="font-size: 20px">&ensp;<a href="{{ route('information') }}" style="color: rgb(197, 31, 95)">{{ Auth::user()->name }}</a></label>
			</div>
			{{-- <div class="col-md-4"></div>
			<div class="col-md-4" style="text-align: right;padding-top:50px;">
			<div class="row">
				<div class="col-md-8"></div>

				<div class="col-md-2 dropdown" style="text-align: right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fas fa-user-circle fa-3x" style="color: white"></i>&ensp;<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="{{ route("visitor_view_profile") }}">View Profile</a></li>

					  <li><a href="{{ route("switch_off") }}">Switch Off Profile</a></li>
					</ul>
				  </div>
				  <div class="col-md-2 dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fas fa-cog fa-3x" style="color: white" ></i><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="{{ route("email") }}">Email Address</a></li>
					  <li><a href="{{ route("password") }}">Password</a></li>

					  <li><a href="{{ route("upgrade") }}">Upgrade Membership</a></li>
					  <li><a href="{{ route("index") }}">Logout</a></li>
					</ul>
				  </div>
			</div>
			 --}}


			</div>

		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
		</div> <!-- end container -->

	</div> <!-- end navbar-inner -->

</div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


{{-- <div class="container" style="margin: 0%;padding:0%;margin-right:0%;padding-right:0%;">
	<div class="profile" style="background-color: rgb(141, 141, 189);width:100%">
		<i class="icon fas fa-user-circle fa-5x"></i>
	</div>
</div> --}}


<body>

<div class="container" style="padding: 0px 20px;">
  @foreach ($data as $data)
		@if ($data->usertype!="0")
		<div class="col-md-2 " style="padding-top: 20px;">
      <div class="card" @if($sub != null) data-toggle="modal" data-target="#myModal1"  @else data-toggle="modal" data-target="#myModal" @endif >
        <img class="card-img-top" src= "{{ asset('userImage/'.$data->userprofile->imagePath) }}" onerror="this.src='{{asset('assets/images/avatar.png')}}'" alt="Card image" style="width:100%" height="141px" width="170px">


          <div class="card-body" >
            <a class="membersn" ><?php  $name= $data->name; echo mb_strimwidth($name, 0, 5),"...";?></a>

         </div>

        </div>

      </div>
		@endif
        @endforeach
      <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4> --}}
                </div>
                <div class="modal-body">
                <p class="modeltext">Please Upgrade Your Account!</p>
                <hr>
                <a class="btn  btn-danger modelbtn" href="{{route('upgrade')}}">Upgrade</a>
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> --}}
            </div>

            </div>
        </div>
        {{-- model for waiting --}}
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4> --}}
                </div>
                <div class="modal-body">
                <p class="modeltext">Your request is in processing!</p>

                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> --}}
            </div>

            </div>
        </div>
            </div>
	<div class="row" style="margin-top: 70px">

	</div>

	<div class="container">
		<ul class="pager">
			<li><a href="#">Previous</a></li>
			<li><a href="#">Next</a></li>
		  </ul>
	</div>


<style>

.membersn{
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
.card{
    width:170px;
	display: inline-block;
     box-shadow: 2px 2px 10px rgb(126, 124, 124);
     border-radius: 5px;
     /* margin:100px; */


}
.membersp{
    font-size: 14px;
    padding-bottom: 10px
}
.card-body{
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

	.myDIV:hover + .hide {
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
</body>
{{--<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25573.724167064905!2d93.81412267801736!3d22.699385183949182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277caa9220cb%3A0xf274740d35824861!2sPanchlaish%2C%20Chattogram%2C%20Bangladesh!5e1!3m2!1sen!2sus!4v1623148553670!5m2!1sen!2sus" width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	 </div>--}}
 <div class="footer">
	 <div class="container">
    <div class="col-md-4 col_2">
      <h4>About Us</h4>
      <p style="color: #555555">" wedsupport.com, is an international matrimonial web portal aim to help those people are trying to find their perfect match. It is designed to help the members to brows their partner with in a secured environment sourcing only verified, trusted and genuine people trying to find their soul mates."</p>
    </div>
		 <div class="col-md-2 col_2">
      <h4>Help & Support</h4>
      <ul class="footer_links">
        <li><a href="#">24x7 Live help</a></li>
        <li><a href="{{ route("contact") }}">Contact us</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="{{ route("faq") }}">FAQs</a></li>
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
        <li><a href="https://www.facebook.com/Wedsupport"><i class="fab fa-facebook-f fa1"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter fa1"> </i></a></li>
        <li><a href="#"><i class="fab fa-google-plus fa1"> </i></a></li>
        <li><a href="https://www.youtube.com/channel/UCRwvQfo9NsiKqh2T-VIrA0w"><i class="fab fa-youtube fa1"> </i></a></li>
			 </ul>
		 </div>
		 <div class="clearfix"> </div>
		 <div class="copy">
      <p>Copyright © 2021 . All Rights Reserved  | Design by <a href="https://nxgit.com/" target="_blank">Nxgitsoft</a> </p>
		 </div>
	 </div>
 </div>
</body>
</html>
</html>




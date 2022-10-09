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
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
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
           </div>
		   <a class="brand" href="{{ route("index") }}"><img src= "{{asset('assets/images/logo.png')}}"  alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
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
		            <li><a href="{{ route("index") }}">Home</a></li>
		            <li><a href="{{ route("about") }}">About</a></li>
		    		
		            <li class="last"><a href="{{ route("contact") }}">Contacts</a></li>
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
				<img src=  "{{asset('assets/images/p3.jpg')}}"  alt="" style="border-radius: 50%;height:100px;width:100px;" >
				<label style="font-size: 20px">&ensp;Farjana Kabir</label>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4" style="text-align: right;padding-top:50px;">
			<div class="row">
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
			</div>
			
				
			
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
	<form action="">
		<div class="search_top">
	   <div class="inline-block">
		<label class="gender_1" >Seeking:</label>
		  <div class="age_box1" style="max-width: 100%; display: inline-block;">
			  <select>
				  <option value="">* Select Gender</option>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
			  </select>
		 </div>
	  </div>
	  
	  <div class="inline-block">
		<label class="gender_1">Country :</label>
		  <div class="age_box1" style="max-width: 100%; display: inline-block;">
			  <select><option value="">Any Country</option>
				  <option value="Country1">Country1</option>
				  <option value="Country2">Country2</option>
				  <option value="Country3">Country3</option>
				  <option value="Country4">Country4</option>
				  <option value="Country5">Country5</option>
			 </select>
		</div>
	 </div>

	 <div class="inline-block">
	  <label class="gender_1">State/province :</label>
		<div class="age_box1" style="max-width: 100%; display: inline-block;">
			<select>
				<option value="">Any State</option>
				<option value="Washington">Washington</option>
				<option value="Texas">Texas</option>
				<option value="Georgia">Georgia</option>
				<option value="Virginia">Virginia</option>
				<option value="Colorado">Colorado</option>
		   </select>
	  </div>
	</div>
   </div>
   
   <div class="inline-block">
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
	</div>
   
   <div class="inline-block">
	 <div class="age_box2" style="max-width: 220px;">
		 <label class="gender_1">Age :</label>
	  <input class="transparent" placeholder="From:" style="width: 34%;" type="text" value="">&nbsp;-&nbsp;<input class="transparent" placeholder="To:" style="width: 34%;" type="text" value="">
	 </div>
   </div>
	
	  <div class="submit inline-block">
		 <input id="submit-btn" class="hvr-wobble-vertical" type="submit" value="Find Matches">
	  </div>
   </form>
  </div>
</div>  
	 

<body>

	
<div class="container" style="padding: 0px 20px;">

	
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

<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
 </div>
 <div class="footer">
	 <div class="container">
		 <div class="col-md-4 col_2">
			 <h4>About Us</h4>
			 <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
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
			   {{-- <li><a href="#"><i class="fas fa-facebook fa1"> </i></a></li> --}}

			   <li><a href="#"><i class="fab fa-facebook-f fa1"></i></a></li>
			   <li><a href="#"><i class="fab fa-twitter fa1"> </i></a></li>
			   <li><a href="#"><i class="fab fa-google-plus fa1"> </i></a></li>
			   <li><a href="#"><i class="fab fa-youtube fa1"> </i></a></li>
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



	
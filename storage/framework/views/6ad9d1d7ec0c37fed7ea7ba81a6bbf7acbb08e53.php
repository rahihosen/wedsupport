
<!DOCTYPE HTML>
<html>
<head>
<title>WedSupport</title>
<link href="<?php echo e(asset('assets/images/logo.png')); ?>"  rel="icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href= "<?php echo e(asset('assets/css/bootstrap-3.1.1.min.css')); ?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>" ></script>
<script src= "<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"  ></script>
<!-- Custom Theme files -->
<link href= "<?php echo e(asset('assets/css/style.css')); ?>" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="<?php echo e(asset('assets/css/font-awesome.css')); ?>" rel="stylesheet">
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
           

		   <a style="margin-left: -20px;" class="brand" href="<?php echo e(route("index")); ?>"><img src= "<?php echo e(asset('assets/images/logo.png')); ?>"  alt="logo" style="height: 40px; width: 60px;">
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
		            <li><a style="color:rgb(0, 0, 0); font-weight:bold"  href="<?php echo e(route("index")); ?>">Home</a></li>
		            <li><a style="color:rgb(0, 0, 0); font-weight:bold"  href="<?php echo e(route("about")); ?>">About</a></li>

		            <li class="last"><a style="color:rgb(0, 0, 0); font-weight:bold"  href="<?php echo e(route("contact")); ?>">Contacts</a></li>


					

					<li class="dropdown">
						<a style="color:rgb(0, 0, 0); font-weight:bold" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(Auth::user()->name); ?><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a style="color:rgb(0, 0, 0); font-weight:bold"   href="<?php echo e(route('information')); ?>">Profile</a>

							</li>
						
							<li>
								<a style="color:rgb(0, 0, 0); font-weight:bold" href="<?php echo e(route('updateinfo')); ?>">Update Information</a>

							</li>
							<li>
								<a style="color:rgb(0, 0, 0); font-weight:bold"   href="<?php echo e(route('setting')); ?>">Setting</a>

							</li>
              <li>
								<a style="color:rgb(0, 0, 0); font-weight:bold"   href="<?php echo e(route('photos')); ?>">Photos Gallery</a>

							</li>
						</ul>
					</li>
                    <li><a style="color:rgb(0, 0, 0); font-weight:bold" <?php if($sub != null): ?> data-toggle="modal" data-target="#myModal1"  <?php else: ?> href="<?php echo e(route('upgrade')); ?>" <?php endif; ?>>Upgrade Account</a></li>
					<li>
						<a style="color:rgb(0, 0, 0); font-weight:bold"   href="<?php echo e(route('logout')); ?>">Logout</a>

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
				<img src="<?php echo e(asset('userImage/'.Auth::user()->userprofile->imagePath)); ?>"    onerror="this.src='<?php echo e(asset('assets/images/avatar.png')); ?>'"  alt="" style="border-radius: 50%;height:110px;width:110px; padding: 5px;" >
        <label style="font-size: 20px">&ensp;<a href="<?php echo e(route('information')); ?>" style="color: rgb(197, 31, 95)"><?php echo e(Auth::user()->name); ?></a></label>
			</div>
			


			</div>

		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
		</div> <!-- end container -->

	</div> <!-- end navbar-inner -->

</div>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>





<body>

<div class="container" style="padding: 0px 20px;">
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($data->usertype!="0"): ?>
		<div class="col-md-2 " style="padding-top: 20px;">
      <div class="card" <?php if($sub != null): ?> data-toggle="modal" data-target="#myModal1"  <?php else: ?> data-toggle="modal" data-target="#myModal" <?php endif; ?> >
        <img class="card-img-top" src= "<?php echo e(asset('userImage/'.$data->userprofile->imagePath)); ?>" onerror="this.src='<?php echo e(asset('assets/images/avatar.png')); ?>'" alt="Card image" style="width:100%" height="141px" width="170px">


          <div class="card-body" >
            <a class="membersn" ><?php  $name= $data->name; echo mb_strimwidth($name, 0, 5),"...";?></a>

         </div>

        </div>

      </div>
		<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                
                </div>
                <div class="modal-body">
                <p class="modeltext">Please Upgrade Your Account!</p>
                <hr>
                <a class="btn  btn-danger modelbtn" href="<?php echo e(route('upgrade')); ?>">Upgrade</a>
                </div>
                
            </div>

            </div>
        </div>
        
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                
                </div>
                <div class="modal-body">
                <p class="modeltext">Your request is in processing!</p>

                </div>
                
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
        <li><a href="<?php echo e(route("contact")); ?>">Contact us</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="<?php echo e(route("faq")); ?>">FAQs</a></li>
      </ul>
    </div>
    <div class="col-md-2 col_2">
      <h4>Quick Links</h4>
      <ul class="footer_links">
        <li><a href="<?php echo e(route('privacy')); ?>">Privacy Policy</a></li>
        <li><a href="<?php echo e(route('terms')); ?>">Terms and Conditions</a></li>
        <li><a href="<?php echo e(route('services')); ?>">Services</a></li>
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



<?php /**PATH C:\laragon\www\wed\resources\views/visitor.blade.php ENDPATH**/ ?>
@extends('layouts.main')
@section('content')
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page"><a href="#">View Profile</a></li>
                  
                    <li class="current-page"><a href="{{ route("switch_off") }}">Switch Off Profile</a></li>
                    <li class="current-page"><a href="{{ route("visitor") }}">Find Partner</a></li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-12 profile_left">
   	 	<h2>Profile Id : 254870</h2>
   	 	<div class="col_3">
   	        <div class="col-md-4 row_2">
				<img src="assets/images/p3.jpg" alt="">
			</div>
			<div class="col-md-4 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<td class="day_value">28, 5ft 5in / 163cm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Login :</td>
							<td class="day_value">4 hours ago</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value">Sikh</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value">Single</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Location :</td>
							<td class="day_value">India</td>
						</tr>
					    
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span>Engineering</span></td>
						</tr>
				    </tbody>
				</table>
				<ul class="login_details">
			      <li>Already a member? <a href="login.html">Login Now</a></li>
			      <li>If not a member? <a href="register.html">Register Now</a></li>
			    </ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		        	
				  
		  </div>
	   </div>
   	 </div>
  </div>
</div>

<br><br>
@endsection
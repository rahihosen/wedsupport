@extends('layouts.main')
@section('content')
<div class="grid_3">
	<div class="container">
	 <div class="breadcrumb1">
	   <ul>
		  <a href="{{ route('index') }}"><i class="fa fa-home home_1"></i></a>
		  <span class="divider">&nbsp;|&nbsp;</span>
		  <li class="current-page">Contact</li>
	   </ul>
	 </div>
	 <div class="grid_5">
		<p>In this era of Information Technology any relationship should be made on clear and correct information and we at wedsupport.com helping members to find the accurate information by using our platform so that they can choose the potential partner and decide which one is the right one for them.  </p>
		<address class="addr row">
		  <dl class="grid_4">
			  <dt>Address :</dt>
			  <dd>
				Hossain Park street,
				Panchlish,   <br>
				Chittagong, Bangladesh
			  </dd>
		  </dl>
		  <dl class="grid_4">
			  <dt>Telephones :</dt>
			  <dd>
				+880 1715485558 
				{{-- <br>
				  +1 800 789 5478 --}}
			  </dd>
			  <br><dt>Imo :</dt>
			  <dd>
				+880 1715485558 
			  </dd>
			  <br><dt>Viber :</dt>
			  <dd>
				+880 1715485558
			  </dd>
			  
		  </dl>
		  <dl class="grid_4">
			  <dt>E-mail :</dt>
			  <dd>
				  {{-- <a href="malito:mail@demolink.org"> --}}
					helpdesk@wedsupport.com</a></dd>
					<br><dt>WhatsApp :</dt>
			  <dd>
				+880 1715485558 
			  </dd>
		  </dl>
		</address>
	  </div>
	 </div>
  </div>
  
  
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25573.724167064905!2d93.81412267801736!3d22.699385183949182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277caa9220cb%3A0xf274740d35824861!2sPanchlaish%2C%20Chattogram%2C%20Bangladesh!5e1!3m2!1sen!2sus!4v1623148553670!5m2!1sen!2sus" width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>




  <div class="about_middle">
	<div class="container">
	   <h2>Contact Form</h2>
		<form id="contact-form" class="contact-form">
		  <fieldset>
			<input type="text" class="text" placeholder="" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			<input type="text" class="text" placeholder="" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
			<input type="text" class="text" placeholder="" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			<textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
			<input name="submit" type="submit" id="submit" value="Submit">
		  </fieldset>
		</form>
	</div>
  </div>
@endsection


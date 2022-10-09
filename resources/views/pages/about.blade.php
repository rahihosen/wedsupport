@extends('layouts.main')

@section('content')
<div class="grid_3">
	<div class="container">
	 <div class="breadcrumb1">
	   <ul>
		  <a href="{{ route('index') }}"><i class="fa fa-home home_1"></i></a>
		  <span class="divider">&nbsp;|&nbsp;</span>
		  <li class="current-page">About</li>
	   </ul>
	 </div>
	 <div class="about">
		   <div class="col-md-6 about_left">
			   <img src= "{{asset('assets/images/a3.jpg')}}" class="img-responsive" alt=""/>
		   </div>
		   <div class="col-md-6 about_right">
			   <h1>About us</h1>
			   <p>
				wedsupport.com, is an international matrimonial web portal aim to help those people are trying to find their perfect match. It is designed to help the members to brows their partner with in a secured environment sourcing only verified, trusted and genuine people trying to find their soul mates.
				<br><br>
				wedsupport.com allows members to search their partner based on age, ethnicity, origin, country, religion and profession. After choosing members can communicate via message, email, phone and finally find the preferred partner for them or their loved ones.
			<br><br>	In this era of Information Technology any relationship should be made on clear and correct information and we at wedsupport.com helping members to find the accurate information by using our platform so that they can choose the potential partner and decide which one is the right one for them.

			   </p>
 {{-- <div class="accordation">
			 <div class="jb-accordion-wrapper">
				  <div class="jb-accordion-title">Accordion 1 <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-1-"><i class="fa fa-angle-down"> </i></button></div>
				  <p><!-- /.accordion-title -->
				  </p><div id="accordion-1-" class="jb-accordion-content collapse in" style="height: auto;">
				  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae...</p>
				  </div>
				  <p><!-- /.collapse --></p>
			  </div>
			  <div class="jb-accordion-wrapper">
				  <div class="jb-accordion-title">Accordion2 <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion2-"><i class="fa fa-angle-down"> </i></button></div>
				  <p><!-- /.accordion-title -->
				  </p><div id="accordion2-" class="jb-accordion-content collapse ">
				  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt </p>
				  </div>
				  <p><!-- /.collapse --></p>
			  </div>
			  <div class="jb-accordion-wrapper">
				  <div class="jb-accordion-title">Accordion3<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion3"><i class="fa fa-angle-down"> </i></button></div>
				  <p><!-- /.accordion-title -->
				  </p><div id="accordion3" class="jb-accordion-content collapse ">
				  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt </p>
				  </div>
				  <p><!-- /.collapse --></p>
			  </div>
		  </div> --}}
		   </div>
		   <div class="clearfix"> </div>
	 </div>
	</div>
  </div>
  <div class="about_middle">
	  <div class="container">
		<h2>Happy Clients</h2>
		<div class="about_middle-grid1">
		  <div class="col-sm-6 testi_grid list-item-0">
			  <blockquote class="testi_grid_blockquote">
				  <figure class="featured-thumbnail">
					  <img src= "{{asset('assets/images/avatar.PNG')}}" class="img-responsive" alt=""/>
				  </figure>
				  <div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.…</a>
				  <div class="clearfix"></div>
				  </div>
			  </blockquote>
			  <small class="testi-meta"><span class="user">Eiusmod tempor incididunt</span></small>
		  </div>
		  <div class="col-sm-6 testi_grid list-item-1">
			  <blockquote class="testi_grid_blockquote">
				  <figure class="featured-thumbnail">
					  <img src="{{asset('assets/images/avatar.PNG')}}" class="img-responsive" alt=""/>
				  </figure>
				  <div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.…</a>
				  <div class="clearfix"></div>
				  </div>
			  </blockquote>
			  <small class="testi-meta1"><span class="user">Sint occaecat </span></small>
		  </div>
		  <div class="clearfix"> </div>
		</div>
		<div class="about_middle-grid2">
		  <div class="col-sm-6 testi_grid list-item-0">
			  <blockquote class="testi_grid_blockquote">
				  <figure class="featured-thumbnail">
					  <img src="{{asset('assets/images/avatar.PNG')}}" class="img-responsive" alt=""/>
				  </figure>
				  <div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.…</a>
				  <div class="clearfix"></div>
				  </div>
			  </blockquote>
			  <small class="testi-meta"><span class="user">Eiusmod tempor incididunt</span></small>
		  </div>
		  <div class="col-sm-6 testi_grid list-item-1">
			  <blockquote class="testi_grid_blockquote">
				  <figure class="featured-thumbnail">
					  <img src= "{{asset('assets/images/avatar.PNG')}}" class="img-responsive" alt=""/>
				  </figure>
				  <div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.…</a>
				  <div class="clearfix"></div>
				  </div>
			  </blockquote>
			  <small class="testi-meta1"><span class="user">Sint occaecat </span></small>
		  </div>
		  <div class="clearfix"> </div>
		</div>
	  </div>
  </div>
  <div class="about_bottom" style="display: none;">
	  <div class="container">
		  <h3>Team</h3>
		 <div class="col-md-3 about_grid1">
			<ul class="posts-grid our-team">
			  <li class="list-item-1">
				  <figure class="thumbnail_1 thumbnail">
					  <a href="#"><img src="{{asset('assets/images/avatar.PNG')}}"  class="img-responsive" alt=""/></a>
					  <div class="post_networks">
						  <ul>
							  <li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
						  </ul>
					  </div>
				  </figure>
				  <div class="desc">
					  <h4><a href="#">CEO</a></h4>
					  <p>Lorem ipsum dolor sit amet,</p>
				  </div>
			   </li>
			 </ul>
		 </div>
		 <div class="col-md-3 about_grid1">
			<ul class="posts-grid our-team">
			  <li class="list-item-1">
				  <figure class="thumbnail_1 thumbnail">
					  <a href="#"><img src="{{asset('assets/images/avatar.PNG')}}"  class="img-responsive" alt=""/></a>
					  <div class="post_networks">
						  <ul>
							  <li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
						  </ul>
					  </div>
				  </figure>
				  <div class="desc">
					  <h4><a href="#">Director </a></h4>
					  <p>Lorem ipsum dolor sit amet,</p>
				  </div>
			   </li>
			 </ul>
		 </div>
		 <div class="col-md-3 about_grid1">
			<ul class="posts-grid our-team">
			  <li class="list-item-1">
				  <figure class="thumbnail_1 thumbnail">
					  <a href="#"><img src= "{{asset('assets/images/avatar.PNG')}}" class="img-responsive" alt=""/></a>
					  <div class="post_networks">
						  <ul>
							  <li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
						  </ul>
					  </div>
				  </figure>
				  <div class="desc">
					  <h4><a href="#">General Manager</a></h4>
					  <p>Lorem ipsum dolor sit amet,</p>
				  </div>
			   </li>
			 </ul>
		 </div>
		 <div class="col-md-3 about_grid1">
			<ul class="posts-grid our-team">
			  <li class="list-item-1">
				  <figure class="thumbnail_1 thumbnail">
					  <a href="#"><img src="{{asset('assets/images/avatar.PNG')}}"  class="img-responsive" alt=""/></a>
					  <div class="post_networks">
						  <ul>
							  <li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
						  </ul>
					  </div>
				  </figure>
				  <div class="desc">
					  <h4><a href="#">Accountant</a></h4>
					  <p>Lorem ipsum dolor sit amet,</p>
				  </div>
			   </li>
			 </ul>
		 </div>
		 <div class="clearfix"> </div>
	  </div>
  </div>
@endsection

@extends('layouts.main')
@section('content')


<!-- Carousel container -->

<div id="my-pics" class="carousel slide" data-ride="carousel" >

  <!-- Indicators -->
  <ol class="carousel-indicators">
  <li data-target="#my-pics" data-slide-to="0" class="active"></li>
  <li data-target="#my-pics" data-slide-to="1"></li>
  <li data-target="#my-pics" data-slide-to="2"></li>
  {{-- <li data-target="#my-pics" data-slide-to="3"></li>
  <li data-target="#my-pics" data-slide-to="4"></li> --}}
  
  </ol>
  
  <!-- Content -->
  <div class="carousel-inner" role="listbox">
  
  <!-- Slide 1 -->
  <div class="item active">
  <img src="{{asset('assets/images/slide1.PNG')}}" alt="">
  </div>
  
  <!-- Slide 2 -->
  <div class="item">
  <img src="{{asset('assets/images/slide2.PNG')}}" alt="">
  </div>
  
  <!-- Slide 3 -->
  <div class="item">
  <img src="{{asset('assets/images/slide3.PNG')}}" alt="">
  </div>
  
  </div>
{{-- 
  <div class="item">
    <img src="{{asset('assets/images/slide4.PNG')}}" alt="">
    </div>
    
    </div>
   
  <div class="item">
    <img src="{{asset('assets/images/slide5.PNG')}}" alt="">
    </div> 
    
    </div> --}}

    
<!-- Previous/Next controls -->
<a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
  <span class="icon-prev" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
  <span class="icon-next" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>
  
  </div>
  
@endsection
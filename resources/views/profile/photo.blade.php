@extends('layouts.main')
@section('content')


    <div class="grid_3">
        <div class="container">

            @include('profile.memberdetails')

            <div class="grid_1" style="padding: 1em 0">
                <h1 style="text-align: center">Photos Gallery</h1>
                <div class="heart-divider">
                    <span class="grey-line"></span>
                    <i class="fa fa-heart pink-heart"></i>
                    <i class="fa fa-heart grey-heart"></i>
                    <span class="grey-line"></span>
                </div>

                <div class="services">

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('addImage') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="col-md-4">


                            <div class="custom-file" style="padding: 5px 0px 10px 0px">

                                <label class="custom-file-label" for="customFile">Select file</label>
                                <input type="file" class="custom-file-input" id="chooseFile" name="imagePath1">

                            </div>
                            <img src="{{ asset('userImage/' . Auth::user()->userprofile->imagePath1) }}"
                                onerror="this.src='{{ asset('assets/images/avatar.png') }}'" class="rounded"
                                alt="Cinque Terre" width="280" height="236">

                        </div>
                        <div class="col-md-4">


                            <div class="custom-file" style="padding: 5px 0px 10px 0px">

                                <label class="custom-file-label" for="customFile">Select file</label>
                                <input type="file" class="custom-file-input" id="chooseFile" name="imagePath2">

                            </div>
                            <img src="{{ asset('userImage/' . Auth::user()->userprofile->imagePath2) }}"
                                onerror="this.src='{{ asset('assets/images/avatar.png') }}'" class="rounded"
                                alt="Cinque Terre" width="280" height="236">

                        </div>

                        <div class="col-md-4">


                            <div class="custom-file" style="padding: 5px 0px 10px 0px">

                                <label class="custom-file-label" for="customFile">Select file</label>
                                <input type="file" class="custom-file-input" id="chooseFile" name="imagePath3">

                            </div>
                            <img src="{{ asset('userImage/' . Auth::user()->userprofile->imagePath3) }}"
                                onerror="this.src='{{ asset('assets/images/avatar.png') }}'" class="rounded"
                                alt="Cinque Terre" width="280" height="236">

                        </div>




                        <div class="form-actions">
                            <input type="submit" id="edit-submit" name="op" value="Save" class="btn_1 submit">
                        </div>






                </div>
                </form>
                <div class="clearfix"> </div>
            </div>

        </div>

        {{-- <div class="container">

  <img src="{{asset('assets/images/p3.jpg')}}" class="rounded" alt="Cinque Terre" width="300" height="236" style="padding: 5px">

  <img src="{{asset('assets/images/p3.jpg')}}" class="rounded" alt="Cinque Terre" width="300" height="236" style="padding: 5px">

  <img src="{{asset('assets/images/p3.jpg')}}" class="rounded" alt="Cinque Terre" width="300" height="236" style="padding: 5px">

</div> --}}


        <br><br><br>

    @endsection
























    {{-- <div class="grid_3">
    <div class="container">

     <div class="services">

         @if (Session::has('success'))
         <div class="alert alert-success">
             {{Session::get('success')}}
         </div>
     @endif

     <form  method="post" action="{{ route('addinfo.store') }}"  enctype="multipart/form-data">

            @csrf

           <div class="col-sm-6 login_left">


                 <label for="edit-name">Image</label><br>
                <div class="custom-file" style="padding: 5px 0px 10px 0px">

                  <label class="custom-file-label" for="customFile">Select file</label>
                  <input type="file" class="custom-file-input" id="chooseFile" name="imagePath">

                </div>


		<div class="form-actions">
		  <input type="submit" id="edit-submit" name="op" value="Save" class="btn_1 submit">
		</div>


	</div>




        </div>
      </form>
        <div class="clearfix"> </div>
     </div> --}}

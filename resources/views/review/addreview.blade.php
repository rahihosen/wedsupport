@extends('layouts.main')

@section('content')

    <div class="grid_3">
        <div class="container">
            @include('profile.memberdetails')
            <div class="services">

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @auth
                    <form enctype="multipart/form-data" method="POST" action="{{ route('addReview.store') }}">
                        @csrf
                        <div class="col-md-12 profile_left">
                            <div class="col-md-4 row_2">
                                {{-- <img src="{{asset('assets/images/p3.jpg')}}" alt=""> --}}
                                <img src="{{ asset('userImage/' . Auth::user()->userprofile->imagePath) }}"
                                    onerror="this.src='{{ asset('assets/images/avatar.png') }}'" alt=""
                                    style="height:210px; width:235px;">
                            </div>
                            <div class="col-md-8 row_2">
                                <textarea class="form-control" name="review" rows="7"
                                    placeholder="Quick, think to say something!" required></textarea>
                                    <div class="form-actions">
                                        <input type="submit" id="edit-submit" name="op" value="submit" class="btn_1 submit">
                                    </div>
                            </div>
                        </div>
                    </form>

                @else
                    <p>
                        <a href="/register" class="underline">Register</a> or <a href="/login"
                            class="underline">Login</a> to leave
                        a comment.
                    </p>
                @endauth

            </div>
        </div>
    </div>
    <script language="javascript">
        print_country("country");
    </script>
    <script language="javascript">
        print_country("p_country");
    </script>




@endsection

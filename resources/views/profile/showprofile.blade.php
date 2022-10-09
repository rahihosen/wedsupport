@extends('layouts.main')
@section('content')
    <div class="grid_3">
        <div class="container">

            <div class="profile">
                <div class="col-md-12 profile_left">
                    {{-- <h2>Profile Id : 254870</h2> --}}
                    <div class="col_3">
                        <div class="col-md-4 row_2">
                            <img src="{{ asset('userImage/' . $data->userprofile->imagePath) }}"
                                onerror="this.src='{{ asset('assets/images/avatar.png') }}'" height="250px" width="270px"  @if ($data->userprofile->blur == 0)
                                style="width:100%; object-fit: cover;"
                            @else
                                style="width:100%; object-fit: cover; filter: blur(5px);"
                                class="exclude" 
                @endif >

                        </div>
                        <div class="col-md-4 row_1">
                            <table class="table_working_hours">
                                <tbody>
                                    <tr class="opened_1">
                                        <td class="day_label">Name :</td>
                                        <td class="day_value">
                                            {{ $data->name }}
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Gender :</td>
                                        <td class="day_value">
                                            @if ($data->userprofile->gender != 'NULL')
                                                {{ $data->userprofile->gender }}
                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Religion :</td>
                                        <td class="day_value">
                                            @if ($data->userprofile->religion != 'NULL')
                                                {{ $data->userprofile->religion }}

                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Marital Status :</td>
                                        <td class="day_value">
                                            @if ($data->userprofile->gender != 'NULL')
                                                {{ $data->userprofile->gender }}
                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Country</td>
                                        <td class="day_value">
                                            @if ($data->userprofile->country != 'NULL')
                                                {{ $data->userprofile->country }}
                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="opened">
                                        <td class="day_label">State/City</td>
                                        <td class="day_value">
                                            @if ($data->userprofile->state != 'NULL')
                                                {{ $data->userprofile->state }}
                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>

                                    <tr class="opened">
                                        <td class="day_label">
                                            <form action="{{ route('block.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="block_id" value="{{ $data->id }}">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                                <button type="submit" class="btn btn-danger">Block</button>
                                            </form>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                            {{-- <ul class="login_details">
			      <li>Already a member? <a href="login.html">Login Now</a></li>
			      <li>If not a member? <a href="register.html">Register Now</a></li>
			    </ul> --}}
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col_4">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                                        data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                                        aria-controls="profile">Family Details</a></li>
                                <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab"
                                        aria-controls="profile1">Partner Preference</a></li>
                                <li role="presentation"><a href="#profile2" role="tab" id="profile-tab2" data-toggle="tab"
                                        aria-controls="profile2" style="color: white">Photos</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    {{-- <div class="tab_box">
				    	<h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
				    	<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor</p>
				    </div> --}}
                                    <div class="basic_1">
                                        <h3>Basics & Lifestyle</h3>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened_1">
                                                        <td class="day_label">Name :</td>
                                                        <td class="day_value">{{ $data->name }}</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Marital Status :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->status != 'NULL')
                                                                {{ $data->userprofile->status }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Age :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->age != 'NULL')
                                                                {{ $data->userprofile->age }} years
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Height :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->height != 'NULL')
                                                                {{ $data->userprofile->height }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    {{-- <tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value">28 Yrs</td>
								</tr> --}}



                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened">
                                                        <td class="day_label">Weight :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->weight != 'NULL')
                                                                {{ $data->userprofile->weight }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Blood Group :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->blood_group != 'NULL')
                                                                {{ $data->userprofile->blood_group }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Drink :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->drink != 'NULL')
                                                                    {{ $data->userprofile->drink }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </span></td>
                                                    </tr>

                                                    <tr class="closed">
                                                        <td class="day_label">Smoke :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->smoke != 'NULL')
                                                                    {{ $data->userprofile->smoke }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="basic_1">
                                        <h3>Religious / Social & Astro Background</h3>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>


                                                    <tr class="opened">
                                                        <td class="day_label">Date of Birth :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->b_date != 'NULL')
                                                                    {{ $data->userprofile->b_date }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Place of Birth :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->place_of_birth != 'NULL')
                                                                    {{ $data->userprofile->place_of_birth }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </span></td>

                                                    </tr>
                                                    <tr class="opened_1">
                                                        <td class="day_label">Religion :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->religion != 'NULL')
                                                                {{ $data->userprofile->religion }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="basic_1 basic_2">
                                        <h3>Education & Career</h3>
                                        <div class="basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>

                                                    <tr class="opened">
                                                        <td class="day_label">Highest Education :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->h_edu != null)
                                                                {{ $data->userprofile->h_edu }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">School :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->school != 'NULL')
                                                                {{ $data->userprofile->school }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">College :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->college != 'NULL')
                                                                {{ $data->userprofile->college }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">University :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->university != 'NULL')
                                                                {{ $data->userprofile->university }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Subject :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->subject != 'NULL')
                                                                {{ $data->userprofile->subject }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Profession :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->profession != 'NULL')
                                                                {{ $data->userprofile->profession }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Annual Income :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->annual_income != 'NULL')
                                                                    {{ $data->userprofile->annual_income }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                    <div class="basic_3">
                                        <h4>Family Details</h4>
                                        <div class="basic_1 basic_2">
                                            <h3>Basics</h3>
                                            <div class="col-md-6 basic_1-left">
                                                <table class="table_working_hours">
                                                    <tbody>
                                                        <tr class="opened">
                                                            <td class="day_label">Father's Occupation :</td>
                                                            <td class="day_value">

                                                                @if ($data->userprofile->fathers_occupation != 'NULL')
                                                                    {{ $data->userprofile->fathers_occupation }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">Mother's Occupation :</td>
                                                            <td class="day_value">
                                                                @if ($data->userprofile->mothers_occupation != 'NULL')
                                                                    {{ $data->userprofile->mothers_occupation }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">No. of Brothers :</td>
                                                            <td class="day_value closed"><span>
                                                                    @if ($data->userprofile->no_of_brother != 'NULL')
                                                                        {{ $data->userprofile->no_of_brother }}
                                                                    @else
                                                                        Not Specified
                                                                    @endif
                                                                </span></td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">No. of Sisters :</td>
                                                            <td class="day_value closed"><span>
                                                                    @if ($data->userprofile->no_of_sister != 'NULL')
                                                                        {{ $data->userprofile->no_of_sister }}
                                                                    @else
                                                                        Not Specified
                                                                    @endif
                                                                </span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                                    <div class="basic_1 basic_2">
                                        <div class="basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened">
                                                        <td class="day_label">Age :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->from_age != 'NULL' && Auth::user()->userprofile->to_age != 'NULL')
                                                                {{ $data->userprofile->from_age }} to
                                                                {{ Auth::user()->userprofile->to_age }}
                                                            @else
                                                                Doesn't matter
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Marital Status :</td>
                                                        <td class="day_value">
                                                            @if ($data->userprofile->p_status != 'NULL')
                                                                {{ $data->userprofile->p_status }}
                                                            @else
                                                                Doesn't matter
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day_label">Religion :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->p_religion != 'NULL')
                                                                    {{ $data->userprofile->p_religion }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Country :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->p_country != 'NULL')
                                                                    {{ $data->userprofile->p_country }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">State/District :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->p_state != 'NULL')
                                                                    {{ $data->userprofile->p_state }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>


                                                    <tr class="opened">
                                                        <td class="day_label">Profession :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->p_profession != 'NULL')
                                                                    {{ $data->userprofile->p_profession }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Gender :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->p_gender != 'NULL')
                                                                    {{ $data->userprofile->p_gender }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Comment about Partner :</td>
                                                        <td class="day_value closed"><span>
                                                                @if ($data->userprofile->comment != 'NULL')
                                                                    {{ $data->userprofile->comment }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile2" aria-labelledby="profile-tab2">
                                    <div class="basic_3">
                                        <div class="grid_1" style="padding: 1em 0">
                                            <h1 style="text-align: center">Photos Gallery</h1>
                                            <div class="heart-divider">
                                                <span class="grey-line"></span>
                                                <i class="fa fa-heart pink-heart"></i>
                                                <i class="fa fa-heart grey-heart"></i>
                                                <span class="grey-line"></span>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="col-md-4" style="padding-bottom: 10px">
                                                    <img src="{{ asset('userImage/' . $data->userprofile->imagePath1) }}"
                                                        onerror="this.src='{{ asset('assets/images/avatar.png') }}'"
                                                        alt="Cinque Terre" width="280"
                                                        height="236" @if ($data->userprofile->blur == 0) style="width:100%; object-fit: cover;"
                                                        @else
                                                        style="width:100%; object-fit: cover; filter: blur(5px);"  class="exclude"  @endif >

                                                </div>
                                            </a>
                                            <div class="col-md-4" style="padding-bottom: 10px">

                                                <img src="{{ asset('userImage/' . $data->userprofile->imagePath2) }}"
                                                    onerror="this.src='{{ asset('assets/images/avatar.png') }}'"
                                                    class="rounded zoom" alt="Cinque Terre"
                                                    width="280" height="236"  @if ($data->userprofile->blur == 0) style="width:100%; object-fit: cover;"
                                                        @else
                                                        style="width:100%; object-fit: cover; filter: blur(5px);"  class="exclude"  @endif>

                                            </div>

                                            <div class="col-md-4" style="padding-bottom: 10px">
                                                <img src="{{ asset('userImage/' . $data->userprofile->imagePath3) }}"
                                                    onerror="this.src='{{ asset('assets/images/avatar.png') }}'"
                                                    class="rounded zoom"  alt="Cinque Terre"
                                                    width="280" height="236"  @if ($data->userprofile->blur == 0) style="width:100%; object-fit: cover;"
                                                        @else
                                                        style="width:100%; object-fit: cover; filter: blur(5px);" class="exclude" @endif>

                                            </div>

                                            {{-- modal --}}


                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter" style="margin: 15px;">
                                                View All
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">



                                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                            <!-- Indicators -->
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#myCarousel" data-slide-to="0"
                                                                    class="active">
                                                                </li>
                                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                                            </ol>

                                                            <!-- Wrapper for slides -->
                                                            <div class="carousel-inner">
                                                                <div class="item active" style="margin: 25%;">
                                                                    <img src="{{ asset('userImage/' . $data->userprofile->imagePath1) }}"
                                                                        onerror="this.src='{{ asset('assets/images/avatar.png') }}'"
                                                                        alt="Los Angeles" alt="Cinque Terre" width="280"
                                                                        height="236"  @if ($data->userprofile->blur == 0) style="width:100%; object-fit: cover;"
                                                        @else
                                                        style="width:100%; object-fit: cover; filter: blur(5px);"  class="exclude"  @endif>
                                                                </div>

                                                                <div class="item" style="margin: 25%;">
                                                                    <img src="{{ asset('userImage/' . $data->userprofile->imagePath2) }}"
                                                                        onerror="this.src='{{ asset('assets/images/avatar.png') }}'"
                                                                        class="rounded zoom" alt="Cinque Terre"
                                                                        width="280" height="236"  @if ($data->userprofile->blur == 0) style="width:100%; object-fit: cover;"
                                                        @else
                                                        style="width:100%; object-fit: cover; filter: blur(5px);"  class="exclude"  @endif>
                                                                </div>

                                                                <div class="item" style="margin: 25%;">
                                                                    <img src="{{ asset('userImage/' . $data->userprofile->imagePath3) }}"
                                                                        onerror="this.src='{{ asset('assets/images/avatar.png') }}'"
                                                                        class="rounded zoom" alt="Cinque Terre"
                                                                        width="280" height="236"  @if ($data->userprofile->blur == 0) style="width:100%; object-fit: cover;"
                                                        @else
                                                        style="width:100%; object-fit: cover; filter: blur(5px);"  class="exclude"  @endif>
                                                                </div>
                                                            </div>

                                                            <!-- Left and right controls -->
                                                            <a class="left carousel-control" href="#myCarousel"
                                                                data-slide="prev">
                                                                <i class="fa fa-chevron-circle-left"
                                                                    aria-hidden="true"></i>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="right carousel-control" href="#myCarousel"
                                                                data-slide="next">
                                                                <span><i class="fa fa-chevron-circle-right"
                                                                        aria-hidden="true"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- modal --}}

                                            {{-- carousel bar --}}


                                            {{-- carousel bar --}}



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>



    @endsection

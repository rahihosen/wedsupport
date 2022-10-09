@extends('layouts.main')

@section('content')

    <div class="grid_3">
        <div class="container">
            @include('profile.memberdetails')

            <div class="profile">
                <div class="col-md-12 profile_left">
                    {{-- <h2>Profile Id : 254870</h2> --}}
                    <div class="col_3">
                        <div class="col-md-4 row_2">
                            {{-- <img src="{{asset('assets/images/p3.jpg')}}" alt=""> --}}
                            <img src="{{ asset('userImage/'. Auth::user()->userprofile->imagePath) }}"
                               alt=""
                                style="height:210px; width:235px;">


                        </div>
                        <div class="col-md-4 row_1">
                            <table class="table_working_hours">
                                <tbody>
                                    <tr class="opened_1">
                                        <td class="day_label">Name :</td>
                                        <td class="day_value">
                                            {{ Auth::user()->name }}
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Gender :</td>
                                        <td class="day_value">
                                            @if (Auth::user()->userprofile->gender != 'NULL')
                                                {{ Auth::user()->userprofile->gender }}
                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Religion :</td>
                                        <td class="day_value">
                                            @if (Auth::user()->userprofile->religion != 'NULL')
                                                {{ Auth::user()->userprofile->religion }}

                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Marital Status :</td>
                                        <td class="day_value">
                                            @if (Auth::user()->userprofile->status != 'NULL')
                                                {{ Auth::user()->userprofile->status }}
                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Country</td>
                                        <td class="day_value">
                                            @if (Auth::user()->userprofile->country != 'NULL')
                                                {{ Auth::user()->userprofile->country }}
                                            @else
                                                Not Specified
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="opened">
                                        <td class="day_label">State/City</td>
                                        <td class="day_value">
                                            @if (Auth::user()->userprofile->state != 'NULL')
                                                {{ Auth::user()->userprofile->state }}
                                            @else
                                                Not Specified
                                            @endif
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
                                                        <td class="day_value">{{ Auth::user()->name }}</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Marital Status :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->status != 'NULL')
                                                                {{ Auth::user()->userprofile->status }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Age :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->age != 'NULL')
                                                                {{ Auth::user()->userprofile->age }} years
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Height :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->height != 'NULL')
                                                                {{ Auth::user()->userprofile->height }}
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
                                        <div class="col-md-6 basic_1-left" style="padding-right: 130px;">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened">
                                                        <td class="day_label">Weight :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->weight != 'NULL')
                                                                {{ Auth::user()->userprofile->weight }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Blood Group :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->blood_group != 'NULL')
                                                                {{ Auth::user()->userprofile->blood_group }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Drink :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->drink != 'NULL')
                                                                    {{ Auth::user()->userprofile->drink }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </span></td>
                                                    </tr>

                                                    <tr class="closed">
                                                        <td class="day_label">Smoke :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->smoke != 'NULL')
                                                                    {{ Auth::user()->userprofile->smoke }}
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
                                                                @if (Auth::user()->userprofile->b_date != 'NULL')
                                                                    {{ Auth::user()->userprofile->b_date }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Place of Birth :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->place_of_birth != 'NULL')
                                                                    {{ Auth::user()->userprofile->place_of_birth }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </span></td>

                                                    </tr>
                                                    <tr class="opened_1">
                                                        <td class="day_label">Religion :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->religion != 'NULL')
                                                                {{ Auth::user()->userprofile->religion }}
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
                                                            @if (Auth::user()->userprofile->h_edu != 'NULL')
                                                                {{ Auth::user()->userprofile->h_edu }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">School :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->school != 'NULL')
                                                                {{ Auth::user()->userprofile->school }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">College :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->college != 'NULL')
                                                                {{ Auth::user()->userprofile->college }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">University :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->university != 'NULL')
                                                                {{ Auth::user()->userprofile->university }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Subject :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->subject != 'NULL')
                                                                {{ Auth::user()->userprofile->subject }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Profession :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->profession != 'NULL')
                                                                {{ Auth::user()->userprofile->profession }}
                                                            @else
                                                                Not Specified
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Annual Income :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->annual_income != 'NULL')
                                                                    {{ Auth::user()->userprofile->annual_income }}
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

                                                                @if (Auth::user()->userprofile->fathers_occupation != 'NULL')
                                                                    {{ Auth::user()->userprofile->fathers_occupation }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">Mother's Occupation :</td>
                                                            <td class="day_value">
                                                                @if (Auth::user()->userprofile->mothers_occupation != 'NULL')
                                                                    {{ Auth::user()->userprofile->mothers_occupation }}
                                                                @else
                                                                    Not Specified
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">No. of Brothers :</td>
                                                            <td class="day_value closed"><span>
                                                                    @if (Auth::user()->userprofile->no_of_brother != 'NULL')
                                                                        {{ Auth::user()->userprofile->no_of_brother }}
                                                                    @else
                                                                        Not Specified
                                                                    @endif
                                                                </span></td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">No. of Sisters :</td>
                                                            <td class="day_value closed"><span>
                                                                    @if (Auth::user()->userprofile->no_of_sister != 'NULL')
                                                                        {{ Auth::user()->userprofile->no_of_sister }}
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
                                                            @if (Auth::user()->userprofile->from_age != 'NULL' && Auth::user()->userprofile->to_age != 'NULL')
                                                                {{ Auth::user()->userprofile->from_age }} to
                                                                {{ Auth::user()->userprofile->to_age }}
                                                            @else
                                                                Doesn't matter
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Marital Status :</td>
                                                        <td class="day_value">
                                                            @if (Auth::user()->userprofile->p_status != 'NULL')
                                                                {{ Auth::user()->userprofile->p_status }}
                                                            @else
                                                                Doesn't matter
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day_label">Religion :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->p_religion != 'NULL')
                                                                    {{ Auth::user()->userprofile->p_religion }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Country :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->p_country != 'NULL')
                                                                    {{ Auth::user()->userprofile->p_country }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">State/District :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->p_state != 'NULL')
                                                                    {{ Auth::user()->userprofile->p_state }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>


                                                    <tr class="opened">
                                                        <td class="day_label">Profession :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->p_profession != 'NULL')
                                                                    {{ Auth::user()->userprofile->p_profession }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Gender :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->p_gender != 'NULL')
                                                                    {{ Auth::user()->userprofile->p_gender }}
                                                                @else
                                                                    Doesn't matter
                                                                @endif
                                                            </span></td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Comment about Partner :</td>
                                                        <td class="day_value closed"><span>
                                                                @if (Auth::user()->userprofile->comment != 'NULL')
                                                                    {{ Auth::user()->userprofile->comment }}
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

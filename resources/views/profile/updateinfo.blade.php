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

                <form method="post" action="{{ route('addinfo.store') }}" enctype="multipart/form-data">

                
                @csrf
                    <div class="col-sm-6 login_left">


                        <div class="form-group">
                            <label for="b_date">Birth Date</label>
                            <input type="date" id="b_date" name="b_date" class="form-text"
                                value={{ Auth::user()->userprofile->b_date }}>
                            @error('b_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="edit-pass">Address </span></label>
                        <div class="age_grid">
                            <div class="col-sm-5 form_box">
                                <div class="select-block1">
                                    <label for="religion22">Country </span></label>
                                    {{-- <select id="country" name="country"   autocomplete="b_date"> --}}

                                    <select onchange="print_state('state',this.selectedIndex);" id="country" name="country">
                                    </select>
                                    {{-- @error('b_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

					  </select> --}}
                                </div>
                            </div>
                            <div class="col-sm-6 form_box2">
                                <div class="select-block1">
                                    <label for="religion">State/City </span></label>
                                    <select name="state" id="state"></select>
                                    {{-- <select id="state" name="state"> --}}
                                    {{-- <option value="">State/Division</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option> --}}
                                    {{-- @error('b_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

					  </select> --}}
                                </div>
                            </div>
                            <div class="col-sm-1 form_box1">
                                <div class="select-block1">
                                    {{-- <label for="religion">City </span></label> --}}
                                    {{-- <select id="city" name="city" value={{ Auth::user()->userprofile->city }}>
                        <option value="">City</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Gazipur">Gazipur</option>

                          @error('b_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

					  </select> --}}
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <br>
                        <div class="age_grid">
                            <div class="col-sm-4 form_box">
                                <div class="select-block1">
                                    <label for="religion">Religion </span></label>
                                    <select id="religion" name="religion" value={{ Auth::user()->userprofile->religion }}>
                                        <option value="{{ Auth::user()->userprofile->religion }}">
                                            @if (Auth::user()->userprofile->religion)
                                                {{ Auth::user()->userprofile->religion }}
                                            @else
                                                select
                                            @endif
                                        </option>
                                        <option value="Muslims">Muslims</option>
                                        <option value="Christians">Christians</option>
                                        <option value="Hindus">Hindus</option>
                                        <option value="Buddhists">Buddhists</option>
                                        <option value="rreligious and atheist">Irreligious and atheist</option>
                                        <option value="Sikhism">Sikhism</option>
                                        <option value="Other">Other</option>
                                        {{-- @error('religion')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror --}}

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 form_box2">
                                <div class="select-block1">
                                    <label for="status">Status </span></label>
                                    <select id="status" name="status" value={{ Auth::user()->userprofile->status }}>
                                        <option value="{{ Auth::user()->userprofile->status }}">
                                            @if (Auth::user()->userprofile->status)
                                                {{ Auth::user()->userprofile->status }}
                                            @else
                                                select
                                            @endif
                                        </option>
                                        <option value="Single">Single</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 form_box1">
                                <div class="select-block1">
                                    <label for="profession">Professsion </span></label>
                                    <select id="profession" name="profession"
                                        value={{ Auth::user()->userprofile->profession }} autocomplete="profession">
                                        <option value="{{ Auth::user()->userprofile->profession }}">
                                            @if (Auth::user()->userprofile->profession)
                                                {{ Auth::user()->userprofile->profession }}
                                            @else
                                                select
                                            @endif
                                        </option>
                                        <option value="Administrative / Secretarial / Clerical">Administrative / Secretarial
                                            / Clerical</option>
                                        <option value="Construction / Trades">Construction / Trades</option>
                                        <option value="Entertainment / Media">Entertainment / Media</option>
                                        <option value="Finance / Banking / Real Estate">Finance / Banking / Real Estate
                                        </option>
                                        <option value="IT / Communications">IT / Communications</option>
                                        <option value="Medical / Dental / Veterinary">Medical / Dental / Veterinary</option>
                                        <option value="No occupation / Stay at home">No occupation / Stay at home</option>
                                        <option value="Retail / Food services">Retail / Food services</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="Technical / Science / Engineering">Technical / Science / Engineering
                                        </option>
                                        <option value="Unemployed">Unemployed</option>
                                        <option value="Advertising / Media">Advertising / Media</option>
                                        <option value="Domestic Helper">Domestic Helper</option>
                                        <option value="Executive / Management / HR">Executive / Management / HR</option>
                                        <option value="Fire / law enforcement / security">Fire / law enforcement / security
                                        </option>
                                        <option value="Laborer / Manufacturing">Laborer / Manufacturing</option>
                                        <option value="Military">Military</option>
                                        <option value="Non-profit / clergy / social services">Non-profit / clergy / social
                                            services</option>
                                        <option value="Retired">Retired</option>
                                        <option value="Sports / recreation">Sports / recreation</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Artistic / Creative / Performance">Artistic / Creative / Performance
                                        </option>
                                        <option value="Education / Academic">Education / Academic</option>
                                        <option value="Farming / Agriculture">Farming / Agriculture</option>
                                        <option value="Hair Dresser / Personal Grooming">Hair Dresser / Personal Grooming
                                        </option>
                                        <option value="Legal">Legal</option>
                                        <option value="Nanny / Child care">Nanny / Child care</option>
                                        <option value="Political / Govt / Civil Service">Political / Govt / Civil Service
                                        </option>
                                        <option value="Sales / Marketing">Sales / Marketing</option>
                                        <option value="Student">Student</option>
                                        <option value="Travel / Hospitality">Travel / Hospitality</option>
                                        <option value="Other">Other</option>

                                        @error('profession')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="age_grid">
                            <div class="col-sm-4 form_box">
                                <div class="select-block1">
                                    <label for="religion">Gender </span></label>
                                    <select id="gender" name="gender" value={{ Auth::user()->userprofile->gender }}>
                                        <option value="{{ Auth::user()->userprofile->gender }}">
                                            @if (Auth::user()->userprofile->gender)
                                                {{ Auth::user()->userprofile->gender }}
                                            @else
                                                select
                                            @endif
                                        </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>

                                        {{-- @error('religion')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror --}}

                                    </select>
                                </div>
                            </div>


                            <div class="clearfix"> </div>
                        </div>
                        <br>
                        <label for="education">Education<span class="form-required"></span></label>

                        <div class="form-group">
                            <label for="h_edu">Highest Education </label>
                            <input type="text" id="h_edu" name="h_edu" class="form-text "
                                value="{{ Auth::user()->userprofile->h_edu }}">

                        </div>
                        <div class="form-group">
                            <label for="school">School </label>
                            <input type="text" id="school" name="school" class="form-text "
                                value="{{ Auth::user()->userprofile->school }}" autocomplete="school">

                        </div>
                        <div class="form-group">
                            <label for="college">College </label>
                            <input type="text" id="college" name="college"
                                class="form-text @error('college') is-invalid @enderror"
                                value="{{ Auth::user()->userprofile->college }}" autocomplete="college">
                            @error('college')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="university">University </label>
                            <input type="text" id="university" name="university"
                                class="form-text @error('university') is-invalid @enderror"
                                value="{{ Auth::user()->userprofile->university }}" autocomplete="university">
                            @error('university')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject </label>
                            <input type="text" id="subject" name="subject"
                                class="form-text @error('subject') is-invalid @enderror"
                                value="{{ Auth::user()->userprofile->subject }}" autocomplete="subject">
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="height">Height </label>
                            <input type="text" id="height" name="height" class="form-text "
                                value="{{ Auth::user()->userprofile->height }}">
                            @error('height')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" id="phone_number" name="phone_number"
                                class="form-text @error('phone_number') is-invalid @enderror"
                                value="{{ Auth::user()->userprofile->phone_number }}" autocomplete="phone_number">
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="text" id="weight" name="weight"
                                class="form-text @error('weight') is-invalid @enderror"
                                value="{{ Auth::user()->userprofile->weight }}" autocomplete="weight">
                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="age_grid">
                            <div class="col-sm-4 form_box">
                                <div class="select-block1">
                                    <label for="blood_group">Blood Group :</span></label>
                                    <select id="blood_group" name="blood_group"
                                        value="{{ Auth::user()->userprofile->blood_group }}" autocomplete="blood_group">
                                        <option value="{{ Auth::user()->userprofile->blood_group }}">

                                            @if (Auth::user()->userprofile->blood_group)
                                                {{ Auth::user()->userprofile->blood_group }}
                                            @else
                                                select
                                            @endif


                                        </option>
                                        <option value="A+">A+</option>
                                        <option value="O+">O+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="A-">A-</option>
                                        <option value="O-">O-</option>
                                        <option value="B-">B-</option>
                                        <option value="AB-">AB-</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 form_box2">
                                <div class="select-block1">
                                    <label for="drink">Drink(Alcohol) :</span></label>
                                    <select id="drink" name="drink" value={{ Auth::user()->userprofile->drink }}>
                                        <option value="{{ Auth::user()->userprofile->drink }}">
                                            @if (Auth::user()->userprofile->drink)
                                                {{ Auth::user()->userprofile->drink }}
                                            @else
                                                select
                                            @endif
                                        </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 form_box1">
                                <div class="select-block1">
                                    <label for="smoke">Smoke :</span></label>
                                    <select id="smoke" name="smoke" value={{ Auth::user()->userprofile->smoke }}>

                                        <option value="{{ Auth::user()->userprofile->smoke }}">
                                            @if (Auth::user()->userprofile->smoke)
                                                {{ Auth::user()->userprofile->smoke }}
                                            @else
                                                select
                                            @endif
                                        </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="form-group">
                            <label for="created_by">Profile Created By </label>
                            <input type="text" id="created_by" name="created_by"
                                class="form-text @error('created_by') is-invalid @enderror"
                                value="{{ Auth::user()->userprofile->created_by }}" autocomplete="created_by">
                            @error('created_by')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="blur">Blur Image</label>
                            <div class="col-md-9">
                                <input type="hidden" checked value="0" name="blur" />
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" {{ Auth::user()->userprofile->blur ? 'checked' : null }} value="1"
                                            name="blur" />
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>



                    </div>


            </div>
            <div class="col-sm-6">

                <label for="edit-name">Image</label><br>
                <div class="custom-file" style="padding: 5px 0px 10px 0px">

                    <label class="custom-file-label" for="customFile">Select file</label>
                    <input type="file" class="custom-file-input" id="chooseFile" name="imagePath">
                    <input type="hidden" class="custom-file-input" value="{{ asset('userImage/' . Auth::user()->userprofile->imagePath) }}" id="chooseFile" name="imagePathOld">

                </div>

                <div>
                    <img src="{{ asset('userImage/' . Auth::user()->userprofile->imagePath) }}"
                         alt="" height="110px" width="110px">
                       
                </div>

                <label style="font-weight: 100 !important;padding-top: 20px;" for="edit-name">National ID
                    Card/Passport/Driving Lisence for varification</label><br>
                <div class="custom-file" style="padding: 5px 0px 10px 0px">

                    <label class="custom-file-label" for="customFile">Select file</label><br />
                    <select name="varification_type" id="varification"
                        style="border: 1px solid; padding: 10px;font-size: 16px; margin-bottom: 10px;">
                        <option value="{{ Auth::user()->userprofile->varification_type }}">
                            @if (Auth::user()->userprofile->varification_type)
                                {{ Auth::user()->userprofile->varification_type }}
                            @else
                                select
                            @endif
                        </option>
                        <option value="nid">National ID Card</option>
                        <option value="passport">Passport</option>
                        <option value="driving_lisence">Driving lisence</option>

                    </select>
                    <input type="file" class="custom-file-input" id="chooseFile"
                        value="{{ Auth::user()->userprofile->varification_doc }}" name="varification_doc">
                    <label style="color:red;">Note* : Image Must Be Jpg,png or jpeg  {{Auth::user()->id;}}</label>

                </div>
                <div>
                    <img src="{{ asset('public/varification_doc/'. Auth::user()->userprofile->varification_doc) }}" alt=""
                        height="110px" width="110px">

                </div>
                <div class="form-group">
                    <label for="place_of_birth">Place Of Birth :</label>
                    <input type="text" id="place_of_birth" name="place_of_birth" class="form-text "
                        value="{{ Auth::user()->userprofile->place_of_birth }}">
                </div>
                <div class="form-group">
                    <label for="annual_income">Annual Income :</label>
                    <input type="text" id="annual_income" name="annual_income" class="form-text "
                        value={{ Auth::user()->userprofile->annual_income }}>
                </div>

                <div class="form-group">
                    <label for="fathers_occupation">Father's Occupation :</label>
                    <input type="text" id="fathers_occupation" name="fathers_occupation" class="form-text "
                        value="{{ Auth::user()->userprofile->fathers_occupation }}">
                </div>
                <div class="form-group">
                    <label for="mothers_occupation">Mother's Occupation :</label>
                    <input type="text" id="mothers_occupation" name="mothers_occupation" class="form-text "
                        value="{{ Auth::user()->userprofile->mothers_occupation }}">
                </div>
                <div class="form-group">
                    <label for="no_of_brother">No. Of Brothers :</label>
                    <input type="text" id="no_of_brother" name="no_of_brother" class="form-text "
                        value="{{ Auth::user()->userprofile->no_of_brother }}">
                </div>
                <div class="form-group">
                    <label for="no_of_sister">No. Of Sisters :</label>
                    <input type="text" id="no_of_sister" name="no_of_sister" class="form-text "
                        value="{{ Auth::user()->userprofile->no_of_sister }}">
                </div>




                <div class="age_select" style="margin-top: 20px">
                    <label for="edit-name">Partner Preference :</label><br>
                    <label for="edit-pass">Address </label>
                    <div class="age_grid">
                        <div class="col-sm-6 form_box">
                            <div class="select-block1">
                                <label for="religion">Country </span></label>
                                {{-- <select id="p_country" name="p_country" value={{ Auth::user()->userprofile->p_country }}>
                            <option value="">Country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="India">India</option>
                            <option value="France">France</option>
                            <option value="United States">United States</option>
                            <option value="China">China</option>
                            <option value="India">India</option>
                            <option value="Spain">Spain</option>
                            <option value="Italy">Italy</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Germany">Germany</option>
                            <option value="Malaysia">Malaysia</option>

                        </select> --}}
                                <select onchange="print_state('p_state',this.selectedIndex);" id="p_country"
                                    name="p_country"></select>
                            </div>
                        </div>
                        <div class="col-sm-5 form_box2">
                            <div class="select-block1">
                                <label for="religion">State/City </span></label>
                                <select name="p_state" id="p_state"></select>
                                {{-- <select id="p_state" name="p_state" value={{ Auth::user()->userprofile->p_state }}>
                            <option value="">State/Division</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option>

                        </select> --}}
                            </div>
                        </div>
                        <div class="col-sm-1 form_box1">
                            <div class="select-block1">
                                {{-- <select id="p_city" name="p_city" value={{ Auth::user()->userprofile->p_city }}>
                            <option value="">City</option>
                         <option value="Chittagong">Chittagong</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Gazipur">Gazipur</option>


                        </select> --}}
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>


                <div class="age_select" style="padding: 10px 0px">

                    <div class="age_grid">
                        <div class="col-sm-4 form_box">
                            <label for="edit-pass">Religion</label>
                            <div class="select-block1">
                                <select id="p_religion" name="p_religion"
                                    value={{ Auth::user()->userprofile->p_religion }}>
                                    <option value="{{ Auth::user()->userprofile->p_religion }}">
                                        @if (Auth::user()->userprofile->p_religion)
                                            {{ Auth::user()->userprofile->p_religion }}
                                        @else
                                            select
                                        @endif
                                    </option>
                                    <option value="Muslims">Muslims</option>
                                    <option value="Christians">Christians</option>
                                    <option value="Hindus">Hindus</option>
                                    <option value="Buddhists">Buddhists</option>
                                    <option value="rreligious and atheist">Irreligious and atheist</option>
                                    <option value="Sikhism">Sikhism</option>
                                    <option value="Other">Other</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 form_box2">
                            <label for="edit-pass">Status</label>
                            <div class="select-block1">
                                <select id="p_status" name="p_status" value={{ Auth::user()->userprofile->p_status }}>
                                    <option value="{{ Auth::user()->userprofile->p_status }}">
                                        @if (Auth::user()->userprofile->p_status)
                                            {{ Auth::user()->userprofile->p_status }}
                                        @else
                                            select
                                        @endif
                                    </option>
                                    <option value="Single">Single</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 form_box1">
                            <label for="edit-pass">Profession</label>
                            <div class="select-block1">
                                <select id="p_profession" name="p_profession"
                                    value={{ Auth::user()->userprofile->p_profession }}>
                                    <option value="{{ Auth::user()->userprofile->p_profession }}">
                                        @if (Auth::user()->userprofile->p_profession)
                                            {{ Auth::user()->userprofile->p_profession }}
                                        @else
                                            select
                                        @endif
                                    </option>
                                    <option value="Administrative / Secretarial / Clerical">Administrative / Secretarial /
                                        Clerical</option>
                                    <option value="Construction / Trades">Construction / Trades</option>
                                    <option value="Entertainment / Media">Entertainment / Media</option>
                                    <option value="Finance / Banking / Real Estate">Finance / Banking / Real Estate</option>
                                    <option value="IT / Communications">IT / Communications</option>
                                    <option value="Medical / Dental / Veterinary">Medical / Dental / Veterinary</option>
                                    <option value="No occupation / Stay at home">No occupation / Stay at home</option>
                                    <option value="Retail / Food services">Retail / Food services</option>
                                    <option value="Self Employed">Self Employed</option>
                                    <option value="Technical / Science / Engineering">Technical / Science / Engineering
                                    </option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Advertising / Media">Advertising / Media</option>
                                    <option value="Domestic Helper">Domestic Helper</option>
                                    <option value="Executive / Management / HR">Executive / Management / HR</option>
                                    <option value="Fire / law enforcement / security">Fire / law enforcement / security
                                    </option>
                                    <option value="Laborer / Manufacturing">Laborer / Manufacturing</option>
                                    <option value="Military">Military</option>
                                    <option value="Non-profit / clergy / social services">Non-profit / clergy / social
                                        services</option>
                                    <option value="Retired">Retired</option>
                                    <option value="Sports / recreation">Sports / recreation</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Artistic / Creative / Performance">Artistic / Creative / Performance
                                    </option>
                                    <option value="Education / Academic">Education / Academic</option>
                                    <option value="Farming / Agriculture">Farming / Agriculture</option>
                                    <option value="Hair Dresser / Personal Grooming">Hair Dresser / Personal Grooming
                                    </option>
                                    <option value="Legal">Legal</option>
                                    <option value="Nanny / Child care">Nanny / Child care</option>
                                    <option value="Political / Govt / Civil Service">Political / Govt / Civil Service
                                    </option>
                                    <option value="Sales / Marketing">Sales / Marketing</option>
                                    <option value="Student">Student</option>
                                    <option value="Travel / Hospitality">Travel / Hospitality</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <div class="row" style="padding: 5px 0px">
                    <div class="col-md-3">
                        <label>Seeking:</label>

                    </div>
                    <div class="col-md-3">
                        <select id="p_gender" name="p_gender" value="{{ Auth::user()->userprofile->no_of_sister }}">


                            <option value="{{ Auth::user()->userprofile->p_gender }}">
                                @if (Auth::user()->userprofile->p_gender)
                                    {{ Auth::user()->userprofile->p_gender }}
                                @else
                                    select
                                @endif
                            </option>

                            <option value="Male">Male</option>

                            <option value="Female">Female</option>
                            <option value="Other">Other</option>

                        </select>
                    </div>



                </div>

                <div class="row">

                    <div class="col-md-2">
                        <label>Age:</label>
                    </div>

                    <div class="col-md-2">

                        <label>From:</label>
                        <select name="from_age" value="{{ Auth::user()->userprofile->from_age }}">

                            <option value="50" selected>{{ Auth::user()->userprofile->from_age }}</option>

                            <option value="18">18</option>

                            <option value="19">19</option>

                            <option value="20">20</option>

                            <option value="21">21</option>

                            <option value="22">22</option>

                            <option value="23">23</option>

                            <option value="24">24</option>

                            <option value="25">25</option>

                            <option value="26">26</option>

                            <option value="27">27</option>

                            <option value="28">28</option>

                            <option value="29">29</option>

                            <option value="30">30</option>

                            <option value="31">31</option>

                            <option value="32">32</option>

                            <option value="33">33</option>

                            <option value="34">34</option>

                            <option value="35">35</option>

                            <option value="36">36</option>

                            <option value="37">37</option>

                            <option value="38">38</option>

                            <option value="39">39</option>

                            <option value="40">40</option>

                            <option value="41">41</option>

                            <option value="42">42</option>

                            <option value="43">43</option>

                            <option value="44">44</option>

                            <option value="45">45</option>

                            <option value="46">46</option>

                            <option value="47">47</option>

                            <option value="48">48</option>

                            <option value="49">49</option>

                            <option value="50">50</option>

                            <option value="51">51</option>

                            <option value="52">52</option>

                            <option value="53">53</option>

                            <option value="54">54</option>

                            <option value="55">55</option>

                            <option value="56">56</option>

                            <option value="57">57</option>

                            <option value="58">58</option>

                            <option value="59">59</option>

                            <option value="60">60</option>

                            <option value="61">61</option>

                            <option value="62">62</option>

                            <option value="63">63</option>

                            <option value="64">64</option>

                            <option value="65">65</option>

                            <option value="66">66</option>

                            <option value="67">67</option>

                            <option value="68">68</option>

                            <option value="69">69</option>

                            <option value="70">70</option>

                            <option value="71">71</option>

                            <option value="72">72</option>

                            <option value="73">73</option>

                            <option value="74">74</option>

                            <option value="75">75</option>

                            <option value="76">76</option>

                            <option value="77">77</option>

                            <option value="78">78</option>

                            <option value="79">79</option>

                            <option value="80">80</option>

                            <option value="81">81</option>

                            <option value="82">82</option>

                            <option value="83">83</option>

                            <option value="84">84</option>

                            <option value="85">85</option>

                            <option value="86">86</option>

                            <option value="87">87</option>

                            <option value="88">88</option>

                            <option value="89">89</option>

                            <option value="90">90</option>

                            <option value="91">91</option>

                            <option value="92">92</option>

                            <option value="93">93</option>

                            <option value="94">94</option>

                            <option value="95">95</option>

                            <option value="96">96</option>

                            <option value="97">97</option>

                            <option value="98">98</option>

                            <option value="99">99</option>

                        </select>
                    </div>
                    <div class="col-md-2">

                        <label>To:</label>
                        <select id="to_age" name="to_age" value="{{ Auth::user()->userprofile->to_age }}">

                            <option value="{{ Auth::user()->userprofile->to_age }}" selected>{{ Auth::user()->userprofile->to_age }}</option>

                            <option value="18">18</option>

                            <option value="19">19</option>

                            <option value="20">20</option>

                            <option value="21">21</option>

                            <option value="22">22</option>

                            <option value="23">23</option>

                            <option value="24">24</option>

                            <option value="25">25</option>

                            <option value="26">26</option>

                            <option value="27">27</option>

                            <option value="28">28</option>

                            <option value="29">29</option>

                            <option value="30">30</option>

                            <option value="31">31</option>

                            <option value="32">32</option>

                            <option value="33">33</option>

                            <option value="34">34</option>

                            <option value="35">35</option>

                            <option value="36">36</option>

                            <option value="37">37</option>

                            <option value="38">38</option>

                            <option value="39">39</option>

                            <option value="40">40</option>

                            <option value="41">41</option>

                            <option value="42">42</option>

                            <option value="43">43</option>

                            <option value="44">44</option>

                            <option value="45">45</option>

                            <option value="46">46</option>

                            <option value="47">47</option>

                            <option value="48">48</option>

                            <option value="49">49</option>

                            <option value="50">50</option>

                            <option value="51">51</option>

                            <option value="52">52</option>

                            <option value="53">53</option>

                            <option value="54">54</option>

                            <option value="55">55</option>

                            <option value="56">56</option>

                            <option value="57">57</option>

                            <option value="58">58</option>

                            <option value="59">59</option>

                            <option value="60">60</option>

                            <option value="61">61</option>

                            <option value="62">62</option>

                            <option value="63">63</option>

                            <option value="64">64</option>

                            <option value="65">65</option>

                            <option value="66">66</option>

                            <option value="67">67</option>

                            <option value="68">68</option>

                            <option value="69">69</option>

                            <option value="70">70</option>

                            <option value="71">71</option>

                            <option value="72">72</option>

                            <option value="73">73</option>

                            <option value="74">74</option>

                            <option value="75">75</option>

                            <option value="76">76</option>

                            <option value="77">77</option>

                            <option value="78">78</option>

                            <option value="79">79</option>

                            <option value="80">80</option>

                            <option value="81">81</option>

                            <option value="82">82</option>

                            <option value="83">83</option>

                            <option value="84">84</option>

                            <option value="85">85</option>

                            <option value="86">86</option>

                            <option value="87">87</option>

                            <option value="88">88</option>

                            <option value="89">89</option>

                            <option value="90">90</option>

                            <option value="91">91</option>

                            <option value="92">92</option>

                            <option value="93">93</option>

                            <option value="94">94</option>

                            <option value="95">95</option>

                            <option value="96">96</option>

                            <option value="97">97</option>

                            <option value="98">98</option>

                            <option value="99">99</option>
                        </select>
                    </div>


                </div>
                <br>

                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" rows="3" name="comment"
                        value="{{ Auth::user()->userprofile->comment }}">{{ Auth::user()->userprofile->comment }}</textarea>
                </div>





                <br><br><br>


                {{-- <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div> --}}

                {{-- <button class="btn_1" ><a href="{{ route("upgrade") }}" style="color: blanchedalmond">
                Choose the Membership Plan</a></button></button> --}}
                <div class="form-actions">
                    <input type="submit" id="edit-submit" name="op" value="Save" class="btn_1 submit">
                </div>

                {{-- <p style="padding-top: 10px">Already a member? <a href="{{ route("register") }}" style="color: blue">Login</a></p> --}}

            </div>




        </div>
        </form>
        <div class="clearfix"> </div>
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

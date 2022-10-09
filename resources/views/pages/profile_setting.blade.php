@extends('layouts.main')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
           
            <ul class="nav nav-fill" style="padding: 10px;">
                <a class="nav-item" href="{{ route('email') }}">Email Address</a>&emsp;
                <a class="nav-item" href="{{ route('password') }}">Password</a>&emsp;
                <a class="nav-item" href="{{ route('profile_setting') }}">Profile Settings</a>&emsp;
                <a class="nav-item" href="{{ route("female_members") }}">Find Matches</a>&emsp;
            </ul>
            <hr class="mb-5">
           <h2>Profile Settings</h2> 
<p>Update your profile display options and localization.
</p>
            <div class="row"   style="margin-top:15px">
                <!--col-->
                <div class="col-md-5 offset-md-2">
                    <span class="anchor" id="formComplex"></span>
                   
                    <h3 style="color: #428bca">Online Options:</h3>
                    <hr class="my-5">
                   
                    <!-- form complex example -->
                    <div class="form-row mt-4">
                        
                        <div class="col-md-6 pb-3">
                            <label for="exampleAccount" style="padding-bottom: 6px">Online Status:</label>
                            <div class="form-group small">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Show me as online
                                    </label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Show me as busy
                                    </label>
                                </div>
                               
                            </div>


                            <br>
                            <label for="exampleAccount" style="padding-bottom: 6px">  Display Profile: </label>
                        <div class="form-group small">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Display my profile to users
                                </label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Hide my profile from users
                                </label>
                            </div>
                           
                        </div>
                        </div>
                        
                        
                        
                        
                    </div>

                </div>
              <!--/col-->
                <!--/col-->
                <div class="col-md-6 offset-md-2">
                    <span class="anchor" id="formUserEdit"></span>
                   

                    <!-- form user info -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0" style="color: #428bca">Localization:</h3>
                            <hr class="my-5">
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                           
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0">
                                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                            <option value="Alaska">(GMT-09:00) Alaska</option>
                                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                            <option value="Arizona">(GMT-07:00) Arizona</option>
                                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                            <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                            <option value="Bangladesh">(GMT-05:00) Bangladesh</option>
                                            
                                        </select>
                                        <p  style="font-size:13px;color:#999;">
                                            (Filter time zones by country)
                                        </p>
                                    </div>
                                    
                                   
                                </div>
                               
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->

                </div>
                <!--/col-->
               
                
               

            </div>
            <!--/row-->

       

        </div>
        <!--/col-->
    </div>
    <!--/row-->
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg float-right" style="color: #fff;background-color: #8fcc5d;border-color: #28c03c;margin-top: 10px;font-size:15px">Upgrade now to hide your profile from <br> other users and browse anonymously</button>
    </div>
     
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg float-right" style="color: #fff;background-color: #428bca;border-color: #357ebd;margin-top: 10px">Save</button>
    </div>
    <br><br>
    <h3 style="color: #428bca">Switch Off Profile</h3>
     

    <p >
        To switch your profile off on Muslima.com please <a href={{route("switch_off")}}>click here
    </p>
</div>





                    
                    
<!--/container-->

<script>
    // validation example for Login form
$("#btnLogin").click(function(event) {
    
    var form = $("#loginForm");
    
    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    
    // if validation passed form
    // would post to the server here
    
    form.addClass('was-validated');
});
</script>

@endsection
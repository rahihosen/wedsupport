@extends('layouts.main')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
           
            <ul class="nav nav-fill" style="padding: 10px;">
                <a class="nav-item" href="{{ route('email') }}">Email Address</a>&emsp;
                <a class="nav-item" href="{{ route('password') }}">Password</a>&emsp;
                <a class="nav-item" href="{{ route('profile_setting') }}">Profile Settings</a>&emsp;
                <a class="nav-item" href="{{ route('billing') }}">Billing</a>&emsp;
                <a class="nav-item" href="{{ route('notification') }}">Notifications</a>&emsp;
              
                
            </ul>
            <hr class="mb-5">
            <div class="row">
                <div class="col-md-4 offset-md-2"></div>
                <div class="col-md-5 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                   

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">We are sorry to see you go!</h3>
                            <p style="padding:5px 0px 10px;text-align:center">To switch off your membership at Muslima, please enter your password below:</p>
                            
                            
                            <form class="form" role="form" autocomplete="off">
                              
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                                   <a href="{{ route('forget_pass') }}">Forget Password?</a>                               
                                </div>
                                  <div class="form-group">
                                    <label>Card Number</label>
                                    <select class="form-control" name="cc_exp_mo" size="0">
                                        <option selected>Please select</option>
                                        <option value="02">Issue witite</option>
                                        <option value="03">Issue with member</option>
                                        <option value="04">I found someone</option>
                                        <option value="05">Prefere other site</option>
                                        <option value="06">Other</option>
                                       
                                    </select>
                                </div>
                             
                                <div class="form-group row">
                                   <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block" style="color: #fff;background-color: #428bca;border-color: #357ebd;margin-top: 10px">Switch off profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card cc payment -->

                </div>
                <!--/col-->
               

            </div>
            <!--/row-->

        <br><br><br><br>

        </div>
        <!--/col-->
    </div>
    <!--/row-->
    <hr>
    
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
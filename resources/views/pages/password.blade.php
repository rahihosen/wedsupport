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
            <h2>Reset your password</h2>
            <p>To help keep your account secure we recommend that you routinely change your password.</p>
            <p style="font-weight: bold">Important: For extra security ensure that your new password is NOT the same as your email password.</p>
          <br>
                <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formChangePassword"></span>

                    <!-- form card change password -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0" style="color: #428bca">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputPasswordOld">Current Password</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" required="">
                                    <a href="{{ route('forget_pass') }}">Forget Password</a>
                                </div>
                               
                                  
                              
                                <div class="form-group">
                                    <label for="inputPasswordNew" style="padding-top: 5px">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" required="">
                                    <p  style="font-size:13px;color:#999;">
                                        The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                    </p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify" style="padding-top: 5px">Verify</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                                    <p  style="font-size:13px;color:#999;">
                                        To confirm, type the new password again.
                                    </p>
                                </div>
                                    
                                   
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" style="color: #fff;background-color: #428bca;border-color: #357ebd;margin-top: 10px">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card change password -->

                </div>
                {{-- <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formResetPassword"></span>
                    <hr class="mb-5"> --}}

                    <!-- form card reset password -->
                    {{-- <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Password Reset</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputResetPasswordEmail">Email</label>
                                    <input type="email" class="form-control" id="inputResetPasswordEmail" required="">
                                    <span id="helpResetPasswordEmail" class="form-text small text-muted">
                                            Password reset instructions will be sent to this email address.
                                        </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                    <!-- /form card reset password -->

    </div>
    <!--/row-->
   
</div>
<!--/container-->
</div>

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

<br><br><br>
@endsection
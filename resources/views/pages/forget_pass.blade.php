@extends('layouts.main')
@section('content')
<body>
<div class="container" style="padding: 20px">





  <div class="container py-5">
      <div class="row">
          <div class="col-md-12">
                  <div class="col-md-6 offset-md-3">
                      <span class="anchor" id="formResetPassword"></span>
                      <hr class="mb-5"> 
  
                      <!-- form card reset password -->
                      <div class="card card-outline-secondary">
                          <div class="card-header">
                              <h3 class="mb-0" style="color: #428bca">Password Reset</h3>
                          </div>
                          <div class="card-body">
                              <form class="form" role="form" autocomplete="off">
                                  <div class="form-group">
                                      <label for="inputResetPasswordEmail">Email</label>
                                      <input type="email" class="form-control" id="inputResetPasswordEmail" required="">
                                      
                                      <p  style="font-size:13px;color:#999;">
                                              Password reset instructions will be sent to this email address.
                                          </p>
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-success btn-lg float-right" style="color: #fff;background-color: #428bca;border-color: #357ebd;margin-top: 10px">Reset</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <!-- /form card reset password -->
  
      </div>
      <!--/row-->
     
  </div>
  <!--/container-->
  </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br><br><br>
  
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
  </body>
@endsection

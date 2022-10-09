@extends('layouts.main')
@section('content')

<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">UPGRADE</li>
     </ul>
   </div>
   <div style="text-align: center;border: 1px solid black;background: #c32643;padding-top: 10px;margin: 20px;color: white;"><h3>Choose Your Membership Plan</h3></div>
   
   
   <div class="col-md-3" >
	  <div class="pricing-table-grid">
		<h3>Free</h3><br><span class="month1"></span>
		<ul>
			<li><span>Basic</span></li>
			<li><a href="#"><i class="fa fa-eye icon_3"></i>Express Interest</a></li>
			<li><a href="#"><i class="fa fa-user icon_3"></i>Profile Highlight</a></li>
			<li><a href="#"><i class="fa fa-smile-o icon_3"></i>View Profile</a></li>
		</ul>
		<a class="btn_1" data-toggle="modal" data-target="#exampleModalCenter1" style="margin-left:50px">Upgrade</a>
	  </div>
      <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Basic</h5>

                </div>
                <div class="modal-body">
                    <p style="color: darkgray; "> <b> Please Enter your Information </b></p>
                    <hr>

                    {{-- <form class="" action="">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Bkash</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Nagad</label>
                          </div>
                          <div class="form-group ">
                            <label for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                          </div>
                          <div class="form-group ">
                            <label for="formGroupExampleInput2">Another label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                          </div>
                    </form> --}}
                    <form action="{{route('subscription.store')}}" method="POST">
                        @csrf
                        <fieldset class="form-group">
                            <div class="row">
                             
                              <div class="col-sm-8">
                                
                                {{-- <div class="form-check">
                                  <input class="form-check-input" type="radio" name="payment_method" id="gridRadios2" value="nagad">
                                  <label class="form-check-label" for="gridRadios2">
                                    Nagad
                                  </label>
                                </div> --}}
                                 <div class="form-check">
                                  <input class="form-check-input" type="radio" name="payment_method" id="gridRadios1" value="bkash" checked>
                                  <label class="form-check-label" for="gridRadios1">
                                    Free For 3 month
                                  </label>
                                </div>

                              </div>
                            </div>
                        </fieldset>
                        <input type="hidden" name="package_name" value="Basic">
                        <input type="hidden" name="amount" value="1100">
                        <input type="hidden" name="time" value="1">
                        <div class="form-group row">
                          <label for="bkash_or_nagad_num" class="col-sm-4 col-form-label">Mobile number</label>
                          <div class="col-sm-8">
                            <input type="tel" class="form-control" name="bkash_or_nagad_num" id="bkash_or_nagad_num" placeholder=" Number" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="transaction_id" class="col-sm-4 col-form-label">Your Name</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="transaction_id" id="transaction_id" placeholder="Name" required>
                          </div>
                        </div>


                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
            </div>
        </div>
	  <div id="small-dialog" class="mfp-hide">
			<div class="pop_up">
			 	<div class="payment-online-form-left">
					{{-- <form>
						<h4><span class="shipping"> </span>Shipping</h4>
						<ul>
							<li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
							<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
						</ul>
						<ul>
							<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
							<li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
						</ul>
						<ul>
							<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
							<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
							<div class="clearfix"> </div>
						</ul>
						<div class="clear"> </div>
					<ul class="payment-type">
						<h4><span class="payment"> </span> Payments</h4>
						<li>
							<span class="col_checkbox">
							<input id="3" class="css-checkbox1" type="checkbox">
							<label for="3" name="demo_lbl_1" class="css-label1"> </label>
							<a class="visa" href="#"> </a>
							</span>
						</li>
						<li>
							<span class="col_checkbox">
								<input id="4" class="css-checkbox2" type="checkbox">
								<label for="4" name="demo_lbl_2" class="css-label2"> </label>
								<a class="paypal" href="#"> </a>
							</span>
						</li>
						<div class="clearfix"> </div>
					</ul>
						<ul>
							<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
							<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
							<div class="clearfix"> </div>
						</ul>
						<ul>
							<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
							<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
							<div class="clearfix"> </div>
						</ul>
						<ul class="payment-sendbtns">
							<li><input type="reset" value="Cancel"></li>
							<li><input type="submit" value="Process order"></li>
						</ul>
						<div class="clearfix"> </div>
					</form> --}}
				</div>
  			</div>
		</div>
	  </div>
	  
	  
	  
	  <div class="col-md-3 ">
		<div class="pricing-table-grid">
		  <h3><span class="dollar">&#2547; &nbsp;</span>2999<br><span class="month1">2 Months</span></h3>
		  <ul>
			<li><span>Silver</span></li>
			<li><a href="#"><i class="fa fa-eye icon_3"></i>Express Interest</a></li>
			<li><a href="#"><i class="fa fa-user icon_3"></i>Profile Highlight</a></li>
			<li><a href="#"><i class="fa fa-smile-o icon_3"></i>View Profile</a></li>
			<li><a href="#"><i class="fa fa-lock icon_3"></i>Protect Photo</a></li>
			<li><a href="#"><i class="fa fa-smile-o icon_3"></i>Get SMS Alert</a></li>
		</ul>
		{{-- <a class="btn_1" data-toggle="modal" data-target="#exampleModalCenter2" style="margin-left:50px">Pay Now</a> --}}
    <a class="btn_1" href="{{ route('nagad.callback') }}"  style="margin-left:50px">Pay Now</a>
		</div>
	  </div>
       <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Silver</h5>

                    </div>
                    <div class="modal-body">
                        <p style="color: darkgray; "> <b> Please pay 2999 Tk .We accept Bkash.(Bkash number:017122222 ) </b></p>
                        <hr>


                        <form action="{{route('subscription.store')}}" method="POST">
                            @csrf
                            <fieldset class="form-group">
                                <div class="row">
                                <label class="col-form-label col-sm-4 pt-0">Payment Method</label>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="gridRadios1" value="bkash" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Bkash
                                    </label>
                                    </div>
                                    {{-- <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="gridRadios2" value="nagad">
                                    <label class="form-check-label" for="gridRadios2">
                                        Nagad
                                    </label>
                                    </div> --}}

                                </div>
                                </div>
                            </fieldset>
                            <input type="hidden" name="package_name" value="Silver">
                            <input type="hidden" name="amount" value="2999">
                            <input type="hidden" name="time" value="2">
                            <div class="form-group row">
                            <label for="bkash_or_nagad_num" class="col-sm-4 col-form-label">Bkash Number</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" name="bkash_or_nagad_num" id="bkash_or_nagad_num" placeholder="Bkash Number. eg.-017xxxxxxxx"  pattern="[0-9]{11}" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="transaction_id" class="col-sm-4 col-form-label">Transaction Id</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="transaction_id" id="transaction_id" placeholder="Bkash Transaction Id" required>
                            </div>
                            </div>


                            <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                </div>
            </div>
        </div>
	  <div class="col-md-3 ">
		<div class="pricing-table-grid">
			<h3><span class="dollar">&#2547; &nbsp;</span>3999<br><span class="month1">4 Months</span></h3>
			<ul>
				<li><span>Gold</span></li>

				<li><a href="#"><i class="fa fa-eye icon_3"></i>Express Interest</a></li>
				<li><a href="#"><i class="fa fa-user icon_3"></i>Profile Highlight</a></li>
				<li><a href="#"><i class="fa fa-smile-o icon_3"></i>View Profile</a></li>
				<li><a href="#"><i class="fa fa-lock icon_3"></i>Protect Photo</a></li>
				<li><a href="#"><i class="fa fa-smile-o icon_3"></i>Get SMS Alert</a></li>
		    </ul>
			<a class="btn_1" data-toggle="modal" data-target="#exampleModalCenter3" style="margin-left:50px">Pay Now</a>
		</div>
	  </div>
       <!-- Modal -->
       <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Gold</h5>

                </div>
                <div class="modal-body">
                    <p style="color: darkgray; "> <b> Please pay 3999 Tk .We accept Bkash.(Bkash number:017122222 ) </b></p>
                    <hr>


                    <form action="{{route('subscription.store')}}" method="POST">
                        @csrf
                        <fieldset class="form-group">
                            <div class="row">
                            <label class="col-form-label col-sm-4 pt-0">Payment Method</label>
                            <div class="col-sm-8">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="gridRadios1" value="bkash" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Bkash
                                </label>
                                </div>
                                {{-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="gridRadios2" value="nagad">
                                <label class="form-check-label" for="gridRadios2">
                                    Nagad
                                </label>
                                </div> --}}

                            </div>
                            </div>
                        </fieldset>
                        <input type="hidden" name="package_name" value="Gold">
                        <input type="hidden" name="amount" value="3999">
                        <input type="hidden" name="time" value="4">
                        <div class="form-group row">
                        <label for="bkash_or_nagad_num" class="col-sm-4 col-form-label">Bkash Number</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="bkash_or_nagad_num" id="bkash_or_nagad_num" placeholder="Bkash Number. eg.-017xxxxxxxx"  pattern="[0-9]{11}" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="transaction_id" class="col-sm-4 col-form-label">Transaction Id</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="transaction_id" id="transaction_id" placeholder="Bkash Transaction Id" required>
                        </div>
                        </div>


                        <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
	  <div class="col-md-3 pricing-table">
		<div class="pricing-table-grid">
			<h3><span class="dollar">&#2547; &nbsp;</span>4999<br><span class="month1">6 Months</span></h3>
			<ul>
				<li><span>Diamond</span></li>

				<li><a href="#"><i class="fa fa-eye icon_3"></i>Express Interest</a></li>
				<li><a href="#"><i class="fa fa-user icon_3"></i>Profile Highlight</a></li>
				<li><a href="#"><i class="fa fa-smile-o icon_3"></i>View Profile</a></li>
				<li><a href="#"><i class="fa fa-lock icon_3"></i>Protect Photo</a></li>
				<li><a href="#"><i class="fa fa-smile-o icon_3"></i>Get SMS Alert</a></li>
		    </ul>
			<a class="btn_1" data-toggle="modal" data-target="#exampleModalCenter4"  style="margin-left:50px">Pay Now</a>
		</div>
	  </div>
       <!-- Modal -->
       <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Diamond</h5>

                </div>
                <div class="modal-body">
                    <p style="color: darkgray; "> <b> Please pay 4999 Tk .We accept Bkash.(Bkash number:017122222 ) </b></p>
                    <hr>


                    <form action="{{route('subscription.store')}}" method="POST">
                        @csrf
                        <fieldset class="form-group">
                            <div class="row">
                            <label class="col-form-label col-sm-4 pt-0">Payment Method</label>
                            <div class="col-sm-8">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="gridRadios1" value="bkash" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Bkash
                                </label>
                                </div>
                                {{-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="gridRadios2" value="nagad">
                                <label class="form-check-label" for="gridRadios2">
                                    Nagad
                                </label>
                                </div> --}}

                            </div>
                            </div>
                        </fieldset>
                        <input type="hidden" name="package_name" value="Diamond">
                        <input type="hidden" name="amount" value="4999">
                        <input type="hidden" name="time" value="6">
                        <div class="form-group row">
                        <label for="bkash_or_nagad_num" class="col-sm-4 col-form-label">Bkash Number</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="bkash_or_nagad_num" id="bkash_or_nagad_num" placeholder="Bkash Number. eg.-017xxxxxxxx"  pattern="[0-9]{11}" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="transaction_id" class="col-sm-4 col-form-label">Transaction Id</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="transaction_id" id="transaction_id" placeholder="Bkash Transaction Id" required>
                        </div>
                        </div>


                        <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
	  <div class="clearfix"> </div>
    </div>
</div>


<br><br><br>

@endsection

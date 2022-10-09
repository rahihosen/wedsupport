
<?php $__env->startSection('content'); ?>

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

                    
                    <form action="<?php echo e(route('subscription.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <fieldset class="form-group">
                            <div class="row">
                             
                              <div class="col-sm-8">
                                
                                
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
                
            </div>
            </div>
        </div>
	  <div id="small-dialog" class="mfp-hide">
			<div class="pop_up">
			 	<div class="payment-online-form-left">
					
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
		
    <a class="btn_1" href="<?php echo e(route('nagad.callback')); ?>"  style="margin-left:50px">Pay Now</a>
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


                        <form action="<?php echo e(route('subscription.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
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


                    <form action="<?php echo e(route('subscription.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
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


                    <form action="<?php echo e(route('subscription.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
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
                
            </div>
        </div>
    </div>
	  <div class="clearfix"> </div>
    </div>
</div>


<br><br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wed\resources\views/pages/upgrade.blade.php ENDPATH**/ ?>
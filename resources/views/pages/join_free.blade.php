@extends('layouts.main')
@section('content')

<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="{{ route("index") }}"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page"><a href="{{ route('register') }}">Register as a Member</a></li>
        <li ><a href="{{ route('join_free') }}">Join Free</a></li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form>
	  	    <div class="form-group">
		      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="age_select">
		      <label for="edit-pass">Age <span class="form-required" title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select>
	                    <option value="">Date</option>
	                    <option value="">1</option>
	                    <option value="">2</option>
	                    <option value="">3</option>
	                    <option value="">4</option>
	                    <option value="">5</option>
	                    <option value="">6</option>
	                    <option value="">7</option>
	                    <option value="">8</option>
	                    <option value="">9</option>
	                    <option value="">10</option>
	                    <option value="">11</option>
	                    <option value="">12</option>
	                    <option value="">13</option>
	                    <option value="">14</option>
	                    <option value="">15</option>
	                    <option value="">16</option>
	                    <option value="">17</option>
	                    <option value="">18</option>
	                    <option value="">19</option>
	                    <option value="">20</option>
	                    <option value="">21</option>
	                    <option value="">22</option>
	                    <option value="">23</option>
	                    <option value="">24</option>
	                    <option value="">25</option>
	                    <option value="">26</option>
	                    <option value="">27</option>
	                    <option value="">28</option>
	                    <option value="">29</option>
	                    <option value="">30</option>
	                    <option value="">31</option>
                    </select>
                  </div>
            </div>
            <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                    <select>
	                    <option value="">Month</option>
	                    <option value="">January</option>
	                    <option value="">February</option>
	                    <option value="">March</option>
	                    <option value="">April</option>
	                    <option value="">May</option>
	                    <option value="">June</option>
	                    <option value="">July</option>
	                    <option value="">August</option>
	                    <option value="">September</option>
	                    <option value="">October</option>
	                    <option value="">November</option>
	                    <option value="">December</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-sm-4 form_box1">
                   <div class="select-block1">
                    <select>
	                    <option value="">Year</option>
	                    <option value="">1980</option>
	                    <option value="">1981</option>
	                    <option value="">1982</option>
	                    <option value="">1983</option>
	                    <option value="">1984</option>
	                    <option value="">1985</option>
	                    <option value="">1986</option>
	                    <option value="">1987</option>
	                    <option value="">1988</option>
	                    <option value="">1989</option>
	                    <option value="">1990</option>
	                    <option value="">1991</option>
	                    <option value="">1992</option>
	                    <option value="">1993</option>
	                    <option value="">1994</option>
	                    <option value="">1995</option>
	                    <option value="">1996</option>
	                    <option value="">1997</option>
	                    <option value="">1998</option>
	                    <option value="">1999</option>
	                    <option value="">2000</option>
	                    <option value="">2001</option>
	                    <option value="">2002</option>
	                    <option value="">2003</option>
	                    <option value="">2004</option>
	                    <option value="">2005</option>
	                    <option value="">2006</option>
	                    <option value="">2007</option>
	                    <option value="">2008</option>
	                    <option value="">2009</option>
	                    <option value="">2010</option>
	                    <option value="">2011</option>
	                    <option value="">2012</option>
	                    <option value="">2013</option>
	                    <option value="">2014</option>
	                    <option value="">2015</option>
                    </select>
                   </div>
                  </div>
                  <div class="clearfix"> </div>
                 </div>
              </div>
              <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="sex">Gender : </label>
                <div class="col-sm-5">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" checked=""> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio"> Female
				        </label>
	                </div>
                </div>
                
                <div class="clearfix"> </div>
             </div>
             <div class="custom-file" style="padding: 5px 0px 10px 0px">
                <label class="custom-file-label" for="customFile">Upload picture :</label>
                <input type="file" class="custom-file-input" id="customFile">
                
              </div>
            
			  {{-- <div class="form-group">
			     <label for="edit-name">Subject <span class="form-required" title="This field is required.">*</span></label>
				 <textarea class="form-control bio" placeholder="" rows="3"></textarea>
			  </div> --}}
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>

@endsection

@extends('layouts.main')
@section('content')
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page"><a href="{{ route('register') }}">Register as a Member</a></li>
		<li ><a href="{{ route('join_free') }}">Join Free</a></li>
     </ul>
   </div>
   <div class="services">
	<form>
   	  <div class="col-sm-6 login_left">
	     
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

			  <div class="age_select">
				<label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
				  <div class="age_grid">
				   <div class="col-sm-4 form_box">
					<div class="select-block1">
					  <select>
						  <option value="">Country</option>
						  <option value="">Country 1</option>
						  <option value="">Country 2</option>
						  <option value="">Country 3</option>
						  <option value="">Country 4</option>
						  <option value="">Country 5</option>
						  <option value="">Country 6</option>
						  <option value="">Country 7</option>
						  <option value="">Country 8</option>
						  <option value="">Country 9</option>
						  <option value="">Country 10</option>
						  
					  </select>
					</div>
			  </div>
			  <div class="col-sm-4 form_box2">
					 <div class="select-block1">
					  <select>
						  <option value="">State 1</option>
						  <option value="">State 2</option>
						  <option value="">State 3</option>
						  <option value="">State 4</option>
						  <option value="">State 5</option>
						  <option value="">State 6</option>
						  <option value="">State 7</option>
						  <option value="">State 8</option>
						  <option value="">State 9</option>
						  
					  </select>
					</div>
				   </div>
				   <div class="col-sm-4 form_box1">
					 <div class="select-block1">
					  <select>
						  <option value="">City 1</option>
						  <option value="">City 2</option>
						  <option value="">City 3</option>
						  <option value="">City 4</option>
						  <option value="">City 5</option>
						  <option value="">City 6</option>
						  <option value="">City 7</option>
						  <option value="">City 8</option>
						 
					  </select>
					 </div>
					</div>
					<div class="clearfix"> </div>
				   </div>
				</div>


				<div class="age_select" style="padding: 10px 0px">
					
					  <div class="age_grid">
					   <div class="col-sm-4 form_box">
						<label for="edit-pass">Religion<span class="form-required" title="This field is required.">*</span></label>
						<div class="select-block1">
						  <select>
							  <option value="">Select</option> 
							  <option value="">Muslims</option>
							  <option value="">Christians</option>
							  <option value="">Hindus</option>
							  <option value="">Buddhists</option>
							  <option value="">Irreligious and atheist</option>
							  <option value="">Sikhism</option>
							 
							  
						  </select>
						</div>
				  </div>
				  <div class="col-sm-4 form_box2">
					<label for="edit-pass">Status <span class="form-required" title="This field is required.">*</span></label>
						 <div class="select-block1">
						  <select>
							  <option value="">Select</option>
							  <option value="">Single</option>
							  <option value="">Divorced</option>
							  <option value="">Widowed</option>
							  
						  </select>
						</div>
					   </div>
					   <div class="col-sm-4 form_box1">
						<label for="edit-pass">Profession<span class="form-required" title="This field is required.">*</span></label>
						 <div class="select-block1">
						  <select>
							  <option value="">Select</option>
							  <option value="">Professsion 1</option>
							  <option value="">Professsion 2</option>
							  <option value="">Professsion 3</option>
							  <option value="">Professsion 4</option>
							  <option value="">Professsion 5</option>
							  <option value="">Professsion 6</option>
							 
						  </select>
						 </div>
						</div>
						<div class="clearfix"> </div>
					   </div>
					</div>

					<label for="edit-name">Education<span class="form-required" ></span></label>
					<div class="form-group">
						<label for="edit-name">School <span class="form-required" title="This field is required.">*</span></label>
						<input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
					  </div>
					  <div class="form-group">
						<label for="edit-name">College<span class="form-required" title="This field is required.">*</span></label>
						<input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
					  </div>
					  <div class="form-group">
						<label for="edit-name">University<span class="form-required" title="This field is required.">*</span></label>
						<input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
					  </div>
					  <div class="form-group">
						<label for="edit-name">Subject <span class="form-required" title="This field is required.">*</span></label>
						<input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
					  </div>

              

			 

			 

		 
	  </div>
	  <div class="col-sm-6">
		<div class="form-group">
			<label for="edit-name">Height <span class="form-required" title="This field is required.">*</span></label>
			<input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
		  </div>

		  <div class="form-group">
			<label for="edit-name">Phone Number <span class="form-required" title="This field is required.">*</span></label>
			<input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
		  </div>
		<div class="form-group form-group1">
			<label class="col-sm-7 control-lable" for="gender">Gender : </label>
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
			<label class="custom-file-label" for="customFile">Upload picture</label>
			<input type="file" class="custom-file-input" id="customFile">
			
		  </div>
		
		
		<div class="age_select" style="margin-top: 20px">
			<label for="edit-name">Partner Preference : <span class="form-required" ></span></label><br>
			<label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
			  <div class="age_grid">
			   <div class="col-sm-4 form_box">
				<div class="select-block1">
				  <select>
					  <option value="">Country</option>
					  <option value="">Country 1</option>
					  <option value="">Country 2</option>
					  <option value="">Country 3</option>
					  <option value="">Country 4</option>
					  <option value="">Country 5</option>
					  <option value="">Country 6</option>
					  <option value="">Country 7</option>
					  <option value="">Country 8</option>
					  <option value="">Country 9</option>
					  <option value="">Country 10</option>
					  
				  </select>
				</div>
		  </div>
		  <div class="col-sm-4 form_box2">
				 <div class="select-block1">
				  <select>
					  <option value="">State 1</option>
					  <option value="">State 2</option>
					  <option value="">State 3</option>
					  <option value="">State 4</option>
					  <option value="">State 5</option>
					  <option value="">State 6</option>
					  <option value="">State 7</option>
					  <option value="">State 8</option>
					  <option value="">State 9</option>
					  
				  </select>
				</div>
			   </div>
			   <div class="col-sm-4 form_box1">
				 <div class="select-block1">
				  <select>
					  <option value="">City 1</option>
					  <option value="">City 2</option>
					  <option value="">City 3</option>
					  <option value="">City 4</option>
					  <option value="">City 5</option>
					  <option value="">City 6</option>
					  <option value="">City 7</option>
					  <option value="">City 8</option>
					 
				  </select>
				 </div>
				</div>
				<div class="clearfix"> </div>
			   </div>
			</div>


			<div class="age_select" style="padding: 10px 0px">
				
				  <div class="age_grid">
				   <div class="col-sm-4 form_box">
					<label for="edit-pass">Religion<span class="form-required" title="This field is required.">*</span></label>
					<div class="select-block1">
					  <select>
						  <option value="">Select</option> 
						  <option value="">Muslims</option>
						  <option value="">Christians</option>
						  <option value="">Hindus</option>
						  <option value="">Buddhists</option>
						  <option value="">Irreligious and atheist</option>
						  <option value="">Sikhism</option>
						 
						  
					  </select>
					</div>
			  </div>
			  <div class="col-sm-4 form_box2">
				<label for="edit-pass">Status <span class="form-required" title="This field is required.">*</span></label>
					 <div class="select-block1">
					  <select>
						  <option value="">Select</option>
						  <option value="">Single</option>
						  <option value="">Divorced</option>
						  <option value="">Widowed</option>
						  
					  </select>
					</div>
				   </div>
				   <div class="col-sm-4 form_box1">
					<label for="edit-pass">Profession<span class="form-required" title="This field is required.">*</span></label>
					 <div class="select-block1">
					  <select>
						  <option value="">Select</option>
						  <option value="">Professsion 1</option>
						  <option value="">Professsion 2</option>
						  <option value="">Professsion 3</option>
						  <option value="">Professsion 4</option>
						  <option value="">Professsion 5</option>
						  <option value="">Professsion 6</option>
						 
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
				<select>
			
					<option value="-1">Any</option>
				
					<option value="253">Male</option>
					
					<option value="254" selected>Female</option>
					
			</select>
			</div>
		
		

	   </div>
	   
		<div class="row">

		<div class="col-md-2">
			<label >Age:</label>
		</div>
			
			<div class="col-md-2">
              
			<label>From:</label>
			<select>
		
					  <option value="-1">-</option>
					  
					  <option value="18">18</option>
					  
					  <option value="19" selected>19</option>
					  
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
				<select>
						 
						 <option value="-1">-</option>
						 
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
						 
						 <option value="34" selected>34</option>
						 
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
			<label for="edit-name">Comment<span class="form-required" title="This field is required.">*</span></label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		
	
		<br><br><br>
		
		<button class="btn_1" ><a href="{{ route("upgrade") }}" style="color: blanchedalmond">Choose the Membership Plan</a></button></button>
		<div class="form-actions">
		  <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
		</div>

		<p style="padding-top: 10px">Already a member? <a href="{{ route("register") }}" style="color: blue">Login</a></p>	
        

	</div>


		
	  </div>
	</form>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
@endsection

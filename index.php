<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>POC: Online Pizza Order App</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--for bootstrap css-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css" type="text/css">

<link rel="stylesheet/less" href="themes/css/main.less"/>
<link rel="stylesheet/less" href="css/style.css"/>
<script src="themes/js/less.js" type="text/javascript"></script>

<!--for backbone js-->
<script src="backbone/jquery.js"></script>
<script src="backbone/json2.js"></script>
<script src="backbone/underscore.js"></script>
<script src="backbone/backbone-min.js"></script>

<!--for json array-->
<script type="text/javascript" src="json/formjs.js"></script>
<script type="text/javascript" src="json/json.js"></script>
<script type="text/javascript">
	function frmCollectionSubmit()
	{alert("test111");
		var formData = form2js('frmCollection', '.', true,
				function(node)
				{
					if (node.id && node.id.match(/callbackTest/))
					{
						return { name: node.id, value: node.innerHTML };
					}
				});

		document.getElementById('testArea').innerHTML = JSON.stringify(formData, null, '\t');
	}
</script>
  
</head>
<body id="body">

<pre><code id="testArea">
</code></pre>

<section id="bodySection">
	<div id="featureSectiom">
		<div class="container">
			<div class="row">
			
				<div class="span2">&nbsp;</div>

				<div class="span8 text-center grad1" id="mainFirstDiv" >
					<h1 class="pageTitle">Pizza Hut</h1>
					<div class="span8 text-center" id="delivery_pickup">
					  <script src="2.js"></script>
					  <div class="span8">&nbsp;</div>
					  <!----------------->
					
                    
                    <div class="span3 text-left margin-left80 formDiv" id="mainDivDelPickup">
                        <div style="display: none;" id="CollectionForm">
<div id="storeLocatoreCollectionPlaceHolder">
<form id="frmCollection" action="javascript:frmCollectionSubmit()">
<div>

<label class="radio text-left">
<input type="radio" name="person.addressMode" id="collectionAddressModePostcode" value="option1" checked>
Store Search
</label>
            <div id="postcode-container">
                <fieldset>
                   <!-- <legend></legend>-->
                    <div>
                        <div class="editor-label"><label class="popup-heading-black" for="SelectedStore">Store</label></div>
                        <div class="editor-field">
							<select name="person.SelectedStoreId" id="SelectedStoreId" >
							<option value="219" selected="selected">Ahmedabad - Ashram Road</option>
							<option value="200">Ahmedabad - Shapath</option>
							<option value="214">Ahmedabad - Shivalik</option>
							<option value="216">Ahmedabad - Thaltej</option>
							<option value="218">Baroda - Fathegunj</option>
							<option value="215">Baroda - OP Road</option>
							<option value="199">Baroda - Race Course Rd</option>
							<option value="160">Bengaluru - Airport Road</option>
							<option value="229">Bengaluru - Banaswadi</option>
							<option value="235">Bengaluru - Banerghatta II</option>
							<option value="161">Bengaluru - Basaweshwar Nagar</option>
							<option value="234">Bengaluru - Bellandur</option>
							<option value="168">Bengaluru - Bhanashankari II</option>
							<option value="163">Bengaluru - Bhanashankari III</option>
							<option value="238">Bengaluru - Bomanhalli</option>
							<option value="227">Bengaluru - BTM Layout</option>
							<option value="154">Bengaluru - CMH Road</option>
							<option value="164">Bengaluru - Coles Road</option>
							<option value="239">Bengaluru - CV Raman Nagar</option>
							<option value="155">Bengaluru - Domlur</option>
							<option value="228">Bengaluru - Electronic City</option>
							<option value="245">Bengaluru - Gandhi Bazar</option>
							<option value="243">Bengaluru - Hebbel Kempapura</option>
							<option value="232">Bengaluru - HSR Layout</option>
							<option value="170">Bengaluru - ITPL</option>
							<option value="166">Bengaluru - Jaya Nagar</option>
							<option value="237">Bengaluru - JP Morgan</option>
							<option value="244">Bengaluru - JP Nagar</option>
							<option value="165">Bengaluru - Kamanahalli</option>
							<option value="167">Bengaluru - Kanakpura</option>
							<option value="156">Bengaluru - Kormangla</option>
							<option value="230">Bengaluru - Marathali</option>
							<option value="159">Bengaluru - R T Nagar</option>
							<option value="241">Bengaluru - Rajaji Nagar</option>
							<option value="231">Bengaluru - Rajarajeshwari Nagar</option>
							<option value="169">Bengaluru - Ramaiah BEL Road</option>
							<option value="158">Bengaluru - Sadashiv Nagar</option>
							<option value="233">Bengaluru - Sahakara Nagar</option>
							<option value="248">Bengaluru - Sarjapur</option>
							<option value="127">Bengaluru - Shanti Nagar</option>
							<option value="249">Bengaluru - Soul Space</option>
							<option value="242">Bengaluru - Tumkur</option>
							<option value="162">Bengaluru - Vijay Nagar</option>
							<option value="236">Bengaluru - Whitefield</option>
							<option value="247">Bengaluru - Yelahanka</option>
							<option value="130">Chennai - Adyar</option>
							<option value="177">Chennai - Anna Nagar</option>
							<option value="133">Chennai - Ascendas</option>
							<option value="139">Chennai - Ashok Nagar</option>
							<option value="205">Chennai - Chrompet</option>
							<option value="132">Chennai - DLF</option>
							<option value="138">Chennai - GST</option>
							<option value="135">Chennai - Kilpauk</option>
							<option value="120">Chennai - Mahindra City</option>
							<option value="140">Chennai - Nolumbur Ambit Tech Park</option>
							<option value="126">Chennai - Nungambakkam</option>
							<option value="125">Chennai - OMR</option>
							<option value="153">Chennai - Perambur</option>
							<option value="206">Chennai - R A Puram</option>
							<option value="141">Chennai - R K Salai</option>
							<option value="131">Chennai - RMZ</option>
							<option value="142">Chennai - Vadapalani</option>
							<option value="182">Chennai -T Nagar</option>
							<option value="143">Coimbatore - R S Puram</option>
							<option value="179">Hyderabad - Banjara Hills</option>
							<option value="183">Hyderabad - Central Mall</option>
							<option value="184">Hyderabad - Madhapur</option>
							<option value="185">Hyderabad - Rajbhavan</option>
							<option value="186">Hyderabad - SP Road</option>
							<option value="220">Hyderabad- Hyder Nagar</option>
							<option value="204">Indore - Treasure Island</option>
							<option value="171">Mangalore - Bharath Mall</option>
							<option value="246">Manipal - Manipal</option>
							<option value="191">Mumbai - Andheri</option>
							<option value="192">Mumbai - BKC</option>
							<option value="193">Mumbai - Borivali</option>
							<option value="194">Mumbai - Cinewonder</option>
							<option value="124">Mumbai - Kandivali - East</option>
							<option value="195">Mumbai - Lokhandwala</option>
							<option value="178">Mumbai - Mindspace</option>
							<option value="45">Mumbai - Mira Road</option>
							<option value="173">Mumbai - Nerul</option>
							<option value="196">Mumbai - Nirmal</option>
							<option value="197">Mumbai - Powai</option>
							<option value="198">Mumbai - Prangan</option>
							<option value="190">Mumbai - Profit Centre</option>
							<option value="174">Mumbai - Rutu Park</option>
							<option value="189">Mumbai - Sterling</option>
							<option value="207">Mumbai - Vashi</option>
							<option value="226">Mumbai - Versova</option>
							<option value="172">Mysore -Temple Road</option>
							<option value="147">Pune - Aundh</option>
							<option value="151">Pune - JM Road</option>
							<option value="148">Pune - Kalyani Nagar</option>
							<option value="217">Pune - Katraj</option>
							<option value="149">Pune - Koregaon Park</option>
							<option value="152">Pune - Kothrud</option>
							<option value="176">Pune - Magarpatta</option>
							<option value="136">Pune - MG Road</option>
							<option value="222">Pune - Nigdi</option>
							<option value="146">Pune - Pimpri</option>
							<option value="150">Pune - Tain Square</option>
							<option value="212">Pune - Viman Nagar</option>
							<option value="203">Rajkot - Solitaire</option>
							<option value="201">Surat - Tribhuvan</option>
							<option value="225">Surat - Virtious</option>
							<option value="202">Vapi - Vapi</option>
							<option value="187">Vizag - Vishakapatnam</option>
							</select>                       
							 </div>
						</div>
                </fieldset>
            </div>
            <div class="header1 center">
                OR
            </div>
			
			<label class="radio text-left">
			<input type="radio" name="person.addressMode" id="collectionAddressModeLocalisation" value="localisationSearch" >
			Address Search
			</label>




<div id="address-container" style="display: none;">
    <fieldset>
       <!-- <legend></legend>-->

	<div>
	   
		<div class="editor-field">
			<input type="text"  placeholder="Type / Select City" class="class="focused"" title="City" name="person.TownCity" id="TownCity" data-val="true" data-val-required="City is required">  
			<div class="error">
					<span data-valmsg-replace="true" data-valmsg-for="TownCity" class="field-validation-valid"></span>     
				
			</div> 
		</div>
	</div>
	<div>
		
		<div class="editor-field">
			<input type="text"  placeholder="Type / Select Locality" class="focused" title="Locality" name="person.District" id="District">  
			<div class="error">
					<span data-valmsg-replace="true" data-valmsg-for="District" class="field-validation-valid"></span>     
				
			</div> 
		</div>
	</div>    
	</fieldset>
</div>       
 <div id="btn-del-store-search">
            <div class="button-wrapper btnValidateAddress"><div class="clear"></div><div class="button-start"></div><div class="button-container"><input type="submit" value="Proceed"  name="address-search" id="address-search" class="btn btn-small btn-primary"></div><div class="button-end"></div><div class="clear"></div></div>
        </div>
    </div>
</form>

</div>
                        </div>
                        <div style="display: block;" id="DeliveryForm">
                            <div class="header1">
                                Your Address
                            </div>
                            <div id="deliveryviewcontainer">

<div>
<form method="post" id="frmDelivery" >
<div>
<div id="address-container">
    <fieldset>
        <!--<legend></legend>-->
<div>
    
    <div class="editor-field">
        <input type="text" class="focused" placeholder="Type / Select City" title="City" name="TownCity" id="TownCity">  
        <div class="error">
                <span data-valmsg-replace="true" data-valmsg-for="TownCity" class="field-validation-valid"></span>     
            
        </div> 
    </div>
</div>
<div>
    
    <div class="editor-field">
        <input type="text"  placeholder="Type / Select Locality" class="focused" title="Locality" name="District" id="District" >  
        <div class="error">
                <span data-valmsg-replace="true" data-valmsg-for="District" class="field-validation-valid"></span>     
            
        </div> 
    </div>
</div>
<div>
    
    <div class="editor-field">
        <input type="text"  placeholder="Type / Select Street/Building Name" class="focused" title="Street/Building Name" name="StreetName" id="StreetName" >  
        <div class="error">
                <span data-valmsg-replace="true" data-valmsg-for="StreetName" class="field-validation-valid"></span>     
            
        </div> 
    </div>
</div>
<div>
    
    <div class="editor-field">
        <input type="text" placeholder="Type / Select House/Flat #" class="focused" title="House/Flat #" name="BuildingName" id="BuildingName">  
        <div class="error">
                <span data-valmsg-replace="true" data-valmsg-for="BuildingName" class="field-validation-valid"></span>     
            
        </div> 
    </div>
</div>
<div>
    
    <div class="editor-field">
        <input type="text" maxlength="30" placeholder="Type / Select Landmark" class="focused" title="Landmark" name="NearbyLandmark" id="NearbyLandmark">  
        <div class="error">
                <span data-valmsg-replace="true" data-valmsg-for="NearbyLandmark" class="field-validation-valid"></span>     
            
        </div> 
    </div>
</div>
<div>
   
    <div class="editor-field">
        <input type="text" data-typeahead-hiddenparentfield="StreetName" style="display:none" data-typeahead="true" data-search-field="BuildingName" placeholder="Type / Select Intersection" class="inputTwoHundred" title="Intersection" name="Intersection" id="Intersection">  
        <div class="error">
                <span data-valmsg-replace="true" data-valmsg-for="Intersection" class="field-validation-valid"></span>     
            
        </div> 
    </div>
</div>    </fieldset>
</div>        <div id="btn-del-store-search">
            <div class="button-wrapper btnValidateAddress"><div class="clear"></div><div class="button-start"></div><div class="button-container"><input type="button" value="Proceed" onClick="DeliveryAddressSearchformSubmition()" name="address-search" id="address-search" class="btn btn-small btn-primary"></div><div class="button-end"></div><div class="clear"></div></div>
        </div>
    </div>
</form></div>  </div>
                        </div>
                        <div id="btn-search-takeout"> </div>
                    </div>
					
					
					<!-- _LoginStoreLocator -->
                    <div class=" margin-left50 span3 text-left formDiv" id="login-container">
                        <div class="area1" id="login-area">

							<!-- _LoginStoreLocator -->
							<div id="login-wrapper">
							
								<div class="header1">Please Login</div>
							
								<!-- Registered -->
								<div id="login-registered">
							<form method="post" id="loginForm" >            
							<div class="editor-label"><label style="display:none;" for="Email" class="popup-heading-black">Email<span class="field-required">*</span></label></div><div class="editor-field"><input type="text" placeholder="Enter Email" name="Email" id="Email"><div class="error"><span id="Email_validationMessage" class="field-validation-valid"></span></div></div>           
							<div class="editor-label"><label for="Password" class="popup-heading-black">Password<span class="field-required">*</span></label></div><div class="editor-field"><input type="password" name="Password" id="Password"><div class="error"><span id="Password_validationMessage" class="field-validation-valid"></span></div></div>            <div class="editor-field">
											<label for="CreatePersistentCookie" class="ar15">Remember me?</label>
											<input type="checkbox" value="true" name="CreatePersistentCookie" id="CreatePersistentCookie"><input type="hidden" value="false" name="CreatePersistentCookie">
										</div>
										<span class="forgotPasswordMsg"><a href="https://orders.pizzahut.co.in/PHIndia/Web/en-GB/PHIN/PHIN/Account/ForgotPassword">Forgot password?</a></span>    
							<div class="button-wrapper"><div class="clear"></div><div class="button-start"></div><div class="button-container"><input type="button" value="Log In" onClick="_gaq.push(['_setCustomVar', 1, 'User Type', 'Registered', 1]);_gaq.push(['_trackEvent', 'Account', 'Login', '']);DoLogin()" name="btnLogin" id="btnLogin" class="btn btn-small btn-primary"></div><div class="button-end"></div><div class="clear"></div></div>            <div id="createAccount">
											<span class="anchor1"><a href="https://orders.pizzahut.co.in/PHIndia/Web/en-GB/PHIN/PHIN/Account/Register">Register</a></span>
										</div>
							</form>    </div>
							
							   
								
							</div>
                        </div>
                    </div>
                    <div class="clear"> </div>

					</div>
					
				</div>

				<div class="span2">&nbsp;</div>
			</div>
				<br>
				<br>
			
		</div>
	</div>

	
</section>

<!--<ul>
    <li><a href="example_1/">Example 1</a></li>
    <li><a href="example_2/">Example 2</a></li>
</ul>-->

<a href="#" class="go-top" style="display: none;"><i class="icon-double-angle-up"></i></a>

<script src="themes/js/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="themes/js/jquery.easing-1.3.min.js"></script>
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="themes/js/jquery.prettyPhoto.js"></script>
<script src="themes/js/custom.js" type="text/javascript"></script>
</html>
</body>

<!--<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<ul>
    <li><a href="example_1/">Example 1</a></li>
    <li><a href="http://php-backbone.gopagoda.com/example_2/">Example 2</a></li>
</ul>
</body>
</html>-->



<!--<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>hello-backbonejs</title>
</head>
<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="http://ajax.cdnjs.com/ajax/libs/json2/20110223/json2.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>

  <script src="2.js"></script>
</body>
</html>-->


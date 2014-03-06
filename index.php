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
<script type="text/javascript" src="json/js2form.js"></script>
<script type="text/javascript" src="json/json.js"></script>

<script type="text/javascript">

	function frmCollectionSubmit()
	{  
		// convert to json
		var formData = form2js('frmCollection', '.', true,
				function(node)
				{
					if (node.id && node.id.match(/callbackTest/))
					{
						return { name: node.id, value: node.innerHTML };
					}
				});

		document.getElementById('testArea').innerHTML = JSON.stringify(formData, null, '\t');
		document.getElementById('location-val').value = JSON.stringify(formData, null, '\t');
		
		
		$('div#mainFirstDiv', this.el).hide();
		$('div#location_detail', this.el).show();	
		populateForm();
	}
	
	function populateForm()
	{
		var data = document.getElementById('location-val').value;
		data = JSON.parse(data);
		js2form(document.getElementById('pickupAddress'), data);
	}
	
	function frmConfirmOrderSubmit()
	{
		$('div#mainLocationContainer', this.el).hide();
		$('div#listingContainer', this.el).show();	
	}
	
	
	
	$(document).ready(function() {
		var location_val = $('#SelectedStoreId option:selected').html();
		$("#location-selected-val" ).val(location_val);
		
		$( "#SelectedStoreId" ).change(function() {
			$("#location-selected-val" ).val($('#SelectedStoreId option:selected').html()); 
		});
			
	});
		
	
</script>
  
</head>
<body id="body">

<pre><code id="testArea">
</code>
<input type="hidden" id="location-val" >
</pre>

<section id="bodySection">
	<div id="featureSectiom">
		<div class="container">
			<div class="row" id="mainLocationContainer">
			
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
<form id="frmCollection" action="javascript:frmCollectionSubmit()" >
<!--<form id="frmCollection">-->
<div>

<label class="radio text-left">
<input type="radio" name="location.addressMode" id="collectionAddressModePostcode" value="option1" checked>
Store Search
</label>
            <div id="postcode-container">
                <fieldset>
                   <!-- <legend></legend>-->
                    <div>
                        <div class="editor-label"><label class="popup-heading-black" for="SelectedStore">Store</label></div>
                        <div class="editor-field">
							<input type="hidden" id="location-selected-val"  name="location.locationSelected">
							<select name="location.SelectedStoreId" id="SelectedStoreId" >
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
			<input type="radio" name="location.addressMode" id="collectionAddressModeLocalisation" value="localisationSearch" >
			Address Search
			</label>




<div id="address-container" style="display: none;">
    <fieldset>
       <!-- <legend></legend>-->

	<div>
	   
		<div class="editor-field">
			<input type="text"  placeholder="Type / Select City" class="class="focused"" title="City" name="location.TownCity" id="TownCity" data-val="true" data-val-required="City is required">  
			<div class="error">
					<span data-valmsg-replace="true" data-valmsg-for="TownCity" class="field-validation-valid"></span>     
				
			</div> 
		</div>
	</div>
	<div>
		
		<div class="editor-field">
			<input type="text"  placeholder="Type / Select Locality" class="focused" title="Locality" name="location.District" id="District">  
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
											<label for="CreatePersistentCookie" class="checkbox">Remember me?
											<input type="checkbox" value="true" name="CreatePersistentCookie" id="CreatePersistentCookie"><input type="hidden" value="false" name="CreatePersistentCookie">
											<span class="forgotPasswordMsg"><a href="#" class="btn btn-link">Forgot password?</a></span> 
											</label>    
										</div>
										
							<div class="button-wrapper"><div class="clear"></div><div class="button-start"></div><div class="button-container"><input type="button" value="Log In"  name="btnLogin" id="btnLogin" class="btn btn-small btn-primary"> <span class="anchor1"><a href="#" class="btn btn-link">Register</a></span></div><div class="button-end"></div><div class="clear"></div></div>            <div id="createAccount">
											
										</div>
							</form>    </div>
							
							   
								
							</div>
                        </div>
                    </div>
                    <div class="clear"> </div>

					</div>
					
				</div>
				
				<!--2nd page : pickup detail for location-->
				<div class="span8 text-center grad1" id="location_detail" style="display:none;" >
					<div class="span7 text-center">
					<form id="pickupAddress" >
					<span></span>
					<input type="text" name="location.locationSelected" value="">
					<input type="text" name="location.TownCity" value="">
					<input type="text" name="location.District" value="">
					

					</form>
					<div class="text-left">
						<h1>PICK UP</h1>
							

<br>
<div class="pop-box-container">
    <span class="pop-box-lefttext">I am located at</span>
    <span class="btn btn-danger">Ashram Road</span>
    <a id="storedetail-change-link" href="#" class="btn btn-link">Change</a>
</div>
<br>
<div class="ordertime-address-container">
    
    <div class="ordertime-address-storeraddress">
        <div class="ordertime-address-heading">
            <span class="popup-heading-black">
               <b> Your Neighboring Hut</b>
            </span>
           
        </div>
           
                <div class="streetname"> Ground Floor, </div>
                <div class="district">City Gold Multiplex, </div>
                <div class="postcodeorzip">Ashram Road, Ahmedabad, India, </div>
            <div class="postcodeorzip">Ashram Road</div>


        <br>
           
    <div class="telephone-label">Phone:</div>
    <div class="telephone">
        <div class="storedetail-storelist-tel-left">
        </div>
        <div class="storedetail-storelist-tel-mid">+91 79 39883988</div>
        <div class="storedetail-storelist-tel-right">
        </div>
    </div>
        <br>
    </div>
</div>
<div class="clear">
</div>
						<div class="divider-line-three">
						</div>
						<br>
						<div class="popup-heading-black-two">This order is for -</div>
						<br>
						<div class="future-order-two">
							<div id="future-order-container">
								

<input type="hidden" value="future-order-container" name="hndFutureOrderPlaceHolder" id="hndFutureOrderPlaceHolder">
<input type="hidden" value="/PHIndia/Web/en-GB/PHIN/PHIN/Ahmedabad%20-%20Ashram%20Road/Order" name="hdnOrderIndexUrl" id="hdnOrderIndexUrl">
    
<form method="post" id="form0" action="/PHIndia/Web/en-GB/PHIN/PHIN/Ahmedabad%20-%20Ashram%20Road/OrderTimeSelection/UpdateStoreOrderTime"><input type="hidden" value="True" name="displayCurrentOrderCheckBox" id="displayCurrentOrderCheckBox"><input type="checkbox" value="true" name="IsCurrentOrderSelected" id="IsCurrentOrderSelected" checked="checked"><input type="hidden" value="false" name="IsCurrentOrderSelected">                <span>Now</span>
                    <!--<span>12:02</span>    -->
                <br>
                <br>
<input type="checkbox" value="true" updatable="True" name="IsFutureOrderSelected" id="IsFutureOrderSelected"><input type="hidden" value="false" name="IsFutureOrderSelected">                <span>Later</span>
                <br>&nbsp;
<!--<select name="SelectedOrderDate" id="SelectedOrderDate"><option value="05/03/2014 07:30:00" selected="selected">05/03/2014</option>
</select> -->               <div class="calendar">
                </div>
<select name="SelectedOrderTime" id="SelectedOrderTime"><option value="05/03/2014 12:02:00" selected="selected">12:02</option>
<option value="05/03/2014 12:03:00">12:03</option>
<option value="05/03/2014 12:04:00">12:04</option>
<option value="05/03/2014 12:05:00">12:05</option>
<option value="05/03/2014 12:06:00">12:06</option>
<option value="05/03/2014 12:07:00">12:07</option>
<option value="05/03/2014 12:08:00">12:08</option>
<option value="05/03/2014 12:09:00">12:09</option>
<option value="05/03/2014 12:10:00">12:10</option>
<option value="05/03/2014 12:11:00">12:11</option>
<option value="05/03/2014 12:12:00">12:12</option>
<option value="05/03/2014 12:13:00">12:13</option>
<option value="05/03/2014 12:14:00">12:14</option>
<option value="05/03/2014 12:15:00">12:15</option>
<option value="05/03/2014 12:16:00">12:16</option>
<option value="05/03/2014 12:17:00">12:17</option>
<option value="05/03/2014 12:18:00">12:18</option>
<option value="05/03/2014 12:19:00">12:19</option>
<option value="05/03/2014 12:20:00">12:20</option>
<option value="05/03/2014 12:21:00">12:21</option>
<option value="05/03/2014 12:22:00">12:22</option>
<option value="05/03/2014 12:23:00">12:23</option>
<option value="05/03/2014 12:24:00">12:24</option>
<option value="05/03/2014 12:25:00">12:25</option>
<option value="05/03/2014 12:26:00">12:26</option>
<option value="05/03/2014 12:27:00">12:27</option>
<option value="05/03/2014 12:28:00">12:28</option>
<option value="05/03/2014 12:29:00">12:29</option>
<option value="05/03/2014 12:30:00">12:30</option>
<option value="05/03/2014 12:31:00">12:31</option>
<option value="05/03/2014 12:32:00">12:32</option>
<option value="05/03/2014 12:33:00">12:33</option>
<option value="05/03/2014 12:34:00">12:34</option>
<option value="05/03/2014 12:35:00">12:35</option>
<option value="05/03/2014 12:36:00">12:36</option>
<option value="05/03/2014 12:37:00">12:37</option>
<option value="05/03/2014 12:38:00">12:38</option>
<option value="05/03/2014 12:39:00">12:39</option>
<option value="05/03/2014 12:40:00">12:40</option>
<option value="05/03/2014 12:41:00">12:41</option>
<option value="05/03/2014 12:42:00">12:42</option>
<option value="05/03/2014 12:43:00">12:43</option>
<option value="05/03/2014 12:44:00">12:44</option>
<option value="05/03/2014 12:45:00">12:45</option>
<option value="05/03/2014 12:46:00">12:46</option>
<option value="05/03/2014 12:47:00">12:47</option>
<option value="05/03/2014 12:48:00">12:48</option>
<option value="05/03/2014 12:49:00">12:49</option>
<option value="05/03/2014 12:50:00">12:50</option>
<option value="05/03/2014 12:51:00">12:51</option>
<option value="05/03/2014 12:52:00">12:52</option>
<option value="05/03/2014 12:53:00">12:53</option>
<option value="05/03/2014 12:54:00">12:54</option>
<option value="05/03/2014 12:55:00">12:55</option>
<option value="05/03/2014 12:56:00">12:56</option>
<option value="05/03/2014 12:57:00">12:57</option>
<option value="05/03/2014 12:58:00">12:58</option>
<option value="05/03/2014 12:59:00">12:59</option>
<option value="05/03/2014 13:00:00">13:00</option>
<option value="05/03/2014 13:01:00">13:01</option>
<option value="05/03/2014 13:02:00">13:02</option>
<option value="05/03/2014 13:03:00">13:03</option>
<option value="05/03/2014 13:04:00">13:04</option>
<option value="05/03/2014 13:05:00">13:05</option>
<option value="05/03/2014 13:06:00">13:06</option>
<option value="05/03/2014 13:07:00">13:07</option>
<option value="05/03/2014 13:08:00">13:08</option>
<option value="05/03/2014 13:09:00">13:09</option>
<option value="05/03/2014 13:10:00">13:10</option>
<option value="05/03/2014 13:11:00">13:11</option>
<option value="05/03/2014 13:12:00">13:12</option>
<option value="05/03/2014 13:13:00">13:13</option>
<option value="05/03/2014 13:14:00">13:14</option>
<option value="05/03/2014 13:15:00">13:15</option>
<option value="05/03/2014 13:16:00">13:16</option>
<option value="05/03/2014 13:17:00">13:17</option>
<option value="05/03/2014 13:18:00">13:18</option>
<option value="05/03/2014 13:19:00">13:19</option>
<option value="05/03/2014 13:20:00">13:20</option>
<option value="05/03/2014 13:21:00">13:21</option>
<option value="05/03/2014 13:22:00">13:22</option>
<option value="05/03/2014 13:23:00">13:23</option>
<option value="05/03/2014 13:24:00">13:24</option>
<option value="05/03/2014 13:25:00">13:25</option>
<option value="05/03/2014 13:26:00">13:26</option>
<option value="05/03/2014 13:27:00">13:27</option>
<option value="05/03/2014 13:28:00">13:28</option>
<option value="05/03/2014 13:29:00">13:29</option>
<option value="05/03/2014 13:30:00">13:30</option>
<option value="05/03/2014 13:31:00">13:31</option>
<option value="05/03/2014 13:32:00">13:32</option>
<option value="05/03/2014 13:33:00">13:33</option>
<option value="05/03/2014 13:34:00">13:34</option>
<option value="05/03/2014 13:35:00">13:35</option>
<option value="05/03/2014 13:36:00">13:36</option>
<option value="05/03/2014 13:37:00">13:37</option>
<option value="05/03/2014 13:38:00">13:38</option>
<option value="05/03/2014 13:39:00">13:39</option>
<option value="05/03/2014 13:40:00">13:40</option>
<option value="05/03/2014 13:41:00">13:41</option>
<option value="05/03/2014 13:42:00">13:42</option>
<option value="05/03/2014 13:43:00">13:43</option>
<option value="05/03/2014 13:44:00">13:44</option>
<option value="05/03/2014 13:45:00">13:45</option>
<option value="05/03/2014 13:46:00">13:46</option>
<option value="05/03/2014 13:47:00">13:47</option>
<option value="05/03/2014 13:48:00">13:48</option>
<option value="05/03/2014 13:49:00">13:49</option>
<option value="05/03/2014 13:50:00">13:50</option>
<option value="05/03/2014 13:51:00">13:51</option>
<option value="05/03/2014 13:52:00">13:52</option>
<option value="05/03/2014 13:53:00">13:53</option>
<option value="05/03/2014 13:54:00">13:54</option>
<option value="05/03/2014 13:55:00">13:55</option>
<option value="05/03/2014 13:56:00">13:56</option>
<option value="05/03/2014 13:57:00">13:57</option>
<option value="05/03/2014 13:58:00">13:58</option>
<option value="05/03/2014 13:59:00">13:59</option>
<option value="05/03/2014 14:00:00">14:00</option>
<option value="05/03/2014 14:01:00">14:01</option>
<option value="05/03/2014 14:02:00">14:02</option>
<option value="05/03/2014 14:03:00">14:03</option>
<option value="05/03/2014 14:04:00">14:04</option>
<option value="05/03/2014 14:05:00">14:05</option>
<option value="05/03/2014 14:06:00">14:06</option>
<option value="05/03/2014 14:07:00">14:07</option>
<option value="05/03/2014 14:08:00">14:08</option>
<option value="05/03/2014 14:09:00">14:09</option>
<option value="05/03/2014 14:10:00">14:10</option>
<option value="05/03/2014 14:11:00">14:11</option>
<option value="05/03/2014 14:12:00">14:12</option>
<option value="05/03/2014 14:13:00">14:13</option>
<option value="05/03/2014 14:14:00">14:14</option>
<option value="05/03/2014 14:15:00">14:15</option>
<option value="05/03/2014 14:16:00">14:16</option>
<option value="05/03/2014 14:17:00">14:17</option>
<option value="05/03/2014 14:18:00">14:18</option>
<option value="05/03/2014 14:19:00">14:19</option>
<option value="05/03/2014 14:20:00">14:20</option>
<option value="05/03/2014 14:21:00">14:21</option>
<option value="05/03/2014 14:22:00">14:22</option>
<option value="05/03/2014 14:23:00">14:23</option>
<option value="05/03/2014 14:24:00">14:24</option>
<option value="05/03/2014 14:25:00">14:25</option>
<option value="05/03/2014 14:26:00">14:26</option>
<option value="05/03/2014 14:27:00">14:27</option>
<option value="05/03/2014 14:28:00">14:28</option>
<option value="05/03/2014 14:29:00">14:29</option>
<option value="05/03/2014 14:30:00">14:30</option>
<option value="05/03/2014 14:31:00">14:31</option>
<option value="05/03/2014 14:32:00">14:32</option>
<option value="05/03/2014 14:33:00">14:33</option>
<option value="05/03/2014 14:34:00">14:34</option>
<option value="05/03/2014 14:35:00">14:35</option>
<option value="05/03/2014 14:36:00">14:36</option>
<option value="05/03/2014 14:37:00">14:37</option>
<option value="05/03/2014 14:38:00">14:38</option>
<option value="05/03/2014 14:39:00">14:39</option>
<option value="05/03/2014 14:40:00">14:40</option>
<option value="05/03/2014 14:41:00">14:41</option>
<option value="05/03/2014 14:42:00">14:42</option>
<option value="05/03/2014 14:43:00">14:43</option>
<option value="05/03/2014 14:44:00">14:44</option>
<option value="05/03/2014 14:45:00">14:45</option>
<option value="05/03/2014 14:46:00">14:46</option>
<option value="05/03/2014 14:47:00">14:47</option>
<option value="05/03/2014 14:48:00">14:48</option>
<option value="05/03/2014 14:49:00">14:49</option>
<option value="05/03/2014 14:50:00">14:50</option>
<option value="05/03/2014 14:51:00">14:51</option>
<option value="05/03/2014 14:52:00">14:52</option>
<option value="05/03/2014 14:53:00">14:53</option>
<option value="05/03/2014 14:54:00">14:54</option>
<option value="05/03/2014 14:55:00">14:55</option>
<option value="05/03/2014 14:56:00">14:56</option>
<option value="05/03/2014 14:57:00">14:57</option>
<option value="05/03/2014 14:58:00">14:58</option>
<option value="05/03/2014 14:59:00">14:59</option>
<option value="05/03/2014 15:00:00">15:00</option>
<option value="05/03/2014 15:01:00">15:01</option>
<option value="05/03/2014 15:02:00">15:02</option>
<option value="05/03/2014 15:03:00">15:03</option>
<option value="05/03/2014 15:04:00">15:04</option>
<option value="05/03/2014 15:05:00">15:05</option>
<option value="05/03/2014 15:06:00">15:06</option>
<option value="05/03/2014 15:07:00">15:07</option>
<option value="05/03/2014 15:08:00">15:08</option>
<option value="05/03/2014 15:09:00">15:09</option>
<option value="05/03/2014 15:10:00">15:10</option>
<option value="05/03/2014 15:11:00">15:11</option>
<option value="05/03/2014 15:12:00">15:12</option>
<option value="05/03/2014 15:13:00">15:13</option>
<option value="05/03/2014 15:14:00">15:14</option>
<option value="05/03/2014 15:15:00">15:15</option>
<option value="05/03/2014 15:16:00">15:16</option>
<option value="05/03/2014 15:17:00">15:17</option>
<option value="05/03/2014 15:18:00">15:18</option>
<option value="05/03/2014 15:19:00">15:19</option>
<option value="05/03/2014 15:20:00">15:20</option>
<option value="05/03/2014 15:21:00">15:21</option>
<option value="05/03/2014 15:22:00">15:22</option>
<option value="05/03/2014 15:23:00">15:23</option>
<option value="05/03/2014 15:24:00">15:24</option>
<option value="05/03/2014 15:25:00">15:25</option>
<option value="05/03/2014 15:26:00">15:26</option>
<option value="05/03/2014 15:27:00">15:27</option>
<option value="05/03/2014 15:28:00">15:28</option>
<option value="05/03/2014 15:29:00">15:29</option>
<option value="05/03/2014 15:30:00">15:30</option>
<option value="05/03/2014 15:31:00">15:31</option>
<option value="05/03/2014 15:32:00">15:32</option>
<option value="05/03/2014 15:33:00">15:33</option>
<option value="05/03/2014 15:34:00">15:34</option>
<option value="05/03/2014 15:35:00">15:35</option>
<option value="05/03/2014 15:36:00">15:36</option>
<option value="05/03/2014 15:37:00">15:37</option>
<option value="05/03/2014 15:38:00">15:38</option>
<option value="05/03/2014 15:39:00">15:39</option>
<option value="05/03/2014 15:40:00">15:40</option>
<option value="05/03/2014 15:41:00">15:41</option>
<option value="05/03/2014 15:42:00">15:42</option>
<option value="05/03/2014 15:43:00">15:43</option>
<option value="05/03/2014 15:44:00">15:44</option>
<option value="05/03/2014 15:45:00">15:45</option>
<option value="05/03/2014 15:46:00">15:46</option>
<option value="05/03/2014 15:47:00">15:47</option>
<option value="05/03/2014 15:48:00">15:48</option>
<option value="05/03/2014 15:49:00">15:49</option>
<option value="05/03/2014 15:50:00">15:50</option>
<option value="05/03/2014 15:51:00">15:51</option>
<option value="05/03/2014 15:52:00">15:52</option>
<option value="05/03/2014 15:53:00">15:53</option>
<option value="05/03/2014 15:54:00">15:54</option>
<option value="05/03/2014 15:55:00">15:55</option>
<option value="05/03/2014 15:56:00">15:56</option>
<option value="05/03/2014 15:57:00">15:57</option>
<option value="05/03/2014 15:58:00">15:58</option>
<option value="05/03/2014 15:59:00">15:59</option>
<option value="05/03/2014 16:00:00">16:00</option>
<option value="05/03/2014 16:01:00">16:01</option>
<option value="05/03/2014 16:02:00">16:02</option>
<option value="05/03/2014 16:03:00">16:03</option>
<option value="05/03/2014 16:04:00">16:04</option>
<option value="05/03/2014 16:05:00">16:05</option>
<option value="05/03/2014 16:06:00">16:06</option>
<option value="05/03/2014 16:07:00">16:07</option>
<option value="05/03/2014 16:08:00">16:08</option>
<option value="05/03/2014 16:09:00">16:09</option>
<option value="05/03/2014 16:10:00">16:10</option>
<option value="05/03/2014 16:11:00">16:11</option>
<option value="05/03/2014 16:12:00">16:12</option>
<option value="05/03/2014 16:13:00">16:13</option>
<option value="05/03/2014 16:14:00">16:14</option>
<option value="05/03/2014 16:15:00">16:15</option>
<option value="05/03/2014 16:16:00">16:16</option>
<option value="05/03/2014 16:17:00">16:17</option>
<option value="05/03/2014 16:18:00">16:18</option>
<option value="05/03/2014 16:19:00">16:19</option>
<option value="05/03/2014 16:20:00">16:20</option>
<option value="05/03/2014 16:21:00">16:21</option>
<option value="05/03/2014 16:22:00">16:22</option>
<option value="05/03/2014 16:23:00">16:23</option>
<option value="05/03/2014 16:24:00">16:24</option>
<option value="05/03/2014 16:25:00">16:25</option>
<option value="05/03/2014 16:26:00">16:26</option>
<option value="05/03/2014 16:27:00">16:27</option>
<option value="05/03/2014 16:28:00">16:28</option>
<option value="05/03/2014 16:29:00">16:29</option>
<option value="05/03/2014 16:30:00">16:30</option>
<option value="05/03/2014 16:31:00">16:31</option>
<option value="05/03/2014 16:32:00">16:32</option>
<option value="05/03/2014 16:33:00">16:33</option>
<option value="05/03/2014 16:34:00">16:34</option>
<option value="05/03/2014 16:35:00">16:35</option>
<option value="05/03/2014 16:36:00">16:36</option>
<option value="05/03/2014 16:37:00">16:37</option>
<option value="05/03/2014 16:38:00">16:38</option>
<option value="05/03/2014 16:39:00">16:39</option>
<option value="05/03/2014 16:40:00">16:40</option>
<option value="05/03/2014 16:41:00">16:41</option>
<option value="05/03/2014 16:42:00">16:42</option>
<option value="05/03/2014 16:43:00">16:43</option>
<option value="05/03/2014 16:44:00">16:44</option>
<option value="05/03/2014 16:45:00">16:45</option>
<option value="05/03/2014 16:46:00">16:46</option>
<option value="05/03/2014 16:47:00">16:47</option>
<option value="05/03/2014 16:48:00">16:48</option>
<option value="05/03/2014 16:49:00">16:49</option>
<option value="05/03/2014 16:50:00">16:50</option>
<option value="05/03/2014 16:51:00">16:51</option>
<option value="05/03/2014 16:52:00">16:52</option>
<option value="05/03/2014 16:53:00">16:53</option>
<option value="05/03/2014 16:54:00">16:54</option>
<option value="05/03/2014 16:55:00">16:55</option>
<option value="05/03/2014 16:56:00">16:56</option>
<option value="05/03/2014 16:57:00">16:57</option>
<option value="05/03/2014 16:58:00">16:58</option>
<option value="05/03/2014 16:59:00">16:59</option>
<option value="05/03/2014 17:00:00">17:00</option>
<option value="05/03/2014 17:01:00">17:01</option>
<option value="05/03/2014 17:02:00">17:02</option>
<option value="05/03/2014 17:03:00">17:03</option>
<option value="05/03/2014 17:04:00">17:04</option>
<option value="05/03/2014 17:05:00">17:05</option>
<option value="05/03/2014 17:06:00">17:06</option>
<option value="05/03/2014 17:07:00">17:07</option>
<option value="05/03/2014 17:08:00">17:08</option>
<option value="05/03/2014 17:09:00">17:09</option>
<option value="05/03/2014 17:10:00">17:10</option>
<option value="05/03/2014 17:11:00">17:11</option>
<option value="05/03/2014 17:12:00">17:12</option>
<option value="05/03/2014 17:13:00">17:13</option>
<option value="05/03/2014 17:14:00">17:14</option>
<option value="05/03/2014 17:15:00">17:15</option>
<option value="05/03/2014 17:16:00">17:16</option>
<option value="05/03/2014 17:17:00">17:17</option>
<option value="05/03/2014 17:18:00">17:18</option>
<option value="05/03/2014 17:19:00">17:19</option>
<option value="05/03/2014 17:20:00">17:20</option>
<option value="05/03/2014 17:21:00">17:21</option>
<option value="05/03/2014 17:22:00">17:22</option>
<option value="05/03/2014 17:23:00">17:23</option>
<option value="05/03/2014 17:24:00">17:24</option>
<option value="05/03/2014 17:25:00">17:25</option>
<option value="05/03/2014 17:26:00">17:26</option>
<option value="05/03/2014 17:27:00">17:27</option>
<option value="05/03/2014 17:28:00">17:28</option>
<option value="05/03/2014 17:29:00">17:29</option>
<option value="05/03/2014 17:30:00">17:30</option>
<option value="05/03/2014 17:31:00">17:31</option>
<option value="05/03/2014 17:32:00">17:32</option>
<option value="05/03/2014 17:33:00">17:33</option>
<option value="05/03/2014 17:34:00">17:34</option>
<option value="05/03/2014 17:35:00">17:35</option>
<option value="05/03/2014 17:36:00">17:36</option>
<option value="05/03/2014 17:37:00">17:37</option>
<option value="05/03/2014 17:38:00">17:38</option>
<option value="05/03/2014 17:39:00">17:39</option>
<option value="05/03/2014 17:40:00">17:40</option>
<option value="05/03/2014 17:41:00">17:41</option>
<option value="05/03/2014 17:42:00">17:42</option>
<option value="05/03/2014 17:43:00">17:43</option>
<option value="05/03/2014 17:44:00">17:44</option>
<option value="05/03/2014 17:45:00">17:45</option>
<option value="05/03/2014 17:46:00">17:46</option>
<option value="05/03/2014 17:47:00">17:47</option>
<option value="05/03/2014 17:48:00">17:48</option>
<option value="05/03/2014 17:49:00">17:49</option>
<option value="05/03/2014 17:50:00">17:50</option>
<option value="05/03/2014 17:51:00">17:51</option>
<option value="05/03/2014 17:52:00">17:52</option>
<option value="05/03/2014 17:53:00">17:53</option>
<option value="05/03/2014 17:54:00">17:54</option>
<option value="05/03/2014 17:55:00">17:55</option>
<option value="05/03/2014 17:56:00">17:56</option>
<option value="05/03/2014 17:57:00">17:57</option>
<option value="05/03/2014 17:58:00">17:58</option>
<option value="05/03/2014 17:59:00">17:59</option>
<option value="05/03/2014 18:00:00">18:00</option>
<option value="05/03/2014 18:01:00">18:01</option>
<option value="05/03/2014 18:02:00">18:02</option>
<option value="05/03/2014 18:03:00">18:03</option>
<option value="05/03/2014 18:04:00">18:04</option>
<option value="05/03/2014 18:05:00">18:05</option>
<option value="05/03/2014 18:06:00">18:06</option>
<option value="05/03/2014 18:07:00">18:07</option>
<option value="05/03/2014 18:08:00">18:08</option>
<option value="05/03/2014 18:09:00">18:09</option>
<option value="05/03/2014 18:10:00">18:10</option>
<option value="05/03/2014 18:11:00">18:11</option>
<option value="05/03/2014 18:12:00">18:12</option>
<option value="05/03/2014 18:13:00">18:13</option>
<option value="05/03/2014 18:14:00">18:14</option>
<option value="05/03/2014 18:15:00">18:15</option>
<option value="05/03/2014 18:16:00">18:16</option>
<option value="05/03/2014 18:17:00">18:17</option>
<option value="05/03/2014 18:18:00">18:18</option>
<option value="05/03/2014 18:19:00">18:19</option>
<option value="05/03/2014 18:20:00">18:20</option>
<option value="05/03/2014 18:21:00">18:21</option>
<option value="05/03/2014 18:22:00">18:22</option>
<option value="05/03/2014 18:23:00">18:23</option>
<option value="05/03/2014 18:24:00">18:24</option>
<option value="05/03/2014 18:25:00">18:25</option>
<option value="05/03/2014 18:26:00">18:26</option>
<option value="05/03/2014 18:27:00">18:27</option>
<option value="05/03/2014 18:28:00">18:28</option>
<option value="05/03/2014 18:29:00">18:29</option>
<option value="05/03/2014 18:30:00">18:30</option>
<option value="05/03/2014 18:31:00">18:31</option>
<option value="05/03/2014 18:32:00">18:32</option>
<option value="05/03/2014 18:33:00">18:33</option>
<option value="05/03/2014 18:34:00">18:34</option>
<option value="05/03/2014 18:35:00">18:35</option>
<option value="05/03/2014 18:36:00">18:36</option>
<option value="05/03/2014 18:37:00">18:37</option>
<option value="05/03/2014 18:38:00">18:38</option>
<option value="05/03/2014 18:39:00">18:39</option>
<option value="05/03/2014 18:40:00">18:40</option>
<option value="05/03/2014 18:41:00">18:41</option>
<option value="05/03/2014 18:42:00">18:42</option>
<option value="05/03/2014 18:43:00">18:43</option>
<option value="05/03/2014 18:44:00">18:44</option>
<option value="05/03/2014 18:45:00">18:45</option>
<option value="05/03/2014 18:46:00">18:46</option>
<option value="05/03/2014 18:47:00">18:47</option>
<option value="05/03/2014 18:48:00">18:48</option>
<option value="05/03/2014 18:49:00">18:49</option>
<option value="05/03/2014 18:50:00">18:50</option>
<option value="05/03/2014 18:51:00">18:51</option>
<option value="05/03/2014 18:52:00">18:52</option>
<option value="05/03/2014 18:53:00">18:53</option>
<option value="05/03/2014 18:54:00">18:54</option>
<option value="05/03/2014 18:55:00">18:55</option>
<option value="05/03/2014 18:56:00">18:56</option>
<option value="05/03/2014 18:57:00">18:57</option>
<option value="05/03/2014 18:58:00">18:58</option>
<option value="05/03/2014 18:59:00">18:59</option>
<option value="05/03/2014 19:00:00">19:00</option>
<option value="05/03/2014 19:01:00">19:01</option>
<option value="05/03/2014 19:02:00">19:02</option>
<option value="05/03/2014 19:03:00">19:03</option>
<option value="05/03/2014 19:04:00">19:04</option>
<option value="05/03/2014 19:05:00">19:05</option>
<option value="05/03/2014 19:06:00">19:06</option>
<option value="05/03/2014 19:07:00">19:07</option>
<option value="05/03/2014 19:08:00">19:08</option>
<option value="05/03/2014 19:09:00">19:09</option>
<option value="05/03/2014 19:10:00">19:10</option>
<option value="05/03/2014 19:11:00">19:11</option>
<option value="05/03/2014 19:12:00">19:12</option>
<option value="05/03/2014 19:13:00">19:13</option>
<option value="05/03/2014 19:14:00">19:14</option>
<option value="05/03/2014 19:15:00">19:15</option>
<option value="05/03/2014 19:16:00">19:16</option>
<option value="05/03/2014 19:17:00">19:17</option>
<option value="05/03/2014 19:18:00">19:18</option>
<option value="05/03/2014 19:19:00">19:19</option>
<option value="05/03/2014 19:20:00">19:20</option>
<option value="05/03/2014 19:21:00">19:21</option>
<option value="05/03/2014 19:22:00">19:22</option>
<option value="05/03/2014 19:23:00">19:23</option>
<option value="05/03/2014 19:24:00">19:24</option>
<option value="05/03/2014 19:25:00">19:25</option>
<option value="05/03/2014 19:26:00">19:26</option>
<option value="05/03/2014 19:27:00">19:27</option>
<option value="05/03/2014 19:28:00">19:28</option>
<option value="05/03/2014 19:29:00">19:29</option>
<option value="05/03/2014 19:30:00">19:30</option>
<option value="05/03/2014 19:31:00">19:31</option>
<option value="05/03/2014 19:32:00">19:32</option>
<option value="05/03/2014 19:33:00">19:33</option>
<option value="05/03/2014 19:34:00">19:34</option>
<option value="05/03/2014 19:35:00">19:35</option>
<option value="05/03/2014 19:36:00">19:36</option>
<option value="05/03/2014 19:37:00">19:37</option>
<option value="05/03/2014 19:38:00">19:38</option>
<option value="05/03/2014 19:39:00">19:39</option>
<option value="05/03/2014 19:40:00">19:40</option>
<option value="05/03/2014 19:41:00">19:41</option>
<option value="05/03/2014 19:42:00">19:42</option>
<option value="05/03/2014 19:43:00">19:43</option>
<option value="05/03/2014 19:44:00">19:44</option>
<option value="05/03/2014 19:45:00">19:45</option>
<option value="05/03/2014 19:46:00">19:46</option>
<option value="05/03/2014 19:47:00">19:47</option>
<option value="05/03/2014 19:48:00">19:48</option>
<option value="05/03/2014 19:49:00">19:49</option>
<option value="05/03/2014 19:50:00">19:50</option>
<option value="05/03/2014 19:51:00">19:51</option>
<option value="05/03/2014 19:52:00">19:52</option>
<option value="05/03/2014 19:53:00">19:53</option>
<option value="05/03/2014 19:54:00">19:54</option>
<option value="05/03/2014 19:55:00">19:55</option>
<option value="05/03/2014 19:56:00">19:56</option>
<option value="05/03/2014 19:57:00">19:57</option>
<option value="05/03/2014 19:58:00">19:58</option>
<option value="05/03/2014 19:59:00">19:59</option>
<option value="05/03/2014 20:00:00">20:00</option>
<option value="05/03/2014 20:01:00">20:01</option>
<option value="05/03/2014 20:02:00">20:02</option>
<option value="05/03/2014 20:03:00">20:03</option>
<option value="05/03/2014 20:04:00">20:04</option>
<option value="05/03/2014 20:05:00">20:05</option>
<option value="05/03/2014 20:06:00">20:06</option>
<option value="05/03/2014 20:07:00">20:07</option>
<option value="05/03/2014 20:08:00">20:08</option>
<option value="05/03/2014 20:09:00">20:09</option>
<option value="05/03/2014 20:10:00">20:10</option>
<option value="05/03/2014 20:11:00">20:11</option>
<option value="05/03/2014 20:12:00">20:12</option>
<option value="05/03/2014 20:13:00">20:13</option>
<option value="05/03/2014 20:14:00">20:14</option>
<option value="05/03/2014 20:15:00">20:15</option>
<option value="05/03/2014 20:16:00">20:16</option>
<option value="05/03/2014 20:17:00">20:17</option>
<option value="05/03/2014 20:18:00">20:18</option>
<option value="05/03/2014 20:19:00">20:19</option>
<option value="05/03/2014 20:20:00">20:20</option>
<option value="05/03/2014 20:21:00">20:21</option>
<option value="05/03/2014 20:22:00">20:22</option>
<option value="05/03/2014 20:23:00">20:23</option>
<option value="05/03/2014 20:24:00">20:24</option>
<option value="05/03/2014 20:25:00">20:25</option>
<option value="05/03/2014 20:26:00">20:26</option>
<option value="05/03/2014 20:27:00">20:27</option>
<option value="05/03/2014 20:28:00">20:28</option>
<option value="05/03/2014 20:29:00">20:29</option>
<option value="05/03/2014 20:30:00">20:30</option>
<option value="05/03/2014 20:31:00">20:31</option>
<option value="05/03/2014 20:32:00">20:32</option>
<option value="05/03/2014 20:33:00">20:33</option>
<option value="05/03/2014 20:34:00">20:34</option>
<option value="05/03/2014 20:35:00">20:35</option>
<option value="05/03/2014 20:36:00">20:36</option>
<option value="05/03/2014 20:37:00">20:37</option>
<option value="05/03/2014 20:38:00">20:38</option>
<option value="05/03/2014 20:39:00">20:39</option>
<option value="05/03/2014 20:40:00">20:40</option>
<option value="05/03/2014 20:41:00">20:41</option>
<option value="05/03/2014 20:42:00">20:42</option>
<option value="05/03/2014 20:43:00">20:43</option>
<option value="05/03/2014 20:44:00">20:44</option>
<option value="05/03/2014 20:45:00">20:45</option>
<option value="05/03/2014 20:46:00">20:46</option>
<option value="05/03/2014 20:47:00">20:47</option>
<option value="05/03/2014 20:48:00">20:48</option>
<option value="05/03/2014 20:49:00">20:49</option>
<option value="05/03/2014 20:50:00">20:50</option>
<option value="05/03/2014 20:51:00">20:51</option>
<option value="05/03/2014 20:52:00">20:52</option>
<option value="05/03/2014 20:53:00">20:53</option>
<option value="05/03/2014 20:54:00">20:54</option>
<option value="05/03/2014 20:55:00">20:55</option>
<option value="05/03/2014 20:56:00">20:56</option>
<option value="05/03/2014 20:57:00">20:57</option>
<option value="05/03/2014 20:58:00">20:58</option>
<option value="05/03/2014 20:59:00">20:59</option>
<option value="05/03/2014 21:00:00">21:00</option>
<option value="05/03/2014 21:01:00">21:01</option>
<option value="05/03/2014 21:02:00">21:02</option>
<option value="05/03/2014 21:03:00">21:03</option>
<option value="05/03/2014 21:04:00">21:04</option>
<option value="05/03/2014 21:05:00">21:05</option>
<option value="05/03/2014 21:06:00">21:06</option>
<option value="05/03/2014 21:07:00">21:07</option>
<option value="05/03/2014 21:08:00">21:08</option>
<option value="05/03/2014 21:09:00">21:09</option>
<option value="05/03/2014 21:10:00">21:10</option>
<option value="05/03/2014 21:11:00">21:11</option>
<option value="05/03/2014 21:12:00">21:12</option>
<option value="05/03/2014 21:13:00">21:13</option>
<option value="05/03/2014 21:14:00">21:14</option>
<option value="05/03/2014 21:15:00">21:15</option>
<option value="05/03/2014 21:16:00">21:16</option>
<option value="05/03/2014 21:17:00">21:17</option>
<option value="05/03/2014 21:18:00">21:18</option>
<option value="05/03/2014 21:19:00">21:19</option>
<option value="05/03/2014 21:20:00">21:20</option>
<option value="05/03/2014 21:21:00">21:21</option>
<option value="05/03/2014 21:22:00">21:22</option>
<option value="05/03/2014 21:23:00">21:23</option>
<option value="05/03/2014 21:24:00">21:24</option>
<option value="05/03/2014 21:25:00">21:25</option>
<option value="05/03/2014 21:26:00">21:26</option>
<option value="05/03/2014 21:27:00">21:27</option>
<option value="05/03/2014 21:28:00">21:28</option>
<option value="05/03/2014 21:29:00">21:29</option>
<option value="05/03/2014 21:30:00">21:30</option>
<option value="05/03/2014 21:31:00">21:31</option>
<option value="05/03/2014 21:32:00">21:32</option>
<option value="05/03/2014 21:33:00">21:33</option>
<option value="05/03/2014 21:34:00">21:34</option>
<option value="05/03/2014 21:35:00">21:35</option>
<option value="05/03/2014 21:36:00">21:36</option>
<option value="05/03/2014 21:37:00">21:37</option>
<option value="05/03/2014 21:38:00">21:38</option>
<option value="05/03/2014 21:39:00">21:39</option>
<option value="05/03/2014 21:40:00">21:40</option>
<option value="05/03/2014 21:41:00">21:41</option>
<option value="05/03/2014 21:42:00">21:42</option>
<option value="05/03/2014 21:43:00">21:43</option>
<option value="05/03/2014 21:44:00">21:44</option>
<option value="05/03/2014 21:45:00">21:45</option>
<option value="05/03/2014 21:46:00">21:46</option>
<option value="05/03/2014 21:47:00">21:47</option>
<option value="05/03/2014 21:48:00">21:48</option>
<option value="05/03/2014 21:49:00">21:49</option>
<option value="05/03/2014 21:50:00">21:50</option>
<option value="05/03/2014 21:51:00">21:51</option>
<option value="05/03/2014 21:52:00">21:52</option>
<option value="05/03/2014 21:53:00">21:53</option>
<option value="05/03/2014 21:54:00">21:54</option>
<option value="05/03/2014 21:55:00">21:55</option>
<option value="05/03/2014 21:56:00">21:56</option>
<option value="05/03/2014 21:57:00">21:57</option>
<option value="05/03/2014 21:58:00">21:58</option>
<option value="05/03/2014 21:59:00">21:59</option>
<option value="05/03/2014 22:00:00">22:00</option>
<option value="05/03/2014 22:01:00">22:01</option>
<option value="05/03/2014 22:02:00">22:02</option>
<option value="05/03/2014 22:03:00">22:03</option>
<option value="05/03/2014 22:04:00">22:04</option>
<option value="05/03/2014 22:05:00">22:05</option>
<option value="05/03/2014 22:06:00">22:06</option>
<option value="05/03/2014 22:07:00">22:07</option>
<option value="05/03/2014 22:08:00">22:08</option>
<option value="05/03/2014 22:09:00">22:09</option>
<option value="05/03/2014 22:10:00">22:10</option>
<option value="05/03/2014 22:11:00">22:11</option>
<option value="05/03/2014 22:12:00">22:12</option>
<option value="05/03/2014 22:13:00">22:13</option>
<option value="05/03/2014 22:14:00">22:14</option>
<option value="05/03/2014 22:15:00">22:15</option>
<option value="05/03/2014 22:16:00">22:16</option>
<option value="05/03/2014 22:17:00">22:17</option>
<option value="05/03/2014 22:18:00">22:18</option>
<option value="05/03/2014 22:19:00">22:19</option>
<option value="05/03/2014 22:20:00">22:20</option>
<option value="05/03/2014 22:21:00">22:21</option>
<option value="05/03/2014 22:22:00">22:22</option>
<option value="05/03/2014 22:23:00">22:23</option>
<option value="05/03/2014 22:24:00">22:24</option>
<option value="05/03/2014 22:25:00">22:25</option>
<option value="05/03/2014 22:26:00">22:26</option>
<option value="05/03/2014 22:27:00">22:27</option>
<option value="05/03/2014 22:28:00">22:28</option>
<option value="05/03/2014 22:29:00">22:29</option>
<option value="05/03/2014 22:30:00">22:30</option>
<option value="05/03/2014 22:31:00">22:31</option>
<option value="05/03/2014 22:32:00">22:32</option>
<option value="05/03/2014 22:33:00">22:33</option>
<option value="05/03/2014 22:34:00">22:34</option>
<option value="05/03/2014 22:35:00">22:35</option>
<option value="05/03/2014 22:36:00">22:36</option>
<option value="05/03/2014 22:37:00">22:37</option>
<option value="05/03/2014 22:38:00">22:38</option>
<option value="05/03/2014 22:39:00">22:39</option>
<option value="05/03/2014 22:40:00">22:40</option>
<option value="05/03/2014 22:41:00">22:41</option>
<option value="05/03/2014 22:42:00">22:42</option>
<option value="05/03/2014 22:43:00">22:43</option>
<option value="05/03/2014 22:44:00">22:44</option>
<option value="05/03/2014 22:45:00">22:45</option>
<option value="05/03/2014 22:46:00">22:46</option>
<option value="05/03/2014 22:47:00">22:47</option>
<option value="05/03/2014 22:48:00">22:48</option>
<option value="05/03/2014 22:49:00">22:49</option>
<option value="05/03/2014 22:50:00">22:50</option>
<option value="05/03/2014 22:51:00">22:51</option>
<option value="05/03/2014 22:52:00">22:52</option>
<option value="05/03/2014 22:53:00">22:53</option>
<option value="05/03/2014 22:54:00">22:54</option>
<option value="05/03/2014 22:55:00">22:55</option>
<option value="05/03/2014 22:56:00">22:56</option>
<option value="05/03/2014 22:57:00">22:57</option>
<option value="05/03/2014 22:58:00">22:58</option>
<option value="05/03/2014 22:59:00">22:59</option>
<option value="05/03/2014 23:00:00">23:00</option>
</select>

<input type="hidden" value="False" name="currentOrderCheckBoxChanged" id="currentOrderCheckBoxChanged"><input type="hidden" value="False" name="selectedOrderDateChanged" id="selectedOrderDateChanged">

</form>            
        


    


							</div>
						</div>
						<br>
						<br>
						
						<div id="order-time-selection-button-form-container">                
							<form id="frmConfirmOrder" action="javascript:frmConfirmOrderSubmit()" >
							<div class="button-wrapper">
							
							<div class="button-container">
								<input type="submit" value="Confirm Order" name="btnStartOrder" id="btnStartOrder" class="btn btn-success">
							</div>
							
							</form>
							</div>
						</div>
						<div class="clear">
						</div>
						<div id="NeededForIE7">
							&nbsp;</div>	
					</div>
					
					
					</div>
				</div>

				<div class="span2">&nbsp;</div>
			</div>
			
		<!-- 3rd page : listing of records -->	
	<div class="row" id="listingContainer" style="display:none;">	
	   
	   fdsfsdf
	   
	   
	   
	   
	   
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


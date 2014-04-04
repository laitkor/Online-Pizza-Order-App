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
<script src="js/QuantityUpDown.js"></script>

<!--for json array-->
<script type="text/javascript" src="json/formjs.js"></script>
<script type="text/javascript" src="json/js2form.js"></script>
<script type="text/javascript" src="json/json.js"></script>
<script type="text/javascript" src="js/script.js"></script> 

</head>
<body id="body">
<pre><code id="testArea"></code>
</pre>
<input type="hidden" id="location-val" >
<input type="hidden" id="time-val" >
<input type="hidden" id="selected-pizza-item" >
<input type="hidden" id="ordered-pizza-item" >


	<form id="pickupAddress" style="display:none;" >
		<input type="text" name="locationSelected" value="">
		<input type="text" name="TownCity" value="">
		<input type="text" name="District" value="">
		<input type="text" name="addressMode" value="">
		

	</form>

<section id="bodySection">
	<div id="featureSectiom">
		<div class="container">
			<div class="row" id="mainLocationContainer">
			
				<div class="span2">&nbsp;</div>

				<div class="span8 text-center grad1" id="mainFirstDiv" >
					<h1 class="pageTitle">Pizza Hut</h1>
					<div class="span8 text-center" id="delivery_pickup">
					  <script src="js/backbone-helper.js"></script>
					  <div class="span8">&nbsp;</div>
					  <!----------------->
					
                    
                    <div class="span3 text-left margin-left80 formDiv" id="mainDivDelPickup">
                        <div style="display: none;" id="CollectionForm">
<div id="storeLocatoreCollectionPlaceHolder">
<form id="frmCollection" action="javascript:frmCollectionSubmit()" >
<!--<form id="frmCollection">-->
<div>

<label class="radio text-left">
<input type="radio" name="addressMode" id="collectionAddressModePostcode" value="option1" checked>
Store Search
</label>
            <div id="postcode-container">
                <fieldset>
                   <!-- <legend></legend>-->
                    <div>
                        <div class="editor-label"><label class="popup-heading-black" for="SelectedStore">Store</label></div>
                        <div class="editor-field">
							<input type="hidden" id="location-selected-val"  name="locationSelected">
							<select name="SelectedStoreId" id="SelectedStoreId" >
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
			<input type="radio" name="addressMode" id="collectionAddressModeLocalisation" value="localisationSearch" >
			Address Search
			</label>




<div id="address-container" style="display: none;">
    <fieldset>
       <!-- <legend></legend>-->

	<div>
	   
		<div class="editor-field">
			<input type="text"  placeholder="Type / Select City" class="class="focused"" title="City" name="TownCity" id="TownCity" data-val="true" data-val-required="City is required"> 
			<br>
			<span id="TownCityError" class="error"></span> 
			
		</div>
	</div>
	<div>
		
		<div class="editor-field">
			<input type="text"  placeholder="Type / Select Locality" class="focused" title="Locality" name="District" id="District"> 
			<br>
			<span id="DistrictError" class="error"></span> 
 
			
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
					
					<div class="text-left">
						<h1>PICK UP</h1>
							

<br>
<div class="pop-box-container">
    <span class="pop-box-lefttext">I am located at</span>
    <span class="btn btn-danger" id="inputted-address"></span>
    <span id="storedetail-change-link"  class="btn btn-link">Change</span>
</div>
<br>
<div class="ordertime-address-container">
    
    <div class="ordertime-address-storeraddress">
        <div class="ordertime-address-heading">
                <h4> Your Neighboring Hut</h4>
           		<div class="streetname" id="inputted-address-hut">  </div>
        </div>
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
  
							<form id="frmConfirmOrder" action="javascript:frmConfirmOrderSubmit()" >
								<input type="checkbox" value="true" name="timeIsCurrentOrderSelected" id="IsCurrentOrderSelected" checked="checked">
								<span>Now</span>
								<br>
								<input type="checkbox" value="true" updatable="True" name="timeIsFutureOrderSelected" id="IsFutureOrderSelected">
								
							   <span>Later</span>
								<br>
								<br> 
								<?php   $curr_hr = date('H'); $curr_mins = date('i'); ?>
								<select name="timeSelectedOrderTime" id="SelectedOrderTime" style="width:100px;">
								<?php 
									for ($h=$curr_hr;$h<=23;$h++){
										if($h<=9 ) {if($h != $curr_hr){$h="0".$h;}}
										for ($m=0;$m<60;$m++){
										if($m<=9 ) {$m="0".$m;}
										
									?>
										<option value="<?php echo date("d/m/Y $h:$m:00");?>"><?php echo date("$h:$m");?></option>
									
									<?php
										}
									}
								?>
								</select>

							</div>
						</div>
						
						
						<div id="order-time-selection-button-form-container">                
							<!--<form id="frmConfirmOrder" action="javascript:frmConfirmOrderSubmit()" >-->
							<div class="button-wrapper">
							<div class="button-container">
								<input type="submit" value="Confirm Order" name="btnStartOrder" id="btnStartOrder" class="btn btn-success">
							</div>
							</div>
						</div>
						</form>
						<br>
						<br>
						<div class="clear"></div>
					</div>
					
					</div>
				</div>

				<div class="span2">&nbsp;</div>
			</div>
			
		<!-- 3rd page : listing of records -->	
	<div class="row" id="listingContainer" style="display:none;">	
	   <div class="listingMainDiv">
	   <div class="span10 margin-left0 width930" id="viewProductCollectionDiv">
	   <?php for ($i=0;$i<10;$i++) { ?>
	   	
		   <div class="span3 margin-left-top30 " >
		   <form id="frmListingCollection<?php echo $i;?>" action="javascript:frmViewProductSubmit(<?php echo $i;?>)" >
			<input type="hidden" name="productName<?php echo $i;?>" value="Italian Treat test <?php echo $i;?>" >
			<input type="hidden" name="productNumber" value="<?php echo $i;?>" >
				<div class="Famous-box-img">
					<img alt="Italian Treat BP" src="images/pizza_1.jpg">
				</div>
				<div class="Famous-box-titles">Italian Treat test <?php echo $i;?>  </div>
				<div class="Famous-box-normalproductform">
	<div class="small-btn"><div class="small-btn-top"></div><div class="small-btn-left"></div><div class="small-btn-middle"><input type="submit" value="Customize &amp; Add"  name="btnViewProduct<?php echo $i;?>" id="btnViewProduct<?php echo $i;?>" class="btn btn-success"></div><div class="small-btn-right"></div><div class="small-btn-base"></div></div>               </div>
			</form>
			</div>
		
			
	 <?php } ?>

		
		</div>
		
		<!-- 4th page : detail of products -->	
		<div class="span10 margin-left0 width930" id="viewProductDetailDiv" style="display:none;">
		<form id="frmAddProductSubmitDetail" action="javascript:frmAddProductSubmit()" >
			<div class="productDetailDiv" >
				<div id="main-products">
    <input type="hidden" value="" name="hdnProductQuantity" id="hdnProductQuantity">


    <div class="basics">
        <div class="choose-recipie">
           <h3 id="item-name"> </h3>
        </div>
            
        <div class="toppings-background">    
            <div class="choose-basics">
                Choose your crust &amp; size  </div>
        </div>
		
        <div class="basics-options">
                <select onChange="" name="ddlBaseSelected" id="ddlBaseSelected"><option value="6" selected="selected">Big Pizza</option>
</select>       
				 <select name="ddlSizeSelected" id="ddlSizeSelected"><option value="4" selected="selected">Medium(Serves 2)</option>
</select>         
        </div>        
        
    </div>
    <div class="clear"></div>
    <div class="toppings-heading">
        <div class="toppings-background choose-basics">
            <span class="choose-toppings ">
                Add / Remove Toppings
            </span>
			 <span class="toppings-reset">
				<a class="reset" href="#">Reset</a>
			</span>
        </div>
       
        <div class="cpbuilder-divider-line"></div>
        <div class="clear"></div>
    </div>
	<div class="topping-main">
    <div class="default-recipe-toppings">
        <div class="alltoppings">
			<div id="veg-topping">
            <div class="toppingsheading1">
                Cheese
                <div class="toppingspicture">
                    <img align="top" src="/PHIndia/Web/Assets/PHIN/Images/topping-cheese.png" alt="">
                </div>
            </div>
                <div id="divToppingGroupId_462" class="toppinggroup">
                    <div onClick="javascript:void(0);" class="toppinggroup-name">
                        <div class="toppinggroup-name-title">
                            <div class="radio">
                                <span>
									<label class="radio text-left">
									<input type="radio"  value="Cheese Rs 65.00" name="cheese" class="radioClass" >
									Cheese Rs 65.00 
									</label>
                                          
                                </span>
                            </div>
                            
                       </div>
                    </div>                    
                </div>
			</div>
			
			<div id="nveg-topping">
            <div class="toppingsheading">
                Non Veg Toppings
            </div>
			 <?php for ($i=0;$i<5;$i++) { ?>
                <div id="divToppingGroupId_398" class="toppinggroup">
                    <div onClick="javascript:void(0);" class="toppinggroup-name">
                        <div class="toppinggroup-name-title">
                            <div class="radio">
                                <span>
									<label class="radio text-left">
									<input type="radio"  value="Chunky Chicken Type <?php echo $i;?> Rs 65.00" name="nonVegToppings<?php echo $i;?>" class="radioClass" >
									 Chunky Chicken Type <?php echo $i;?> Rs 65.00 
									</label>
                                   
                                </span>
                            </div>
                       </div>
                    </div>                                  
                </div>
				 <?php } ?>
				
               
			</div>
			<div id="veg-topping">
            <div class="toppingsheading">
                Veg Toppings
            </div>
			
			 <?php for ($i=0;$i<10;$i++) { ?>
                <div id="divToppingGroupId_386" class="toppinggroup">
                    <div onClick="javascript:void(0);" class="toppinggroup-name">
                        <div class="toppinggroup-name-title">
                            <div class="radio">
                                 <span>
									<label class="radio text-left">
									<input type="radio"  value="(v)Capsicum Type <?php echo $i;?> Rs 65.00" name="vegToppings<?php echo $i;?>"  class="radioClass" >
									 (v)Capsicum Type <?php echo $i;?>  Rs 65.00 
									</label>
                                </span>
                            </div>
                         </div>
                    </div>                                    
                </div>
				<?php } ?>
                
                
            </div>    
        </div>


    </div>

    <div id="divToppingPictureContainedId" class="toppings-pic">
            <img alt=" " src="/PHIndia/Web/Cache/470_Product_Small_Image_en-GB.jpg" class="toppings-pic-img">
            <div id="pizza-topping-overlay-container">

            </div>
               <div class="toppings-addorder">
                    <div class="toppings-addorder-text">
                        <div class="toppings-quantity">
                            <span>Quantity:</span>
            
                                <input type="button" value="-" onClick="QuantityUpDown.Decrement({inputField: 'Quantity'})" class="QuantityUpDownButton btn btn-danger">
<input type="text" value="1" name="Quantity" maxlength="2" id="Quantity" class="inputTwentyFive numericbasketqty" style="width:20px;margin:0;height:15px;">                                <input type="button" value="+" onClick="QuantityUpDown.Increment({inputField: 'Quantity'})" class="QuantityUpDownButton btn btn-danger">
Rs 225.00                        </div>
                        <div class="small-btnTwo">
                            <div class="button-wrapper"><div class="clear"></div><div class="button-start"></div><div class="button-container"><input type="submit" value="Add to Order" name="btnAddToBasket" id="btnAddToBasket" class="btn btn-success margin-add-button"></div><div class="button-end"></div><div class="clear"></div></div> 
                        </div>  
                    </div>
                </div>
       
    </div> 
	
	
	</div>
	 
    <div class="clear"></div>
    <br>
    <br>      
    <div id="last">
    </div>
</div>
		
		</div>
		
		</form>
		</div>
		
		<!-- end 4th page : detail of products -->	
		
		
		<div class="span10 margin-left0 width930" id="orderProductDetailDiv" style="display:none;">
			<div class="productDetailDiv" >
			fgfdgdfg
			</div>
		</div>
		
		<div class="span2 margin-left0 width247 account-detail">
			<div class="account-head">ACCOUNT DETAIL</div>
							
			<div class="account-detail-main">
				<div id="yourOrderDiv">
					<div class="account-slid margin-bottom20 text-left"  id="slideToggleAccount">&nbsp;&nbsp;&nbsp;&nbsp;YOUR ORDER</div>
					<div class="slideToggleAccountInfo margin-bottom20" style="display:none;">
						<div id="emptyCart">
						<strong>
							Your cart is currently empty.
							<br>
							Start ordering now!
						</strong><br><br></div>
						
						<div id="cartItemDetailDiv" style="display:none;" >
							<div id="cartItemDetail" > </div>
							<div id="divOrderCouponTextInMiniBasket">
							Please note that coupon will be applied in order review page.
							</div>
							<div class="red-btn"><span class="btn btn-success" id="checkout-now">CHECKOUT NOW</span></div>
						</div>
					
					</div>
				</div>
				<div class="account-slid margin-bottom20"  id="slideToggleDeliveryDetail">DELIVERY OR PICK UP DETAILS</div>
				<div class="slideToggleDeliveryDetailInfo margin-bottom20" style="display:none;">
					<div class="order-box-outer">
						<div class="order-box-details">
							<div class="order-box-text-one"> You have selected <h3>Pick Up</h3></div>
						</div>
						<br/><br/><br/>
						<!-- This div to be populated with future order details... calendar, time etc..-->

						<div class="order-box-address" id="">
							<span class="store-detail-heading">Your Neighboring Hut</span><br>
							<div id="order-box-address"></div>
							<div class="postcodeorzip">Phone:</div> 
							<div class="telephone">+91 79 39883988</div>
				
						</div>
					
						<div class="red-btn"><span class="btn btn-success" id="start-over">START OVER</span></div>
					
					</div>
				</div>

<!--script for toggle div	-->		
<script type="text/javascript">
	$("#slideToggleAccount").click(function () {
	   $('.slideToggleAccountInfo').slideToggle();
	});
	
	$("#slideToggleDeliveryDetail").click(function () {
	   $('.slideToggleDeliveryDetailInfo').slideToggle();
	});
</script>

	<!--		<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "show";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "hide";
	}
} 
</script>
 
<a id="displayTexot" href="javascript:toggle();">show</a> <== click Here
<div id="toggleText" style="display: none"><h1>peek-a-boo</h1></div>-->
		
		</div>
		
		 </div>
	   
	   
	   
	   
	   
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


//////////////////////////////////////////////////////////////////////////////////////
//----------------------------------MakeWindow()---------------------------------	//
//                                                                           	    //
// This file is created with Backbone JS, Jquery and JSON with Backbone      	    //
//                                                                                  //
//                                                                           	    //
//////////////////////////////////////////////////////////////////////////////////////

	// submit location form : at 1st page Pickup form submit
	function frmCollectionSubmit()
	{ 
		var flg = 1;
		// validate form from Backbone JS
		if($("input:radio[id='collectionAddressModeLocalisation']").is(":checked")) {
		
			var Order = Backbone.Model.extend({ 
			  validate: function(attrs, options) {
				if (attrs.TownCity == '') {
				  return "TownCity";
				}else
				if (attrs.District == '') {
				  return "District";
				}else{
					 return "Success";
				}
			  }
			});
			
			var one = new Order({
			  title : "Success"
			});
			
			one.on("invalid", function(model, error) {
				if(error != ''){
					flg =0;
					if(error == "TownCity")	$("#TownCityError" ).html("can't be null!");
					else if(error == "District"){$("#DistrictError" ).html("can't be null!"); $("#TownCityError" ).html("");}
					else flg =1;
				}			
			 // alert(model.get("title") + " " + error + flg);
			});
			// assign the value
			one.save({
			  TownCity: $("#TownCity" ).val(),
			  District:  $("#District" ).val()
			});
			
		}
		
		if(flg == 1){
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
			
			// get json elements into form elements
			//populateForm();
		
			Address = Backbone.Model.extend({});
		
			AddressCollection = Backbone.Collection.extend({
				model: Address
			});
			
			var jsonString = $("#location-val" ).val();

			var addressArray = JSON.parse(jsonString);
			var addressCollection = new AddressCollection(addressArray);
			addressCollection.fetch();
			//alert(JSON.stringify(addressCollection));
			
			 _.each(addressCollection.models, function (msg) {
			 	if(msg.get("addressMode") == "option1"){
					$( "#inputted-address" ).html( msg.get("locationSelected") + ", India");
					$( "#inputted-address-hut" ).html( msg.get("locationSelected")+ "<br/> India" );
					$( "#order-box-address" ).html( msg.get("locationSelected")+ "<br/> India" );
				}else{
					$( "#inputted-address" ).html( msg.get("District")+ ", " + msg.get("TownCity"));
					$( "#inputted-address-hut" ).html( msg.get("District")+ "<br/> " + msg.get("TownCity") + "<br/> India" );
					$( "#order-box-address" ).html( msg.get("District")+ "<br/> " + msg.get("TownCity") + "<br/> India" );

				}
			// alert("code => "+ msg.get("addressMode") +", message => "+ msg.get("locationSelected"));
			 // console.log( "code => "+ msg.get("addressMode") +", message => "+ msg.get("addressMode"));
			 });
			 
			  var ListAddress = Backbone.View.extend({
			    el: $('div#featureSectiom'), // el attaches to existing element
			  	events: {
				  'click span#storedetail-change-link': 'showMain'
				},
				
				 initialize: function(){
				  //this.showMain();
				},
				
				 showMain: function(){
				  $('div#mainFirstDiv', this.el).show();
				  $('div#location_detail', this.el).hide();
				}
							
			  });
			  
			   var listAddress = new ListAddress();
		
		}
	}
	// convert json  to form value
	/*function populateForm()
	{
		var data = document.getElementById('location-val').value;
		data = JSON.parse(data);
		js2form(document.getElementById('pickupAddress'), data);
	}*/
	
	
	// founction to submit order and get listing page of items
	function frmConfirmOrderSubmit()
	{
		$('div#mainLocationContainer', this.el).hide();
		$('div#listingContainer', this.el).show();	
		$('div#viewProductCollectionDiv', this.el).show();
		$('div#viewProductDetailDiv', this.el).hide();	
		$('div#yourOrderDiv', this.el).show();	
		$('div#orderProductDetailDiv', this.el).hide();	
		$('div#thankyouDiv', this.el).hide();	
		$('div#ordercheckoutDiv', this.el).hide();	
		
		
		
		$('#start-over').click(function() {
			$('div#listingContainer', this.el).hide();
			$('div#location_detail', this.el).hide();
			$('div#mainFirstDiv', this.el).show();	
			$('div#mainLocationContainer', this.el).show();	
			$('div#mainDivDelPickup', this.el).show();	
			
			$('div#emptyCart', this.el).show();
			$('div#cartItemDetailDiv', this.el).hide();
		});
				
		
		var formData = form2js('frmConfirmOrder', '.', true,
				function(node)
				{
					if (node.id && node.id.match(/callbackTest/))
					{
						return { name: node.id, value: node.innerHTML };
					}
				});
				
		$( "#testArea" ).append( JSON.stringify(formData, null, '\t') );
		$( "#time-val" ).val( JSON.stringify(formData, null, '\t') );
				
	
	}
	
	function frmViewProductSubmit(id)
	{ 
		$('div#viewProductCollectionDiv', this.el).hide();
		$('div#viewProductDetailDiv', this.el).show();	
		
		var formData = form2js('frmListingCollection'+id, '.', true,
				function(node)
				{
					if (node.id && node.id.match(/callbackTest/))
					{
						return { name: node.id, value: node.innerHTML };
					}
				});
				
		$( "#testArea" ).append( JSON.stringify(formData, null, '\t') );
		$( "#selected-pizza-item" ).val( JSON.stringify(formData, null, '\t') );
		
		 var counter = 1;
		
		
		
		
			PizzaItem = Backbone.Model.extend({});
		
			PizzaItemCollection = Backbone.Collection.extend({
				model: PizzaItem
			});
			
			var jsonString = $("#selected-pizza-item" ).val();

			var itemArray = JSON.parse(jsonString);
			var pizzaItemCollection = new PizzaItemCollection(itemArray);
			
			 _.each(pizzaItemCollection.models, function (msg) {
			 	$( "#item-name" ).html( msg.get("productName"+msg.get("productNumber")));
				$( "#hdnProductName" ).val( msg.get("productName"+msg.get("productNumber")));
				/*alert("#btnHdnName"+msg.get("productNumber"));
				$("#btnHdnName"+msg.get("productNumber")).click(function () {
 
					if(counter>10){
							alert("Only 10 orders allow");
							return false;
					}   
				 
					var newTextBoxDiv = $(document.createElement('div'))
						 .attr("id", 'TextBoxDiv' + counter);
				 
					newTextBoxDiv.after().html('<label>Textbox #'+ counter + ' : </label>' +
						  '<input type="text" name="textboxOrder' + counter + 
						  '" id="textbox' + counter + '" value="" >');
				 
					newTextBoxDiv.appendTo("#TextBoxesGroup");
				 
				 
					counter++;
				});*/
			 
			// alert("code => "+ msg.get("addressMode") +", message => "+ msg.get("locationSelected"));
			 // console.log( "code => "+ msg.get("addressMode") +", message => "+ msg.get("addressMode"));
			 });
			 
			 
		var UserView = Backbone.View.extend({
		parentview: null, // the parent view
	
		initialize: function () {
			
		},
	
		events: {
		    "click input[type=radio]": "onRadioClick"
		},
	
		onRadioClick: function (e) {
            e.stopPropagation();
            this.model.set({ Assignment: $(e.currentTarget).val() }, {silent:true}); // {silent: true} is optional. I'm only doing this to prevent an unnecessary re-rendering of the view
        }
	
		});
		
		 var listAddress = new UserView();
	}
	
	// for Add to order submit
	function frmAddProductSubmit()
	{
		$('div#viewProductDetailDiv', this.el).hide();
		$('div#viewProductCollectionDiv', this.el).show();	
		
		var formData = form2js('frmAddProductSubmitDetail', '.', true,
				function(node)
				{
					if (node.id && node.id.match(/callbackTest/))
					{
						return { name: node.id, value: node.innerHTML };
					}
				});
				
		$( "#testArea" ).append( JSON.stringify(formData, null, '\t') );
		$( "#ordered-pizza-item" ).val( JSON.stringify(formData, null, '\t') );
		
		var txtCnt=$("#counterValue").val();
		$( "#textboxOrder"+txtCnt ).val( JSON.stringify(formData, null, '\t') );
		//alert(txtCnt);
		//alert("#textboxOrder"+txtCnt);
		
		
		
 
    
 
     /*$("#removeButton").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
 
	counter--;
 
        $("#TextBoxDiv" + counter).remove();
 
     });
 
     $("#getButtonValue").click(function () {
 
	var msg = '';
	for(i=1; i<counter; i++){
   	  msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
	}
    	  alert(msg);
     });*/

        
		
		
		// for de-select all radio buttons		
		$("input:radio[class='radioClass']").each(function (i) {        
			this.checked = false;
		});
	
		$( "#Quantity" ).val('1');
		
		$('div#emptyCart', this.el).hide();
		$('div#cartItemDetailDiv', this.el).show();
		
		
		// using backbone JS for fetching ordering data
			OrderedPizzaItem = Backbone.Model.extend({});
		
			OrderedPizzaItemCollection = Backbone.Collection.extend({
				model: OrderedPizzaItem
			});
			
			var jsonString = $("#ordered-pizza-item" ).val();

			var itemOrderedArray = JSON.parse(jsonString);
			var pizzaOrderedItemCollection = new OrderedPizzaItemCollection(itemOrderedArray);
			
			 _.each(pizzaOrderedItemCollection.models, function (msg) {
			 	//$( "#cartItemDetail" ).html( msg.get("Quantity"));
				
				var inc = "QuantityUpDown.Increment({inputField: 'Quantity-25821082'})";
		var desc= "QuantityUpDown.Decrement({inputField: 'Quantity-25821082'})";
		var qty_id = '"Quantity-25821082"';
		
		var qty_id_txtbox = 'Quantity-'+txtCnt;
		var qty_id = '"Quantity-'+txtCnt+'"';
				
				$( "#cartItemDetail" ).append("<div id='orderbox" +txtCnt+"'> <div class='order-box-singleitems'> <div class='order-box-input' style='width: 43px;float:left;'><input class='QuantityUpDownButton btn btn-danger' onClick='QuantityUpDown.Decrement({inputField: "+qty_id+"})' value='-' type='button'><input name='"+qty_id_txtbox+"' id='"+qty_id_txtbox+"' size='1' value='"+msg.get("Quantity")+"' class='inputTwentyFive numericbasketqty' maxlength='2' type='text' style='width:20px;margin:0;height:15px;'><input class='QuantityUpDownButton btn btn-danger' onClick='QuantityUpDown.Increment({inputField: "+qty_id+"})' value='+' type='button'></div><div class='basket-item-drop' style='text-align: left; width: 148px; margin-left: 50px;'><div class='basket-item-arrow'></div><div class='order-box-item'><span class='order-item'>"+msg.get("hdnProductName")+"</span><br><span class='order-item-child'><span class='child-item'>"+msg.get("ddlBaseSelected")+"</span><span class='child-item'>,"+msg.get("ddlSizeSelected")+"</span><br></span><span class='order-price'><input type='hidden' value='"+msg.get("defaultPriceValue")+"' name='hdnItemPrice1"+txtCnt+"' id='hdnItemPrice1"+txtCnt+"' >Rs "+msg.get("defaultPriceValue")+"</span></div><div style='width: 46px; position: relative; left: 148px; top: -50px;'><div class='basket-item-edit'> <a href='javascript:void(0);' onClick=''>Edit</a>  </div><div class='order-box-cross'><div align='left' style='cursor:pointer;color:red;'><span onClick=removeBox('orderbox','"+txtCnt+"'); id='removeButton"+txtCnt+"' >X</span></div></div></div></div> </div></div>");
				var qty_id = '"Quantity-'+txtCnt+'-Quantity"';
				var qty_id_txtbox_order = 'Quantity-'+txtCnt+'-Quantity';
				
				$( "#cartItemDetailOrder" ).append("<div id='orderboxOrder" +txtCnt+"'> <div class='order-box-singleitems' style=' margin-bottom: 10px;'> <div class='order-box-input' style='float: left; width: 43px; margin-left: 10px;'><input class='QuantityUpDownButton btn btn-danger' onClick='QuantityUpDown.Decrement({inputField: "+qty_id+"})' value='-' type='button'><input name='"+qty_id_txtbox+"' id='"+qty_id_txtbox_order+"' size='1' value='"+msg.get("Quantity")+"' class='inputTwentyFive numericbasketqty' maxlength='2' type='text' style='width:20px;margin:0;height:15px;'><input class='QuantityUpDownButton btn btn-danger' onClick='QuantityUpDown.Increment({inputField: "+qty_id+"})' value='+' type='button'></div><div class='basket-item-drop' style='text-align: left; width: 448px; margin-left: 50px;'><div class='basket-item-arrow'></div><div class='order-box-item'><span class='order-item'><b>"+msg.get("hdnProductName")+"</b></span><br><span class='order-item-child'><span class='child-item'>"+msg.get("ddlBaseSelected")+"</span><span class='child-item'>,"+msg.get("ddlSizeSelected")+"</span><br></span><span class='order-price'>Rs "+msg.get("defaultPriceValue")+"</span></div><div style='width: 46px; position: relative; left: 748px; top: -50px;'><div class='order-box-cross'><div align='left' style='cursor:pointer;color:red;'><span onClick=removeBox('orderboxOrder','"+txtCnt+"'); id='removeButton"+txtCnt+"' >X</span></div></div></div></div> </div> </div>");
				
				
				$( "#cartItemDetailOrderFinal" ).append("<div id='orderboxFinal" +txtCnt+"'> <div class='order-box-singleitems' style=' margin-bottom: 10px;border-bottom:1px dashed #A8A6A6;min-height:70px;'> <div class='order-box-input' style='float: left; width: 43px; margin-left: 10px;'> <span class='order-price'>"+msg.get("Quantity")+"</span></div><div class='basket-item-drop' style='text-align: left; width: 448px; margin-left: 50px;'><div class='basket-item-arrow'></div><div class='order-box-item'><span class='order-item'><b>"+msg.get("hdnProductName")+"</b></span><br><span class='order-item-child'><span class='child-item'>"+msg.get("ddlBaseSelected")+"</span><span class='child-item'>,"+msg.get("ddlSizeSelected")+"</span><br></span></div><div style='position: relative; top: -38px; width: 111px; left: 674px;'><div class='order-box-cross'><div align='left' style='color:red;'><span class='order-price'>Rs "+msg.get("defaultPriceValue")+"</span></div></div></div></div> </div> </div>");
				
				
				$( "#cartItemDetailPaymentSummary" ).append("<div id='orderboxSummary" +txtCnt+"'> <div class='order-box-singleitems' style=' margin-bottom: 10px;border-bottom:1px dashed #A8A6A6;min-height:70px;'> <div class='order-box-input' style='float: left; width: 43px; margin-left: 10px;'> <span class='order-price'>"+msg.get("Quantity")+"</span></div><div class='basket-item-drop' style='text-align: left; width: 448px; margin-left: 50px;'><div class='basket-item-arrow'></div><div class='order-box-item'><span class='order-item'><b>"+msg.get("hdnProductName")+"</b></span><br><span class='order-item-child'><span class='child-item'>"+msg.get("ddlBaseSelected")+"</span><span class='child-item'>,"+msg.get("ddlSizeSelected")+"</span><br></span></div><div style='position: relative; top: -38px; width: 111px; left: 674px;'><div class='order-box-cross'><div align='left' style='color:red;'><span class='order-price'>Rs "+msg.get("defaultPriceValue")+"</span></div></div></div></div> </div> </div>");
				
				
				
				totalItemPrice("hdnItemPrice1",txtCnt);
				
				var json_val = $("#textboxOrder1").val();
				//json_decoded (json_val);
				
				//$( "#cartItemDetail" ).append("<div>gfdgdfg</div>");
			 
			// alert("code => "+ msg.get("addressMode") +", message => "+ msg.get("locationSelected"));
			 // console.log( "code => "+ msg.get("addressMode") +", message => "+ msg.get("addressMode"));
			 });
			 		
		$('#checkout-now').click(function() {
			$('div#viewProductDetailDiv', this.el).hide();
			$('div#viewProductCollectionDiv', this.el).hide();
			$('div#yourOrderDiv', this.el).hide();	
			$('div#orderProductDetailDiv', this.el).show();	
		});
		
		
		
	
		
	}
	
	
	
	// for Checkout submit
	function removeBox(id,cnt)
	{
		 $("#"+id+cnt).remove();
		 $("#TextBoxDiv"+cnt).remove();
		 $("#textboxOrdercounter"+cnt).remove();
		 $("#orderbox"+cnt).remove();
		 $("#orderboxOrder"+cnt).remove();
		 
		 $("#orderboxFinal"+cnt).remove();
		 $("#orderboxSummary"+cnt).remove();
		 $("#textboxOrder"+cnt).val('');
		 
		 
	
	}
	
	
	// for total amount
	function totalItemPrice(id,cnt)
	{
	 	var priceVal = $("#"+id+cnt).val();
		
		var dfultPrice = parseFloat($('#hdnItemInitialPrice1').val());
		var priceValAdded = parseFloat(priceVal);
		var total = parseFloat(dfultPrice + priceValAdded);
		$('#hdnItemInitialPrice1').val(total.toFixed(2));
		//$('currencyTotalMiniBasket')..html(total.toFixed(2)); 
		document.getElementById('currencyTotalMiniBasket').innerHTML  = total.toFixed(2);
		document.getElementById('cartItemDetailOrderSubTiotal').innerHTML  = total.toFixed(2);
		document.getElementById('cartItemDetailOrderFinalSubTiotal').innerHTML  = total.toFixed(2);
		document.getElementById('cartItemDetailOrderFinalTiotal').innerHTML  = total.toFixed(2);
		document.getElementById('cartItemDetailPaymentSummarySubTiotal').innerHTML  = total.toFixed(2);
		document.getElementById('cartItemDetailPaymentSummaryTiotal').innerHTML  = total.toFixed(2);
		
		
		
		
		
	}
	
	
	
	// for Checkout submit
	function frmCheckoutSubmit()
	{
		$('div#orderProductDetailDiv', this.el).hide();
		$('div#ordercheckoutDiv', this.el).show();	
		
	}
	
	
	// for Checkout detail submit
	function frmCheckoutDetailSubmit()
	{
		//$('div#ordercheckoutDiv', this.el).hide();
		//$('div#thankyouDiv', this.el).show();	

			// validate form data
			var Order = Backbone.Model.extend({ 
			  validate: function(attrs, options) {
				if (attrs.FirstName == '') {
				  return "FirstName";
				}else
				if (attrs.LastName == '') {
				  return "LastName";
				}else
				if (attrs.ContactEmailPrimary == '') {
				  return "ContactEmailPrimary";
				}else
				if (attrs.ContactTelephonePrimary == '') {
				  return "ContactTelephonePrimary";
				}else{
					 return "Success";
				}
			  }
			});
			
			var one = new Order({
			  title : "Success"
			});
			
			one.on("invalid", function(model, error) {
				if(error != ''){
					flg =0;
					if(error == "FirstName"){	$("#confirmOrderError" ).html("First Name is Required!");}
					else if(error == "LastName"){$("#confirmOrderError" ).html("Last Name is Required!"); }
					else if(error == "ContactEmailPrimary"){$("#confirmOrderError" ).html("Email is Required!"); }
					else if(error == "ContactTelephonePrimary"){$("#confirmOrderError" ).html("Phone number is Required!"); }
					else {/*flg =1;*/ 
						$('div#ordercheckoutDiv', this.el).hide();
						$('div#thankyouDiv', this.el).show();	
					}
				}			
			 // alert(model.get("title") + " " + error + flg);
			});
			// assign the value
			one.save({
			  FirstName: $("#FirstName" ).val(),
			  LastName:  $("#LastName" ).val(),
			  ContactEmailPrimary:  $("#ContactEmailPrimary" ).val(),
			  ContactTelephonePrimary:  $("#ContactTelephonePrimary" ).val()
			});
		
	}
	
	
	
	
	$(document).ready(function() {
		var location_val = $('#SelectedStoreId option:selected').html();
		$("#location-selected-val" ).val(location_val);
		
		$( "#SelectedStoreId" ).change(function() {
			$("#location-selected-val" ).val($('#SelectedStoreId option:selected').html()); 
		});
		
		
		/*$('#toggle2').click(function() {
			$('.toggle2').toggle();
			return false;
		});*/
		
		
		$('#IsCurrentOrderSelected').click(function(){
			if($("#IsCurrentOrderSelected").is(':checked') == true){
				$('input:checkbox[id=IsFutureOrderSelected]').attr('checked',false);
			}
		});
		
		$('#IsFutureOrderSelected').click(function(){
			if($("#IsFutureOrderSelected").is(':checked') == true){
				$('input:checkbox[id=IsCurrentOrderSelected]').attr('checked',false);
			}
		});
		
		
		
		$('.radioClass').click(function(){
			
			if (this.previous) {
				var dfultPrice = parseFloat($('#defaultPriceValue').val());
				var dfltItmPrice = parseFloat(65.00);
				var total = parseFloat(dfultPrice - dfltItmPrice);
				$('#defaultPrice').html(total.toFixed(2));
				$('#defaultPriceValue').val(total.toFixed(2));
				this.checked = false;
			}
			this.previous = this.checked;
				if(this.checked == true){
					var dfultPrice = parseFloat($('#defaultPriceValue').val());
					var dfltItmPrice = parseFloat(65.00);
					var total = parseFloat(dfultPrice + dfltItmPrice);
					$('#defaultPrice').html(total.toFixed(2));
					$('#defaultPriceValue').val(total.toFixed(2));
				}
		});
		
		$('#back-home').click(function() {
			$('div#listingContainer', this.el).hide();
			$('div#location_detail', this.el).hide();
			$('div#mainFirstDiv', this.el).show();	
			$('div#mainLocationContainer', this.el).show();	
			$('div#mainDivDelPickup', this.el).show();	
			
			$('div#emptyCart', this.el).show();
			$('div#cartItemDetailDiv', this.el).hide();
		});
		
		$("#reset").click(function(){
			$("input:radio[class='radioClass']").each(function (i) {        
				this.checked = false;
			});
			
			$('#ddlBaseSelected option').prop('selected', function() {
				return this.defaultSelected;
			});
			$('#ddlSizeSelected option').prop('selected', function() {
				return this.defaultSelected;
			});
			
			$( "#Quantity" ).val('1');
			$('#defaultPrice').html('199.00');
			$('#defaultPriceValue').val(parseFloat(65.00));
						  
		 });
		
			var counter = 1;
			
				$(".btnViewProduct").click(function () {
						/*$('#checkout-now').click(function() { 
							for(var i=1; i<=counter; i++){
							 $("#TextBoxDiv"+i).remove();
							 $("#textboxOrdercounter"+i).remove();
							 $("#orderbox"+i).remove();
							 $("#textboxOrder"+i).val('');			  
														  
							counter = 1;
							}
						});							 
						alert(counter);*/
 
					if(counter>10){
							alert("Only 10 orders allow");
							return false;
					}   
				 
					var newTextBoxDiv = $(document.createElement('div'))
						 .attr("id", 'TextBoxDiv' + counter);
				 
					newTextBoxDiv.after().html('<input type="text" name="textboxOrdercounter" id="textboxOrdercounter' + counter + '" value="'+ counter +'" >' +
						  '<input type="text" name="textboxOrder' + counter + 
						  '" id="textboxOrder' + counter + '" value="" >');
				 
					newTextBoxDiv.appendTo("#TextBoxesGroup");
				 	$( "#defaultPriceValue" ).val( parseFloat(199.00).toFixed(2));
				 	$( "#counterValue" ).val( counter );
					counter++;
				});
			
	});
	
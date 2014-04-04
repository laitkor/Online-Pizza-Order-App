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
			populateForm();
		
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
	function populateForm()
	{
		var data = document.getElementById('location-val').value;
		data = JSON.parse(data);
		js2form(document.getElementById('pickupAddress'), data);
	}
	
	
	// founction to submit order and get listing page of items
	function frmConfirmOrderSubmit()
	{
		$('div#mainLocationContainer', this.el).hide();
		$('div#listingContainer', this.el).show();	
		$('div#viewProductCollectionDiv', this.el).show();
		$('div#viewProductDetailDiv', this.el).hide();	
		$('div#yourOrderDiv', this.el).show();	
		$('div#orderProductDetailDiv', this.el).hide();	
		
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
		
			PizzaItem = Backbone.Model.extend({});
		
			PizzaItemCollection = Backbone.Collection.extend({
				model: PizzaItem
			});
			
			var jsonString = $("#selected-pizza-item" ).val();

			var itemArray = JSON.parse(jsonString);
			var pizzaItemCollection = new PizzaItemCollection(itemArray);
			
			 _.each(pizzaItemCollection.models, function (msg) {
			 	$( "#item-name" ).html( msg.get("productName"+msg.get("productNumber")));
			 
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
			 	$( "#cartItemDetail" ).html( msg.get("Quantity"));
			 
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
				this.checked = false;
			}
			this.previous = this.checked;
		});

					
	});
	
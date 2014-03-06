
(function($){
  Backbone.sync = function(method, model, success, error){
    success();
  }
		  
  var ListView = Backbone.View.extend({
    el: $('div#delivery_pickup'), // el attaches to existing element
    // `events`: Where DOM events are bound to View methods. Backbone doesn't have a separate controller to handle such bindings; it all happens in a View.
    events: {
      'click button#add': 'addItem',
	  'click button#pickup': 'pickupItem',
	  'click input[id=collectionAddressModePostcode]':  'showList',
      'click input[id=collectionAddressModeLocalisation]': 'showAddress'
	  //'click input[id=address-search]': 'showDetail'
    },
    initialize: function(){
      _.bindAll(this, 'render', 'addItem'); // every function that uses 'this' as the current object should be in here
      _.bindAll(this, 'render', 'pickupItem'); // every function that uses 'this' as the current object should be in here

      this.render();

    },
    // `render()` now introduces a button to add a new list item.
    render: function(){
      $(this.el).append("<div class='span3 text-center margin-left50 '><button id='add' class='btn btn-large' type='button'>Delivery</button></div><div class='span3 text-center margin-left50'><button id='pickup' class='btn btn-large' type='button'>Pick UP</button></div>");
     
    },
	
    addItem: function(){
	  $('div#CollectionForm', this.el).hide();
	  $('div#DeliveryForm', this.el).show();
    },
	
	pickupItem: function(){
	  $('div#CollectionForm', this.el).show();
	  $('div#DeliveryForm', this.el).hide();
	  $('#collectionAddressModeLocalisation', this.el).checked=false;
	  
    },
	
	showList: function(){
	  $('div#address-container', this.el).hide();
	  $('div#postcode-container', this.el).show();
	   $('#collectionAddressModePostcode', this.el).checked=false;
    },
	
	showAddress: function(){
	  $('div#postcode-container', this.el).hide();
	  $('div#address-container', this.el).show();
    },
	
	showDetail: function(){
	 /* $('div#postcode-container', this.el).hide();
	  $('div#address-container', this.el).show();*/
	  
	  var formData = form2js('frmCollection', '.', true,
				function(node)
				{
					if (node.id && node.id.match(/callbackTest/))
					{
						//return { name: node.id, value: node.innerHTML };
					}
				});
//alert(JSON.stringify(formData, null, '\t'));
$('div#mainFirstDiv', this.el).hide();
	 $('div#location_detail', this.el).show();
		// $('div#location_detail', this.el).append("test");

	//	document.getElementById('testArea').innerHTML = JSON.stringify(formData, null, '\t');
		//$('div#mainFirstDiv', this.el).hide();
	 // $('div#location_detail', this.el).show();
		// $('div#location_detail', this.el).append(JSON.stringify(formData, null, '\t'));
		//$(this.el).append("<ol></ol>");
     // $('ol', this.el).append("<li>hello world</li>");
    }
	
	
	

	
  });

  var listView = new ListView();
  

  
})(jQuery);







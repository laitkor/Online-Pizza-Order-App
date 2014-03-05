// **This example illustrates the binding of DOM events to View methods.**
//
// _Working example: [2.html](../2.html)._
// _[Go to Example 3](3.html)_

//

(function($){
  Backbone.sync = function(method, model, success, error){
    success();
  }
		  
  var ListView = Backbone.View.extend({
    el: $('div#delivery_pickup'), // el attaches to existing element
    // `events`: Where DOM events are bound to View methods. Backbone doesn't have a separate controller to handle such bindings; it all happens in a View.
    events: {
      'click button#add': 'addItem',
	  'click button#pickup': 'pickupItem'
	  //'click button#add':  'remove',
      //'click button#pickup': 'remove'
    },
    initialize: function(){
      _.bindAll(this, 'render', 'addItem'); // every function that uses 'this' as the current object should be in here
      _.bindAll(this, 'render', 'pickupItem'); // every function that uses 'this' as the current object should be in here
	  // _.bindAll(this, 'render', 'unrender', 'addItem', 'pickupItem', 'remove');

      //this.counter = 0; // total number of items added thus far
      this.render();
	  //this.model.bind('change', this.render);
	  //this.model.bind('remove', this.unrender);
    },
    // `render()` now introduces a button to add a new list item.
    render: function(){
     // $(this.el).append("<button id='add'>Add list item</button>");
      $(this.el).append("<button id='add' class='btn btn-large' type='button'>Delivery</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id='pickup' class='btn btn-large' type='button'>Pick UP</button>");
     // $(this.el).append("<ul></ul>");
    },
	
	/*unrender: function(){
      $(this.el).remove();
    },*/
    // `addItem()`: Custom function called via `click` event above.
    addItem: function(){
      //this.counter++;
      //$('ul', this.el).append("<li>hello world"+this.counter+"</li>");
	   $(this.el).append("<ul></ul>");
      $('ul', this.el).append("<li>hello world</li>");
    },
	
	pickupItem: function(){
      //this.counter++;
      //$('ul', this.el).append("<li>hello world"+this.counter+"</li>");
	  $(this.el).append("<ol></ol>");
      $('ol', this.el).append("<li>hello world</li>");
    }
	
	/*unrender: function(){
      $(this.el).remove();
    },
	
	remove: function(){
      //this.model.destroy();
    }*/
	
  });

  var listView = new ListView();
})(jQuery);


/*(function($){
  var ListView = Backbone.View.extend({
    el: $('body'), // el attaches to existing element
    // `events`: Where DOM events are bound to View methods. Backbone doesn't have a separate controller to handle such bindings; it all happens in a View.
    events: {
      'click button#pickup': 'addItem'
    },
    initialize: function(){
      _.bindAll(this, 'render', 'addItem'); // every function that uses 'this' as the current object should be in here

      this.counter = 0; // total number of items added thus far
      this.render();
    },
    // `render()` now introduces a button to add a new list item.
    render: function(){
      //$(this.el).append("<button id='pickup'>Pick Up</button>");
      $(this.el).append("<button id='pickup' class='btn btn-large' type='button'>Pick UP</button>");
     // $(this.el).append("<ol></ol>");
    },
    // `addItem()`: Custom function called via `click` event above.
    addItem: function(){
      //this.counter++;
      //$('ul', this.el).append("<li>hello world"+this.counter+"</li>");
	   $(this.el).append("<ol></ol>");
      $('ol', this.el).append("<li>hello world</li>");
    }
  });

  var listView = new ListView();
})(jQuery);*/

// <div style="float:left; margin-bottom:40px;"><img style="width:36px; margin:5px 10px 0 5px;" src="https://g.twimg.com/Twitter_logo_blue.png"/></div> <div style="background:rgb(245,245,255); padding:10px;">Follow me on Twitter: <a target="_blank" href="http://twitter.com/r2r">@r2r</a> </div>
// <script>
//   if (window.location.href.search(/\?x/) < 0) {
//     var _gaq = _gaq || [];
//     _gaq.push(['_setAccount', 'UA-924459-7']);
//     _gaq.push(['_trackPageview']);
//     (function() {
//       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//     })();
//   }
// </script>




5.js







// **This example introduces two new Model actions (swap and delete), illustrating how such actions can be handled within a Model's View.**
//
// _Working example: [5.html](../5.html)._

//
(function($){
  // `Backbone.sync`: Overrides persistence storage with dummy function. This enables use of `Model.destroy()` without raising an error.
  Backbone.sync = function(method, model, success, error){
    success();
  }

  var Item = Backbone.Model.extend({
    defaults: {
      part1: 'hello',
      part2: 'world'
    }
  });

  var List = Backbone.Collection.extend({
    model: Item
  });

  var ItemView = Backbone.View.extend({
    tagName: 'li', // name of tag to be created
    // `ItemView`s now respond to two clickable actions for each `Item`: swap and delete.
    events: {
      'click span.swap':  'swap',
      'click span.delete': 'remove'
    },
    // `initialize()` now binds model change/removal to the corresponding handlers below.
    initialize: function(){
      _.bindAll(this, 'render', 'unrender', 'swap', 'remove'); // every function that uses 'this' as the current object should be in here

      this.model.bind('change', this.render);
      this.model.bind('remove', this.unrender);
    },
    // `render()` now includes two extra `span`s corresponding to the actions swap and delete.
    render: function(){
      $(this.el).html('<span style="color:black;">'+this.model.get('part1')+' '+this.model.get('part2')+'</span> &nbsp; &nbsp; <span class="swap" style="font-family:sans-serif; color:blue; cursor:pointer;">[swap]</span> <span class="delete" style="cursor:pointer; color:red; font-family:sans-serif;">[delete]</span>');
      return this; // for chainable calls, like .render().el
    },
    // `unrender()`: Makes Model remove itself from the DOM.
    unrender: function(){
      $(this.el).remove();
    },
    // `swap()` will interchange an `Item`'s attributes. When the `.set()` model function is called, the event `change` will be triggered.
    swap: function(){
      var swapped = {
        part1: this.model.get('part2'),
        part2: this.model.get('part1')
      };
      this.model.set(swapped);
    },
    // `remove()`: We use the method `destroy()` to remove a model from its collection. Normally this would also delete the record from its persistent storage, but we have overridden that (see above).
    remove: function(){
      this.model.destroy();
    }
  });

  // Because the new features (swap and delete) are intrinsic to each `Item`, there is no need to modify `ListView`.
  var ListView = Backbone.View.extend({
    el: $('div#delivery_pickup'), // el attaches to existing element
    events: {
      'click button#add': 'addItem',
	  'click button#pickup': 'pickupItem'
    },
    initialize: function(){
      _.bindAll(this, 'render', 'addItem', 'appendItem'); // every function that uses 'this' as the current object should be in here

      this.collection = new List();
      this.collection.bind('add', this.appendItem); // collection event binder

      this.counter = 0;
      this.render();
    },
    render: function(){
      var self = this;
      $(this.el).append(" <div class='span3 text-center margin-left50 '><button id='add' class='btn btn-large' type='button'>Delivery</button></div><div class='span3 text-center margin-left50'><button id='pickup' class='btn btn-large' type='button'>Pick UP</button></div>");
     // $(this.el).append("<ul></ul>");
     /* $(this.el).append("<div id='mainDivDelPickup'></div>");
      _(this.collection.models).each(function(item){ // in case collection is not empty
        self.appendItem(item);
      }, this);*/
    },
    addItem: function(){
      /*this.counter++;
      var item = new Item();
      item.set({
        part2: item.get('part2') + this.counter // modify item defaults
      });
      this.collection.add(item);*/
	 // $('div#mainDivDelPickup', this.el).empty();
	  //$('div#mainDivDelPickup', this.el).append("<span>hello world</span>");
	  $('div#CollectionForm', this.el).hide();
	  $('div#DeliveryForm', this.el).show();
	  
    },
	pickupItem: function(){
      //this.counter++;
      //$('ul', this.el).append("<li>hello world"+this.counter+"</li>");
	 // $(this.el).append("<ol></ol>");
      //$('ol', this.el).append("<li>hello world</li>");
	 // $('div#mainDivDelPickup', this.el).empty();
	   //$('div#mainDivDelPickup', this.el).append("<span>test</span>");
	   
	   $('div#CollectionForm', this.el).show();
	  $('div#DeliveryForm', this.el).hide();
	   
	   
    },
    appendItem: function(item){
      var itemView = new ItemView({
        model: item
      });
      $('ul', this.el).append(itemView.render().el);
    }
  });

  var listView = new ListView();
})(jQuery);

// <div style="float:left; margin-bottom:40px;"><img style="width:36px; margin:5px 10px 0 5px;" src="https://g.twimg.com/Twitter_logo_blue.png"/></div> <div style="background:rgb(245,245,255); padding:10px;">Follow me on Twitter: <a target="_blank" href="http://twitter.com/r2r">@r2r</a> </div>
// <script>
//   if (window.location.href.search(/\?x/) < 0) {
//     var _gaq = _gaq || [];
//     _gaq.push(['_setAccount', 'UA-924459-7']);
//     _gaq.push(['_trackPageview']);
//     (function() {
//       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//     })();
//   }
// </script>


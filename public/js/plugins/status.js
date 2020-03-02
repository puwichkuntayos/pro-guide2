// Utility
if (typeof Object.create !== 'function') {
	Object.create = function(obj) {
	  function F() {};
	  F.prototype = obj;
	  return new F();
	};
  }
  
  (function($, window, document, undefined) {
  
	var status = {
	  init: function(options, elem) {
		var self = this;
  
		self.settings = $.extend({}, $.fn.status.defaults, options);
		console.log(self.settings);
		self.$elem = $(elem);
		self.$elem.click(function(evt) {
  
		  var id = self.settings.id;
		  var status = $(this).find('input').attr('value');
		  // alert(id);
		  $.ajax({
			type: "GET",
			url: 'api/v1/users/changestatus/update',
			data: {
			  id: id,
			  status: status,
			},
			success: function (data) {
				location.reload();
			}
		  });
  
		});
	  },
  
	}
	$.fn.status = function(options) {
	  return this.each(function() {
		var $this = Object.create(status);
		$this.init(options, this);
		$.data(this, 'status', $this);
	  });
	};
	$.fn.status.defaults = {}
  
  })(jQuery, window, document);
  

 
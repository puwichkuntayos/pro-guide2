// Utility
if ( typeof Object.create !== 'function' ) {
	Object.create = function( obj ) {
		function F() {};
		F.prototype = obj;
		return new F();
	};
}

(function( $, window, document, undefined ) {

	var formResetPassword = {
		init: function (options, elem) {
			var self = this;

			self.settings = $.extend( {}, $.fn.formResetPassword.defaults, options );
            self.$elem = $(elem);

            self.$password = self.$elem.find('.input-password');

            self.$elem.find( '#password_auto' ).change(function (e) { 
                var is = $(this).prop('checked');

                if( is ){
                    self.$password.val(self.getRndInteger(100000,900000)).prop('disabled', true);
                }
                else{
                    self.$password.val('').prop('disabled', false);
                    self.$elem.find('#password_new').focus();
                }
            });
        },

        getRndInteger: function (min, max) {

            return Math.floor(Math.random() * (max - min)) + min;
        }
    };
    
	$.fn.formResetPassword = function( options ) {
		return this.each(function() {
			var $this = Object.create( formResetPassword );
			$this.init( options, this );
			$.data( this, 'formResetPassword', $this );
		});
	};
	$.fn.formResetPassword.defaults = {
		loadThrottle: 300,
	}
	

})( jQuery, window, document );
	
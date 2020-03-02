// Utility
if ( typeof Object.create !== 'function' ) {
	Object.create = function( obj ) {
		function F() {};
		F.prototype = obj;
		return new F();
	};
}

(function( $, window, document, undefined ) {

	var formResetPasswordSuccess = {
		init: function (options, elem) {
			var self = this;

			self.cogs = $.extend( {}, $.fn.formResetPasswordSuccess.defaults, options );
            self.$elem = $(elem);

            self.alert = shotalert();

            self.$password = self.$elem.find('#show-password');
            self.$passwordHide = self.$elem.find('#input-password-hide');

            self.$elem.delegate('[password-toggle]', 'click', function (e) { 
                e.preventDefault();
                
                let $toggle = $(this);
                let action = $toggle.attr('password-toggle');

                if( action === 'show' ){

                    $toggle.text('ซ่อนรหัสผ่าน').attr('password-toggle', 'hide');
				    self.$password.text( self.cogs.password  );
                }

                if( action === 'hide' ){

                    $toggle.text('แสดงรหัสผ่าน').attr('password-toggle', 'show');
                    self.$password.text( '●●●●●●●●' );
                }

                if( action === 'copy' ){

                    self.$passwordHide.val( self.cogs.password );
                    
                    let target = self.$passwordHide[0];

                    // select the content
                    // var currentFocus = document.activeElement;
                    target.focus();
                    target.setSelectionRange(0, target.value.length);

                    // copy the selection
                    // let succeed;
                    try {
                        document.execCommand("copy");
                        // Password copied to clipboard.
                        self.alert.update('คัดลอกรหัสผ่านแล้ว', 'success').show();
                    } catch(e) {
                        
                    }
                }
            });

            
        },
    };
    
	$.fn.formResetPasswordSuccess = function( options ) {
		return this.each(function() {
			var $this = Object.create( formResetPasswordSuccess );
			$this.init( options, this );
			$.data( this, 'formResetPasswordSuccess', $this );
		});
	};
	$.fn.formResetPasswordSuccess.defaults = {
		loadThrottle: 300,
	}
	

})( jQuery, window, document );
	
// Utility
if ( typeof Object.create !== 'function' ) {
	Object.create = function( obj ) {
		function F() {};
		F.prototype = obj;
		return new F();
	};
}

(function( $, window, document, undefined ) {

	var modal_paymentvoucher = {
		init: function (options, elem) {
			var self = this;
			self.settings = $.extend( {}, $.fn.modal_paymentvoucher.defaults, options );
			self.$elem = $(elem);
			self.$fess = self.$elem.find('.d_fees');
			// console.log(self.$type);
			self.run_no();
			self.set_balance();

			if($(":input[id=category1]").is(":checked")){
				self.$fess.hide();
			}else{
			self.$fess.show();
			}

			self.$elem.delegate(':input[id=category1]', 'change', function() {
				self.$fess.hide();
			});

			self.$elem.delegate(':input[id=category2]', 'change', function() {
				self.$fess.show();
			});

			self.$elem.find('#btn-add').click(function(event) {
				var row = self.count_row();
				if(row<6){
					self.clone_();
					// console.log(row);

				}else{
					self.$elem.find('.alert-sms').html("สามารถเพิ่มได้สูงสุด จำนวน 6 รายการ");
					setTimeout(function(){
  					self.$elem.find('.alert-sms').html("");
					}, 2500);
				}
					self.run_no();
			});

			self.$elem.delegate('.btn-remove', 'click', function(event) {
					var row = self.count_row();
					if(row>1){
						$(this).closest('.row-detail').remove();
						self.set_balance();
					}else{
						self.$elem.find('.alert-sms').html("ไม่สามารถลบรายการได้อีก");
						setTimeout(function(){
							self.$elem.find('.alert-sms').html("");
						}, 2000);
					}
						self.run_no();
				});

				self.$elem.delegate('.num-cost', 'keydown', function(e) {
				// self.$elem.keydown( function(e) {
					// Allow: backspace, delete, tab, escape, enter and .
							if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
									 // Allow: Ctrl/cmd+A
									(e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
									 // Allow: Ctrl/cmd+C
									(e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
									 // Allow: Ctrl/cmd+X
									(e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
									 // Allow: home, end, left, right
									(e.keyCode >= 35 && e.keyCode <= 39)) {
											 // let it happen, don't do anything
											 return;
							}

							if( e.ctrlKey && e.keyCode==86 ){

							}
							// Ensure that it is a number and stop the keypress
							else if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
									e.preventDefault();
							}


				}).click(function () {

					if( self.$elem.val()!='' ){
						self.$elem.select();
					}

				}).keyup(function(e) {


				}).blur('blur', function(e) {
					// self.set_numformat();
				});

				self.$elem.delegate('.num-cost', 'change', function() {
						var num = $(this).val();
						self.set_numformat(num,$(this));
						self.set_balance();

				});


        },
				count_row: function (){
					var self = this;
					var row = 0;
					$.each(self.$elem.find('.row-detail'), function(index, el) {
							row++;
					});
					return row;
				},
				set_balance: function (){
					var self = this;
					var balance = 0;
					$.each(self.$elem.find('.row-detail'), function(index, el) {
							var total = 	parseFloat($(this).find('.num-cost').val().replace(/,/g, '')) || 0;
							balance = balance+total;



					});

					self.$elem.find('.balance').html(PHP.number_format( balance,2)+" บาท");

					var tax = self.set_tax(balance)

					self.$elem.find('#amount_tax3').html(PHP.number_format( tax,2));
					var total = balance-tax;
					// console.log(balance,tax);

					self.$elem.find('#balance_tax3').html(PHP.number_format( total,2));

					self.$elem.find(':input[name=total]').val(balance.toFixed(2));
					self.$elem.find(':input[name=total_balance]').val(balance);
					self.$elem.find(':input[name=total_tax]').val(tax);
					self.$elem.find(':input[name=total_after_tax]').val(total);
				},
				set_tax: function (val) {
					var self = this;
					// var vat =   self.$elem.find('.show-tax option:selected').text();
					var vat =   self.$elem.find(':input[name=input_tax]').val();

					var tax =  (val*vat)/100;
					return tax;

					},
				set_numformat: function (val,elem) {
						var num = val;
						var self = elem;

						if( num!='' ){
						self.val(PHP.number_format( num,2));
					}
		 			},

				clone_: function () {
					var self = this;
					var clone_addon = self.$elem.find('#row-details').clone().val("").end();
					const newClone = clone_addon.clone();
					self.$elem.find("#showpay").append(newClone);
					$(newClone).find('.num-cost').val("0.00");
					$(newClone).find('.num-cost').removeClass('inputnum');
					// $(newClone).find('.num-cost').data('plugin', 'input__number');
					// $(newClone).find('.num-cost').data('options', ['decimal':2]);
					$(newClone).find('.detail-name').val('');



        },
				run_no: function () {
					var self = this;
					$.each(self.$elem.find('.row-detail'), function(index, el) {
								$(this).find('.no-detail').html(index+1);
					});
        },


	}




	$.fn.modal_paymentvoucher = function( options ) {
		return this.each(function() {
			var $this = Object.create( modal_paymentvoucher );
			$this.init( options, this );
			$.data( this, 'modal_paymentvoucher', $this );
		});
	};
	$.fn.modal_paymentvoucher.defaults = {
	}

})( jQuery, window, document );

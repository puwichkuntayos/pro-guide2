// Utility
if ( typeof Object.create !== 'function' ) {
	Object.create = function( obj ) {
		function F() {};
		F.prototype = obj;
		return new F();
	};
}

(function( $, window, document, undefined ) {

	var formSubmit = {
		init: function (options, elem) {
            var self = this;

			self.options = $.extend( {}, $.fn.formSubmit.defaults, options );
			self.$form = $(elem);
			self.$submit = self.$form.find('[type=submit]');
			self.url = self.$form.attr('action');
            self.method = self.$form.attr('method');

			self.$submit.addClass('btn-submit');
            self.alert = shotalert();

			self.$form.submit(function(e) {
				e.preventDefault();

				if( self.is_save ) return false;

				self.is_save = true;
				self.save();
			});

            self.updateForm();

            self.$form.delegate(":input", 'keyup change', self._change_input);

            self.$form.find(":input").focus(function() {
                // console.log( $(this).is(':valid') );
                // $(this).removeClass('dirty');
            }).blur(function() {
                // console.log( $(this).is() );
                // $(this).toggleClass('dirty', $(this).is(':invalid'));
            });


			//
			// self.$form.find(":input[name]").focus(function() {
			// 	$(this).removeClass('has-invalid');
			// }).blur(function(event) {
			// 	$(this).toggleClass('has-invalid', $(this).is(':invalid'));
			// });

			// self.$form.find(":input[name]").bind('change keyup',function(e) {

			// 	self.is_change = true;
			// 	// check error
			// 	var $parent = $(this).closest('.control-group');
			// 	if( $parent.hasClass('has-error') && $.trim($(this).val())!='' ){

			// 		$parent.removeClass('has-error');
			// 		// $parent.find('.notification').empty();
			// 	}


			// 	self.changeData();
			// });

			self.$form.find(":input[name]").bind('change keyup',function(e) {
				self.changeData();
			});

			self.changeData();
			// self.autosave = self.options.autosave;
        },
        _change_input: function(e){

            if( $(this).hasClass('form-textbox') ){
                $(this).toggleClass('dirty', $(this).val()!='' );
            }


        },
		changeData: function () {
			var self = this;

            var inputChange = {};


            var inputRequired = self.$form.find(":input[aria-label=required]:not(disabled),:input[required]:not(disabled)").not('[type=radio]');


            // :disabled
            var inputRequiredRadio = self.$form.find(":input[type=radio][aria-label=required],:input[type=radio][required]").not(':disabled');
            var inputRequiredRadioLength = 0;



            var nameRadioRequired = {};
            var requiredNameRadio = {};
            $.each(inputRequiredRadio, function(index, el) {
            	
            	var name = $(this).attr('name');
				var val = $(this).prop('checked');


				requiredNameRadio[ name ] = 1;

				if( val ){
					nameRadioRequired[ name ] = val;
				}
            });



            var required = 0;
            $.each(inputRequired, function(index, el) {
            	var type = $(this).attr('type');
				var name = $(this).attr('name');
				var val = $.trim($(this).val() );

				if( type=='checkbox' || type=='radio' ){


					if( $(this).prop('checked')==true && type=='checkbox' ){
						required++;
					}


				}
				else if( type=='hidden' ){

				}
				else if( val!='' ){

					required++;
				}
            });


            required += Object.keys(nameRadioRequired).length;
            var inputRequiredLength = inputRequired.length + Object.keys(requiredNameRadio).length;

            // console.log( required, inputRequiredLength, self.options.requiredMax );

            if( inputRequiredLength>0 ){

            	if( self.options.requiredMax ){
            		self.$submit.prop('disabled', required<self.options.requiredMax );
            	}
            	else{
            		self.$submit.prop('disabled', required!=inputRequiredLength );
            	}            	
            }
		},

		_autosave: function () {

		},

		_changeData :function (change) {
			var self = this;

			// console.log( self.options.changeDataMax, Object.keys(self.inputs).length );

			if( self.options.changeDataMax ){
			 	return Object.keys(self.inputs).length>0 && Object.keys(change).length<self.options.changeDataMax;
			}
			else{

				return Object.keys(self.inputs).length>0 && Object.keys(change).length==0;
			}
		},

		_type: function (type) {
			return type=='hidden' ? false: true;
			//|| type=='password'
		},

		_checked: function (type) {
			return type=='checkbox' || type=='radio' ? true: false;
		},

		save: function (delay) {
			var self = this;

			if( self.alert ){ self.alert.hide(); }


			self.$submit.removeClass('btn-error');

            // set Data
            if( self.formData ){

                // var formData = new FormData();
                var formData = self.formData;

                // set :input
                $.each(self.$form.serializeArray(), function (i, field) {
                    formData.append(field.name, field.value);
                });

                // set file
                $.each( self.$form.find('input[type=file]'), function (i, field) {
                    $.each(this.files, function(index, file) {
                        formData.append(field.name, file);
                    });
                });
            }
            else{
                var formData = new FormData(self.$form[0]);
            }

			self.$form.addClass('has-loading');
			self.$form.find(':input').not(':disabled').addClass('is-data').prop('disabled', true);
			self.$form.find('.has-error').removeClass('has-error');

			if( self.$submit.find('.loader').length==0 ){
				self.$submit.append('<div class="loader"><div></div><div></div><div></div></div>')
			}

			self.$submit.addClass('loading');


			setTimeout(function () {
				self.fetch( formData ).done(function( res ) {

					// console.log("success", res);
					self.process( res ).then(function () { // doneCallbacks

						self.$form.find(':input[type=password]').val('');
						// console.log('done');
						self.updateForm();
						self.changeData();

					}, function () {

						// console.log('reject');
					}); //failCallbacks
				});
				
			}, delay||1)
		},
		fetch: function ( formData ) {
			var self = this;


			return $.ajax({
				// async: true,
  				// crossDomain: true,
				url: self.url,
				type: 'POST',
				dataType: self.options.dataType,
				data: formData,

				// method: self.$form.find(':input[name=_method]').val() || 'POST',

				processData: false,
				contentType: false,

				"headers": {
					"Accept": "application/json",
				    // "cache-control": "no-cache",
				    // "Postman-Token": "a2b5a323-55ba-4d90-8e99-70a0fbcd612b"
				}
			})
			.fail(function(jqXHR, textStatus) {

				if( textStatus=='error' ){

					var res = jqXHR.responseJSON

					if( res.message ){
						self.alert.update({
							text: res.message,
							type: 'error',
							close: true,
							auto: false
						}).show();
					}

					if( res.errors ){
						self._setErrorForm( res.errors );
					}

					// console.log("error", jqXHR.responseJSON);
				}

				if( textStatus=='parsererror' ){
					self.alert.update({
						text: 'เกิดข้อผิดพลาด, กรุณาลองใหม่',
						type: 'error',
						close: true,
						auto: false
					}).show();
				}

				if( textStatus=='timeout' ){
					self.alert.update({
						text: 'หมดเวลาในการบันทึกข้อมูล, กรุณาลองใหม่',
						type: 'error',
						close: true,
						auto: false
					}).show();
				}

				self.$submit.addClass('btn-error');
			})
			.always(function() {

				self.is_save = false;

				self.$form.find(':input.is-data').prop('disabled', false).removeClass('is-data');
				self.$submit.removeClass('loading');
				self.$form.removeClass('has-loading');
			});
		},

		updateForm: function (data) {
			var self = this;

			// self.inputs = {};
			// $.each(self.$form.find(":input[name]"), function(index, el) {

			// 	var val = $.trim($(this).val() );
			// 	var name = $.trim($(this).attr('name') );
			// 	var type = $.trim($(this).attr('type') );

			// 	if( self._type(type) ){

			// 		if( self._checked(type) ){
			// 			val = self.$form.find(":input[name="+ name +"]:checked").val();
			// 		}

			// 		self.inputs[ name ] = val;
			// 	}
			// });

			// console.log( self.inputs );
		},

		process: function ( res ) {
			var self = this;
			return new Promise(function(resolve, reject) {

				// shot message

				// alert
				if( res.alert && typeof Swal ==='function' ){
					// console.log( res.alert );
					// https://sweetalert2.github.io/
					// self._setAlert( res.alert );

					let SwalOps = self._setAlert( res.alert );

					SwalOps.onOpen = function (toast) {

						Event.plugins($(toast), res.data||{}); 
					}
					
					Swal.fire( SwalOps ).then((result) => {

						// console.log( result.value );
					});
				}else if( res.message ){
					self._showMessage( res.message, res.code==200 ? 'success': 'error' );
                }

                if( res.clearFormData && self.formData ){
                    delete self.formData;
                }

				// error form
				if( res.error ){
					self._setErrorForm( res.error );
					self.$submit.addClass('btn-error');

					reject();
					return false;
				}

				resolve();


				// next activity
				if( res.update ){

					var $el = $(res.update[0]);

					if( $el.length ){

						$.each(res.update[1], function(key, val) {

							var $elem = $el.find('[data-ref='+ key +'], [ref='+ key +']');

							if( $elem.length && val ){

								var type = $elem.attr('data-type')? $elem.attr('data-type'): 'text';

								if( typeof val === 'object' ){

									if( type=='status' ){
										$elem.css({backgroundColor: val.color}).text( val.name );
									}
									else{

										$.each(val, function(i, a) {
											if( typeof $elem[i] === 'function'  ) $elem[i](a);
										});

									}
								}
								else{
									var nodeName = $elem.prop('nodeName'), oldVal = '';

									if( nodeName=='INPUT' || nodeName=='TEXTAREA' ){
										if( $elem.attr('type')=='checkbox' ){
											$elem.prop('checked', parseInt(val) );
										}
										else{
											oldVal.val();
											$elem.val( val );
										}
									}
									else{

                                        if( type=='status' ){

                                            switch (parseInt(val)) {
                                                case 0:
                                                    val = '<div class="ui-status" data-ref="status" data-type="status">แบบร่าง</div>';
                                                    break;

                                                case 1:
                                                    val = '<div class="ui-status primary" data-ref="status" data-type="status">ใช้งาน</div>';
                                                    break;

                                                case 2:
                                                    val = '<div class="ui-status danger" data-ref="status" data-type="status">ระงับ</div>';
                                                    break;
                                            }

                                            $elem.replaceWith(val);
                                        }
                                        else if( type=='image' ){

                                            if( nodeName=='IMG' ){
                                                $elem.attr('src', val);
                                            }
                                            else if( val!='' ){
                                                $elem.html( $('<img>', {src: val}) );
                                            }
                                            else{
                                                $elem.empty();
                                            }

                                        }
                                        else{
                                            oldVal = $elem.text();
                                            $elem.html( val );
                                        }

									}


									if( oldVal!=val ){
										$elem.addClass('is-change-data');
										setTimeout(function () {
											$elem.removeClass('is-change-data');
										}, 1800);
									}
								}
							}
						});
					}

				}

				if ( res.delete ){
					var $el = $(res.delete);
					if( $el.length ){
						$el.remove();
					}
				}

				if( res.call ){

					$.each( res.call.split(','), function(i, apply) {
						if( typeof window[apply] === 'function' ){
							window[apply]( res.data || {} );
						}
					});
				}
				

				// if( self.alert ){ self.alert.update({'remove': true}); }

				var model = self.$form.closest('.model').data();
				if( model ){
					model.close();
					// console.log( model );
				}

				if( res.url ){
					res.redirect = res.url;
				}

				if( res.redirect ){

					if( res.redirect=='refresh' ){
						res.redirect = window.location.href;
					}

					setTimeout(function() {
						window.location.href = res.redirect;
					}, 1300);
				}

			});
		},

		_setErrorForm: function ( data ) {
			var self = this;

			// console.log( '_setErrorForm', data );

			$.each(data, function(field, noity){

				var $field = self.$form.find('#'+field+"_fieldset"),
					$noity = $field.find('.notification');

				$field.addClass('has-error');
				$noity.html( noity );
			});
		},

		_setAlert: function ( ops ) {

			var options = {};
			// console.log( typeof ops );

			if( typeof ops === 'string' ){

				ops = ops.split(',');

				if( ops[0] ){
					options.title = ops[0];
				}

				if( ops[1] && !ops[2] ){
					options.type = ops[1];
				}else if( ops[1] ){
					options.text = ops[1];

					if( ops[2] ){
						options.type = ops[2];
					}
				}

				return options;

			}else if( typeof ops==='object' ){

				if( ops.title ){
					return ops;
				}
				else{

					if( ops[0] ){
						options.title = ops[0];
					}

					if( ops[1] && !ops[2] ){
						options.type = ops[1];
					}else if( ops[1] ){
						options.text = ops[1];

						if( ops[2] ){
							options.type = ops[2];
						}
					}

					return options;
				}
			}
		},

		_showMessage: function (data, type) {
			var self = this;

			var text = '';

			if(  typeof data === 'object' ){

				if( data.text ){
					text = data.text;
					type = data.type;
				}
				else{
					text = data[0];
					type = data[1];
				}
			}
			else{
				text = data;
			}


			if( self.options.contentMessage ){

				var $box = $(self.options.contentMessage);
				$box.html( text ).addClass('text-'+type).slideDown('100', function() {

					setTimeout(function () {
						$box.slideUp('200', function() {
							$box.removeClass( 'text-'+ type);
						});


					}, 2000);
				});

			}
			else{
				self.alert.update(text, type).show();
			}

		}

	}
	$.fn.formSubmit = function( options ) {
		return this.each(function() {
			var $this = Object.create( formSubmit );
			$this.init( options, this );
			$.data( this, 'formSubmit', $this );
		});
	};
	$.fn.formSubmit.defaults = {
		dataType: 'json',

		// requiredMax: 0
	}


})( jQuery, window, document );
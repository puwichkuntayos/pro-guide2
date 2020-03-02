// Utility
if (typeof Object.create !== 'function') {
    Object.create = function (obj) {
        function F() {};
        F.prototype = obj;
        return new F();
    };
}

(function ($, window, document, undefined) {

    var addinputtablr = {
        init: function (options, elem) {
            var self = this;

            self.options = options;
            self.$elem = $(elem);
            self.$btn = self.$elem.find('.addform');
            self.$delbtn = self.$elem.find('.delform');
            // self.sum = self.$elem.find('.invoiceprice');
            self.$btn.click(function () {
                $("#langes").clone().appendTo("clone");

            });

            self.$delbtn.click(function () {
                $("#langes").remove();
            });



        },

    };


    $.fn.addinputtablr = function (options) {
        return this.each(function () {
            var $this = Object.create(addinputtablr);
            $this.init(options, this);
            $.data(this, 'addinputtablr', $this);
        });
    };

})(jQuery, window, document);
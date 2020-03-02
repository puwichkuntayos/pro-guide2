
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import $ from 'jquery';
window.$ = window.jQuery = $;

window._ = require('lodash');
window.Popper = require('popper.js').default;

// require('./sweetalert2');

try {
    // console.log( 'this app.js: jquery' );
    
//     // const Swal = SweetAlert;
//     // 
    
//     require('flatpickr');
//     require('selectize');

    // window.$ = window.jQuery = require('jquery');
    // require('./bootstrap');
    // require('./custom');

    // require('./nav');
    // require('./sweetalert2');

    // require('./plugins/datatable');
    
    // console.log( 'Swal', typeof Swal );
//     // import 'sweetalert2/src/sweetalert2.js';
} catch (e) {

    // console.log( 'error' );
}




// require('');

// 
// require('bootstrap-datepicker');
// require('node_modules/bootstrap-datepicker/locales/bootstrap-datepicker.th.min');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#doc'
});
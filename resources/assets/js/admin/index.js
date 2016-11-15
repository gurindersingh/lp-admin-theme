/*=== Load jQuery, Lodash ===*/
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;
import _ from 'lodash';
window._ = _;

/*=== Load VUE ===*/
// window.Vue = require('vue');
// require('vue-resource');
// Vue.http.interceptors.push((request, next) => {
//     request.headers.set('X-CSRF-TOKEN', LaravelPlus.csrfToken);
//     next();
// });

/*=== Load LaravelPlus ===*/
window.LaravelPlus = Window.LaravelPlus || {};

/*=== Load Plugins ===*/
window.$.iCheck = require('icheck');
window.Raphael = require('raphael');
require('morris.js/morris.js');

/*=== Load Components ===*/
import Tabs from './components/tabs'
import Accordion from './components/accordion'
import Alert from './components/alert'
import Dropdown from './components/dropdown'
import Form from './components/forms'
import Modal from './components/modal'
import Tooltip from './components/tooltip'
import SearchToggle from './components/search-toggle'
import Mainmenu from './components/main-menu'
import { MorrisChart } from './components/charts'


/*=== Instantiate Components ===*/
(function ($, Raphael) {
    
    /*=== Main Menu ===*/
    Mainmenu.toggleMenu('#main-menu-toggle');
    Mainmenu.toggleList('perform-menu');

    /*=== Tabs & Accordions ===*/
    Tabs.initialize('tab');
    Accordion.initialize('accordion-group');

    /*=== Alert ===*/
    Alert.initialize('.alert.closeable');

    /*=== Dropdown ===*/
    Dropdown.initialize('.button-group.has-dropdown');
    Dropdown.initialize('.input-group.has-dropdown');

    /*=== Forms ===*/
    Form.InputGroup('input-group');
    Form.iCheckLoad('input.icheck');
    Form.autosizeTextarea('textarea.autosize');
    Form.initilizeFile('file-uploader');

    /*=== Modal ===*/
    Modal.initialize('modal-button');

    /*=== Tooltip ===*/
    Tooltip.initialize('tooltip');
    
    /*=== Search Toggle ===*/
    SearchToggle.initialize('a[data-button="top-menu-search"]');

    /*=== Charts ===*/
    MorrisChart.init('morris-chart');

}(jQuery, Raphael));
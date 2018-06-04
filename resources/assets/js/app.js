
require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);

Vue.component(Buefy.Checkbox.name, Buefy.Checkbox);
var app = new Vue({
    el: '#app',
    data: {}
});


//Vue.component('example-component', require('./components/ExampleComponent.vue'));


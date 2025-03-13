

// kerkohet skedari i bootstrap-it qe permban ngarkimin e skedareve te nevojshem dhe konfigurimin fillestar
require('./bootstrap');
// inicializohet Vue.js dhe është i gatshem per perdorim
window.Vue = require('vue');


// Regjistrohet nje komponent i quajtur 'examble-component' qe mund te perdoret ne shabllone Vue
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
    
});

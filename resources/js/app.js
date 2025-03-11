


require('./bootstrap');
// Inicializohet Vue.js dhe është i gatshëm për përdorim
window.Vue = require('vue');

// Regjistrohet një komponent i quajtur 'example-component' që mund të përdoret në shabllone Vue
Vue.component('example-component', require('./components/ExampleComponent.vue'));


//Krijohet një instancë e re Vue dhe lidhet me elementin HTML me id "app"
// Ky është aplikacioni Vue që do të menaxhojë ndërfaqen e përdoruesit
const app = new Vue({
    el: '#app'
    
});

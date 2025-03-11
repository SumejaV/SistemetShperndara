
// Ngarkon Lodash, një bibliotekë për funksione të fuqishme dhe të lehta për manipulime me koleksione dhe objektet
window._ = require('lodash');

// Ngarkon Popper.js, një bibliotekë që përdoret për menaxhimin e elementeve të pozicionuar, si tooltip-et dhe popover-et
window.Popper = require('popper.js').default;



try {

    // Ngarkon jQuery dhe e bën atë të disponueshëm globalisht si $ dhe jQuery
    window.$ = window.jQuery = require('jquery');

    // Ngarkon Bootstrap për stilizimin dhe funksionalitetet e ndërfaqes së përdoruesit
    require('bootstrap');
} catch (e) {}
// Në rast se ka ndodhur ndonjë gabim gjatë ngarkimit të jQuery ose Bootstrap



// Ngarkon Axios për dërgimin e kërkesave HTTP
window.axios = require('axios');

// Shton një header të përbashkët për kërkesat HTTP për të treguar që kërkesa është bërë me AJAX
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



// Merr CSRF token nga meta tag-u i dokumentit HTML për siguri
let token = document.head.querySelector('meta[name="csrf-token"]');

// Nëse gjendet token-i, shtohet si header për të gjitha kërkesat HTTP të ardhshme
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {


    // Nëse nuk gjendet token-i, shfaq një mesazh gabimi në konsolë
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}







// Paramètres globaux
require('./bootstrap');


// enregistrement des routes
const router = require('./routes/index.js');



const app = new Vue({
    router
}).$mount('#app')

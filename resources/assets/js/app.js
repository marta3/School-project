
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueRouter from 'vue-router';
import Index from './components/Index';
import UsuariosActivos from './components/UsuariosActivos';
import Usuarios from './components/Usuarios';
import moment from 'moment';
require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('usuarios', require('./components/Index.vue'));
Vue.use(VueRouter);

const router = new VueRouter({
	mode:'history',
    routes: [
        {
            path: 'admin-usuarios-activos',
            name: 'usuariosActivos',
            component: UsuariosActivos
        },
        {
            path: 'admin-usuarios',
            name: 'usuariosTotales',
            component: Usuarios
        },


    ],
});

const app = new Vue({
    el: '#app',
    components: { Index },
    router,
});



/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import vuetify from './vuetify';
//import VueRouter from 'vue-router';

//Vue.use(VueRouter);

// PARA MAS VISTAS
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home', require('./components/Home.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('page', require('./components/Page.vue').default);

const app = new Vue({
    theme: { dark: true },
    el: '#app',
    vuetify
});


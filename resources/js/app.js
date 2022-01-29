require('./bootstrap');

import Vue from 'vue/dist/vue';
window.Vue = require('vue').default;
 
import BootstrapVue from 'bootstrap-vue';

import App from './App.vue';

import "bootstrap-vue/dist/bootstrap-vue.css";

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';

Vue.use(BootstrapVue);

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

Vue.component('navbar-component',   require('./components/Navbar.vue').default);
Vue.component('richtext-component', require('./components/Richtext.vue').default);

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

const app = new Vue({
  el: '#app',
  router: router,
  render: h => h(App)
});
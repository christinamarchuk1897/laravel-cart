/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

import Vuex from "vuex";
Vue.use(Vuex);

import storeData from "./store/index";

const store = new Vuex.Store(storeData);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component("add-to-cart", require("./components/ToCartButton.vue").default);
Vue.component(
    "remove-from-cart",
    require("./components/RemoveFromCart.vue").default
);
Vue.component("count-btn", require("./components/CountButton.vue").default);
Vue.component(
    "guest-to-cart",
    require("./components/guest/GuestToCartButton.vue").default
);
Vue.component(
    "guest-remove-from-cart",
    require("./components/guest/GuestRemoveFromCart.vue").default
);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import { BootstrapVue, IconsPlugin } from "bootstrap-vue";

// Import Bootstrap an BootstrapVue CSS files (order is important)
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);

const app = new Vue({
    el: "#app",
    store,
});

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');



Vue.component('products', require('./components/ProductCard.vue').default);
Vue.component('adminsidebar', require('./components/AdminSidebar.vue').default);
Vue.component('admindashboard', require('./components/AdminDashboard.vue').default);
Vue.component('adminanalytics', require('./components/AdminAnalytics.vue').default);
Vue.component('adminproducts', require('./components/AdminProducts.vue').default);
Vue.component('adminorders', require('./components/AdminOrders.vue').default);
Vue.component('adminmanageusers', require('./components/AdminManageUsers.vue').default);
Vue.component('adminhome', require('./components/AdminHome.vue').default);
Vue.component('randomchart', require('./components/RandomChart.vue').default);



document.addEventListener("DOMContentLoaded", function(event) {

const app = new Vue({
    el: '#app',
});

const app2 = new Vue({
    el: '#app2',
});

const app3 = new Vue({
    el: '#app3',
});

const app4 = new Vue({
    el: '#app4',
});

const app5 = new Vue({
    el: '#app5',
});

const app6 = new Vue({
    el: '#app6',
});
})



/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import 'vue-event-calendar/dist/style.css' //^1.1.10, CSS has been extracted as one file, so you can easily update it.
import vueEventCalendar from 'vue-event-calendar'
Vue.use(vueEventCalendar, {locale: 'en'}) //locale can be 'zh' , 'en' , 'es', 'pt-br', 'ja', 'ko', 'fr', 'it', 'ru', 'de', 'vi'

import VeeValidate from 'vee-validate'
Vue.use(VeeValidate)

import Datepicker from 'vuejs-datepicker'
Vue.use(Datepicker)

let routes = [
  { path: '/', component: require('./components/DashboradComponent.vue').default },
  { path: '/expense', component: require('./components/ExpenseComponent.vue').default },
  { path: '/expense/create' ,component: require('./components/CreateExpenseComponent.vue').default },
  { path: '/category', component: require('./components/CategoryComponent.vue').default },
  { path: '/category/create' ,component: require('./components/CreateCategoryComponent.vue').default },

]

const router = new VueRouter({
  routes // short for `routes: routes`
})


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/*Vue.component('example-component', require('./components/ExampleComponent.vue').default);
*/
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const app = new Vue({
    el: '#container',
    router : router,
    }).$mount('#container');


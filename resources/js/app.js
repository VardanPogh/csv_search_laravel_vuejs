import Home from "./pages/Home";

require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue';
import ElementUI from 'element-ui';
import '../sass/element-variables.scss'
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);

const app = new Vue({
    el: '#app',
    components: {Home},
    data: function () {
        return {}
    },
});

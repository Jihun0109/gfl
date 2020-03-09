/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./perspective3dcard');

window.AOS = require('aos');
window.AOS.init();

require('slick-carousel/slick/slick.min.js');
import moment from "moment";
window.moment = require('moment');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('event-home-component', require('./components/EventHomeComponent.vue').default);
Vue.component('calendar-component', require('./components/CalendarComponent.vue').default);
Vue.component('event-component', require('./components/EventComponent.vue').default);

Vue.component('card', require('./components/Card.vue').default);

var filter = function(text, length, clamp) {
    clamp = clamp || '...';
    var node = document.createElement('div');
    node.innerHTML = text;
    var content = node.textContent;
    return content.length > length ? content.slice(0, length) + clamp : content;
};

Vue.filter('truncate', filter);

const app = new Vue({
    el: '#app',

    data() {
        return {

        }
    },

});

let resposive_param = [{
        breakpoint: 1920,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
            infinite: true,
            dots: true
        }
    },
    {
        breakpoint: 1024,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: true
        }
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 576,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
]

$('.inkcups').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    responsive: resposive_param
});
$('.dtg').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    responsive: resposive_param
});

$('.single').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    responsive: resposive_param
});
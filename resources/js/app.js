import * as bootstrap from 'bootstrap';
import Swiper from 'swiper';
import 'swiper/css';
import 'bootstrap/dist/css/bootstrap.css';
import '../scss/styles.scss';


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

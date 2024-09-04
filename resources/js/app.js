import * as bootstrap from 'bootstrap';
import 'animate.css';
/*import Swiper from 'swiper';*/
/*import 'swiper/css';*/
import 'bootstrap/dist/css/bootstrap.css';
import '../scss/styles.scss';



const modal = new bootstrap.Modal('#zoom_img_modal', {

})


    const swiper = new Swiper(".mySwiper", {

        loop: true,

     /*   effect: "fade",*/
        autoplay: {
            delay: 3000,
        },
      /*  pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },*/
    });


// Shorthand for $( document ).ready()
$(function() {
   $('#concept_design_wrap .concept_design_item').on('click', function (){
       $('#zoom_img_modal .modal-title').html('CONCEPT DESIGN - '+ $(this).attr('alt'));
       $('#zoom_img_modal .modal-body img').attr('src',$(this).attr('data-img'));

       modal.show();
   })
});



/*const swiper = new Swiper('.swiper', {
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
});*/

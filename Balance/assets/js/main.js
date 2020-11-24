window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // for menu burger
    clickBurger();

    function clickBurger() {

        let burger = document.querySelector('.burger');
        let header = document.querySelector('.header');

        burger.addEventListener('click', function () {
            burger.classList.toggle('burger-active');
            header.classList.toggle('header__mobile-active');

            // document.querySelector('.menu-mobile').classList.toggle('menu-mobile__active');
        });
    };
});
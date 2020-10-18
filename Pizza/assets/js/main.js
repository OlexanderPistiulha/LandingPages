window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // search element----------------------------------------------------------------
    let search = document.querySelector(".search"),
        searchInput = document.querySelector(".search__input"),
        searchIcon = document.querySelector(".search__icon");

    searchIcon.addEventListener('click', function () {
        search.classList.toggle("search__active");
        searchInput.classList.toggle("search__input-active");
        searchIcon.classList.toggle("search__icon-active");
    });
    // search element----------------------------------------------------------------


    // header adhere to scroll-----------------------------------------------------
    let header = document.querySelector('.header');

    window.addEventListener('scroll', function () {
        let scrolled = document.documentElement.scrollTop;

        if (scrolled < 10) {
            header.classList.add('header__absolute');
            header.classList.remove('header__fixed');

        } else if (scrolled > 10) {
            header.classList.remove('header__absolute');
            header.classList.add('header__fixed');

        }
    });
    // header adhere to scroll-----------------------------------------------------

    //  burger--------------------------------------------------------------------


    let burger = document.querySelector('.burger');

    burger.addEventListener('click', () => {
        burger.classList.toggle("burger__active");
    });
    //  burger--------------------------------------------------------------------
});
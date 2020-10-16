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

    let header = document.querySelector('.header'),
        headerMenuDesktop = document.querySelector('.menu-desktop__absolute'), 
        firstScreen = document.querySelector('.first-screen');

    window.addEventListener('scroll', function () {
        let scrolled = document.documentElement.scrollTop;

        if (scrolled < 80) {
            header.classList.add('header');
            headerMenuDesktop.classList.remove('menu-desktop__fixed');
            header.classList.remove('header__fixed');
            headerMenuDesktop.classList.add('menu-desktop__absolute');
        } else if (scrolled > 80) {
            header.classList.remove('header');
            headerMenuDesktop.classList.remove('menu-desktop__absolute');
            header.classList.add('header__fixed');
            headerMenuDesktop.classList.add('menu-desktop__fixed');

        }
    });

});
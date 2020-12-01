window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // for menu burger================================================================= 
    let burger = document.querySelector('.burger');
    let header = document.querySelector('.header__wrapp');

    burger.addEventListener('click', function () {
        burger.classList.toggle('burger-active');
        header.classList.toggle('header__wrapp-mobile-active');
    });


    // for menu active link============================================================
    const linksMenu = document.querySelectorAll('.menu__link');
    const linksTarget = document.querySelectorAll('.link-name');
    let linkForMenu = [];
    let linkForTarget = [];

    function CheckCompatibility() {
        linksMenu.forEach(link => {
            linkForMenu.push(link.hash.substring(1));
        });

        linksTarget.forEach(link => {
            linkForTarget.push(link.getAttribute('name'));
        });

        for (let i = 0; i < linksMenu.length; i++) {
            for (let k = 0; k < linksMenu.length; k++) {
                if ( linkForMenu[i].pageYOffse == linkForTarget[k].pageYOffse) {
                    console.log('true');
                } else {

                    console.log('false');
                    // linkForMenu[i].pageYOffse;
                    // linkForTarget[k].pageYOffse;
                }
            }
        }
    }

    window.addEventListener('scroll', CheckCompatibility());  

    // alert( 'Текущая прокрутка сверху: ' + window.pageYOffset );


    // [0].hash.substring(1);

    // const links = document.querySelectorAll('.links');
    // const sections = document.querySelectorAll('section');

    // function changeLinkState() {
    //     let index = sections.length;

    //     while (--index && window.scrollY + 50 < sections[index].offsetTop) {}

    //     links.forEach((link) => link.classList.remove('active'));
    //     links[index].classList.add('active');
    // }

    // changeLinkState();
    // window.addEventListener('scroll', changeLinkState);



    // header adhere to scroll =========================================================

    let headerAdhere = document.querySelector('.header__wrapp');

    window.addEventListener('scroll', function () {
        let scrolled = document.documentElement.scrollTop;

        if (scrolled > 10) {
            headerAdhere.classList.remove('header__wrapp-scroll-off');
            headerAdhere.classList.add('header__wrapp-scroll-on');

        } else if (scrolled < 10) {
            headerAdhere.classList.remove('header__wrapp-scroll-on');
            headerAdhere.classList.add('header__wrapp-scroll-off');
        }
    });

    // text typing=====================================================================
    const instance = new TypeIt("#type", {
            strings: "",
            speed: 75,
            waitUntilVisible: true,
            afterComplete: async (step, instance) => {
                instance.destroy();
            }

        }).type("Balance Your body ", {
            delay: 300
        })
        .move(-4)
        .delete(1)
        .type('B')
        .move('END')
        .type(' and mind')
        .pause(300)
        .move(-3)
        .delete(1)
        .type('M')
        .move('END')
        .go();
});
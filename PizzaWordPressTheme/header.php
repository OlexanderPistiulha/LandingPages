<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta  charset = "<?php bloginfo(); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

</head>

<body>
<div class="wrapper">

<section id="home" class="first-screen">
    <nav class="menu-mobile">  
        <ul class="menu-mobile__list">

        <!-- для меню стили которых прописаны вложеностью тегов -->
        <?php wp_nav_menu(['theme_location' => 'menu-header']); ?> 

            <li class="menu-mobile__item">
                <a href="#home" class="menu-mobile__link">home</a>
            </li>
            <li class="menu-mobile__item">
                <a href="#menu" class="menu-mobile__link">menu</a>
            </li>
            <li class="menu-mobile__item">
                <a href="#story" class="menu-mobile__link">our story</a>
            </li>
            <li class="menu-mobile__item">
                <a href="#contact" class="menu-mobile__link">contact us</a>
            </li>
        </ul>
    </nav>

    <div class="header header__absolute">
        <div class="conteiner">
            <nav class="menu-desktop" id="menu-center">
                <ul id="mDL" class="menu-desktop__list nav">             
                    <li class="menu-desktop__item">
                        <a href="#home" class="menu-desktop__link menu-desktop__link-active">home</a>
                    </li>
                    <li class="menu-desktop__item">
                        <a href="#menu" class="menu-desktop__link">menu</a>
                    </li>
                    <li class="menu-desktop__item">
                        <a href="#story" class="menu-desktop__link">our story</a>
                    </li>
                    <li class="menu-desktop__item">
                        <a href="#contact" class="menu-desktop__link">contact us</a>
                    </li>
                </ul>
                <div class="burger">
                    <span class="burger__item"></span>
                    <span class="burger__item"></span>
                    <span class="burger__item"></span>
                </div>
                <div class="search">
                    <input type="text" class="search__input">
                    <img src="<?php my_path_images('search.png') ?>" alt="" class="search__icon"></img>
                </div>

            </nav>
        </div>
    </div>
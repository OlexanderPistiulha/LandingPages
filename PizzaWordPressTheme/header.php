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
        <!-- много параметров которые задаются в  масиве -->
        <!-- этот вариант лучше -->
        <!-- <?php wp_nav_menu(['theme_location' => 'menu-header']); ?> -->

        <!-- для меню стили которого написаны с помощью классов -->
        <?php 
            $location = get_nav_menu_locations();
            $menu_id = $location['menu-header'];
            $menu_items = wp_get_nav_menu_items( $menu_id);
            foreach ($menu_items as $item) :
        ?>
             <li class="menu-mobile__item">
                <a href="<?php echo $item->url; ?>" class="menu-mobile__link"><?php echo $item->title; ?></a>
            </li>
        <?php endforeach ?>    

        </ul>
    </nav>

    <div class="header header__absolute">
        <div class="conteiner">
            <nav class="menu-desktop" id="menu-center">
                <ul id="mDL" class="menu-desktop__list nav">             
                   <!-- для меню стили которого написаны с помощью классов -->
                    <?php 
                        $location = get_nav_menu_locations();
                        $menu_id = $location['menu-header'];
                        $menu_items = wp_get_nav_menu_items( $menu_id);
                        foreach ($menu_items as $item) :
                    ?>
                        <li class="menu-desktop__item">
                            <a href="<?php echo $item->url; ?>" class="menu-desktop__link"><?php echo $item->title; ?></a>
                        </li>
                    <?php endforeach ?>                      
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
<?php 

include_once(__DIR__.'/inc/theme_text_widget.php'); /*подключаем свой виджет */

// хуки куда вешаем наши функции (1-название хука, 2-название нашей функции)
add_action('wp_enqueue_scripts', 'theme_add_scripts');
add_action('after_setup_theme', 'theme_setup_theme');
add_action('widgets_init', 'theme_add_widgets');
add_action( 'init', 'theme_registration');


// филтер для скритие admin_bar в wordpress
// add_filter('show_admin_bar', '__return_false');

function theme_add_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/css/style.css', '1.0.0', 'all');

    // подключаем js файл темы
    wp_enqueue_script( 'script-jquery','https://code.jquery.com/jquery-3.5.1.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-main', get_template_directory_uri() .'/assets/js/main.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-manu', get_template_directory_uri() .'/assets/js/menuActiveItem.js', array('script-main' ,'script-jquery'), '1.0.0', true );
};

function theme_setup_theme(){
    add_theme_support('custom-logo');/* для смены логотопа с админки (изменить в настройках в админки) */ 
    add_theme_support('title-tag');/* для смены название вкладки(title) с админки (изменить в настройках в админки) */
    add_theme_support('post-thumbnails');/* для смены миниатюры записи(uли главной картинки записи) с админки (в header использовать функцию <?php the_custom_logo() ?>)*/

    // подключение меню (1-изпользуеться в коде,  2-название зоны регистрации где будет отображаться меню)
    register_nav_menu( 'menu-header', 'menu in header' );
};

function theme_add_widgets(){
    register_sidebar([
        'name' => 'First screen(title)',
        'id' => 'first-screen-title',
        'description' => 'heading in first screen',
        'before_widget' => null,
        'after_widget' =>null
    ]);
    register_sidebar([
        'name' => 'First screen(sub-title)',
        'id' => 'first-screen-subtitle',
        'description' => 'heading in first screen',
        'before_widget' => null,
        'after_widget' =>null
    ]);
    register_widget( 'theme_text_widget' );
};

function theme_registration(){
    register_post_type('menu', array(
		'labels'             => array(
			'name'               => 'Menu', // Основное название типа записи
			'singular_name'      => 'Menu item', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new menu item',
			'edit_item'          => 'Edit menu',
			'new_item'           => 'New menu item',
			'view_item'          => 'View menu item',
			'search_items'       => 'Search menu item',
			'not_found'          =>  'Not found',
			'not_found_in_trash' => '--------------',
			'parent_item_colon'  => '',
			'menu_name'          => 'List menu'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	) );
}



// для замены путей для картинок
function my_path_images($name){
    echo  get_template_directory_uri() .'/assets/img/' . $name;
  };
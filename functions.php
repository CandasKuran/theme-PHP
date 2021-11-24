<?php 
/*

? cette page est notre thème et la page que nous utiliserons pour ajouter, 
? supprimer ou intégrer des éléments sur la page wp-admin

todo Nous ouvrons une fonction appelée "load_stylesheets()". 
todo Cette fonction que nous avons ouverte nous permet d'importer des liens tels que "style.css" ou "bootstrap.min.css" 
todo vers notre page.

! Grâce à la fonction "add_filter", nous modifions le champ de texte de 
! notre page wp-admin par l'ancien champ.

? "add_theme_support('menus') et jusqu'a line 25  => Pour ajouter un onglet de menu au panneau d'administration wp
? Ici, nous activons les menus que nous avons créés.


? add_theme_support('post-thumbnails'); (line 36 ) =>  De cette façon, nous ouvrons l'onglet pour ajouter des photos aux articles dans le panneau wp-admin.

add_image_size('small',100,100,true);
Lorsque nous écrivons ces fonctions, chaque image téléchargée dans 
la médiathèque sera redimensionnée automatiquement. (dans les tailles que nous voulons)


? register_sidebar() (line63) => 
? On écrit la partie register_sidebar dans la page function.php. car pour ajouter l'onglet "widget" à notre panneau d'administration.



*/
?>


<?php

function load_stylesheets()
{
    wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css' , array(), false , 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css' , array(), false , 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts' , 'load_stylesheets');

add_filter('use_block_editor_for_post_type','__return_false' , 100);

add_theme_support('post-thumbnails');
add_image_size('small',100,100,true);



add_theme_support('menus');  

register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme'),
        'footer-menu' => __('Footer Menu','theme'),
        
    )

);

register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before-tittle' => '<h4>',
        'after_title' => '/h4',
    )
);




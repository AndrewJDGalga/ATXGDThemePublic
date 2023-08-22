<?php 
    function register_primary_menu(){
        register_nav_menu( 'primary-menu', __('Primary Menu'));
    }
    function title_tag_support(){
        add_theme_support( 'title-tag' );
    }
    add_action('init',  'register_primary_menu');
    add_action('after_setup_theme', 'title_tag_support');
?>
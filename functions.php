<?php

add_action('widgets_init', 'portfolio_sidebars');
add_action('after_setup_theme', 'portfolio_setup');
add_action('init', 'create_post_type');

if (!function_exists('portfolio')) {

    function portfolio_sidebars() {
        register_sidebar(
                array(
                    'id' => 'primary',
                    'name' => __('primary'),
                    'description' => __('A short description of the sidebar.'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
                )
        );
        register_sidebar(
                array(
                    'id' => 'secondary',
                    'name' => __('secondary'),
                    'description' => __('A short description of the sidebar.'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
                )
        );
    }

}

if (!function_exists('portfolio_setup')) {

    function portfolio_setup() {
        add_theme_support('post-thumbnails');
        if (function_exists('add_image_size')) {

            add_image_size('ipad', 540, 380, FALSE);
            add_image_size('iphone', 270, 190, FALSE);
            add_image_size('hasard', 627, 314, FALSE);

            /* if(preg_match('/lg|iphone|blackberry|opera|ipad|android|Mobile|psp|SCH-I800/i', $_SERVER['HTTP_USER_AGENT'])) {  
              add_image_size('folio-work',540,380,FALSE);
              }else{
              add_image_size('folio-work',640,480,FALSE);
              } */
        }

        add_theme_support('post-formats', array('aside', 'link', 'gallery', 'status', 'quote', 'image'));

        register_nav_menu('header-menu', __('Header Menu', 'titi'));
    }

}

if (!function_exists('create_post_type')) {

    function create_post_type() {
        register_post_type('works', array('labels' => array(
                'name' => __('Travaux'),
                'singular_name' => __('Travail')),
            'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'excerpt', 'comments'),
            'public' => TRUE,
            'has_archive' => true
        ));

        register_post_type('about', array('labels' => array(
                'name' => __('Moi'),
                'singular_name' => __('Moi')),
            'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'comments'),
            'public' => TRUE,
            'has_archive' => true
        ));

        register_post_type('Blog', array('labels' => array(
                'name' => __('Blog'),
                'singular_name' => __('Blog')),
            'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'comments', 'excerpt'),
            'public' => TRUE,
            'has_archive' => true
        ));
    }

}

add_filter('excerpt_length', 'custom_excerpt_length', 10);

function custom_excerpt_length($length) {
    return 10;
}

add_filter('wp_trim_excerpt', 'new_excerpt_more');

function new_excerpt_more($excerpt) {
    return str_replace('[...]', '...', $excerpt);
}

add_filter('comment_form_defaults', 'juiz_manage_default_fields');

if (!function_exists('juiz_manage_default_fields')) {

    function juiz_manage_default_fields($default) {
        $default['fields']['author'] = '<p class="comment-form-author">
            <label for="author">Nom</label>
            <input id="author" type="text" aria-required="true" size="30" placeholder="Introduisez votre nom" name="author">
        </p>';
        $default['fields']['email'] = '
            <p class="comment-form-email">
                <label for="email">Email</label>
                <input id="email" name="email" value="' . $commenter['comment_author_email'] . '" placeholder="Votre email" aria-required="true" size="30" type="text" />
          </p>';
        $default['fields']['url'] = '';
        return $default;
    }

}

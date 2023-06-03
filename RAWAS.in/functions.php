
<?php
function gt_setup() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), NULL, microtime(), 'all' );
    wp_enqueue_script( 'main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@100&family=Roboto:wght@100&display=swap' );
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css' );
}

add_action( 'wp_enqueue_scripts', 'gt_setup' );

//adding theme support

function gt_init(){

    add_theme_support('post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5' ,
    array('comment-list', 'comment-form','search-form')
);
}

add_action( 'after_setup_theme', 'gt_init' ); 


//project post type
function get_custom_post_type(){
    register_post_type( 'project', 
        array(
            'rewrite' => array('slug' => 'project'),
            'labels' => array(
                'name' => 'projects',
                'singular_name' => 'project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has-archive ' => true
            // 'has_archive' => array(
            //     'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            // )
        )
    );
}

add_action( 'init', 'get_custom_post_type');


?>
<?php

wp_enqueue_script('jquery');


if( function_exists('register_sidebar')){
    register_sidebar(array(
    'id' => 'sidebar-1',
    'name'        => 'Sidebar',
    'description' => 'Blog Right Sidebar',
    //'before_title' => '<div class="blog-sidebar-title">',
    //'after_title' => '</div>',
    ));
}
//remove_filter( 'the_content', 'wpautop' );
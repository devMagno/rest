<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'wp_generator' );

add_theme_support('menus');
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

?>
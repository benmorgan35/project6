<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', 'parent-style' );
}

add_custom_background();

// Saut vers le haut de l'article avec le more link
function remove_more_jump_link($link) {
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);}
if ($end) {
$link = substr_replace($link, '', $offset, $end-$offset);}
return $link;}
add_filter('the_content_more_link', 'remove_more_jump_link');

?>
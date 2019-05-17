<?php
require get_template_directory() . '/inc/sizes.php';
require get_template_directory() . '/inc/loadstyles.php';
require get_template_directory() . '/inc/loadscripts.php';
require get_template_directory() . '/inc/menu.php';
require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/post-page.php';

/*
* excerpt function
*/
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink() . '" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/*
* to add feature image to post
*/
add_theme_support('post-thumbnails');
?>
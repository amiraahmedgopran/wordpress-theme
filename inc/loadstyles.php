<?php
function loadStyles() {
    wp_register_style('maincss', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all');
    wp_enqueue_style('maincss');
}

add_action('wp_enqueue_scripts', 'loadStyles');

?>
<?php
function includejquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'includejquery');

function loadScript() {
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), 1, true);
    wp_enqueue_script('bootstrapjs');
    wp_register_script('osajs', get_template_directory_uri() . '/node_modules/aos/dist/aos.js', array(), 1, true);
    wp_enqueue_script('osajs');
    wp_register_script('fitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array(), 1, true);
    wp_enqueue_script('fitvids');
    wp_register_script('owl', get_template_directory_uri() . '/node_modules/owl.carousel/dist/owl.carousel.min.js', array(), 1, true);
    wp_enqueue_script('owl');
    wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), 1, true);
    wp_enqueue_script('mainjs');
}

add_action('wp_enqueue_scripts', 'loadScript');

?>
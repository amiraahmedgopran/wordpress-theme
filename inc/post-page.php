<?php
// function my_post_templater($template){
//     if( !is_single() )
//       return $template;
//     global $wp_query;
//     $c_template = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
//     return empty( $c_template ) ? $template : $c_template;
//   }
  
//   add_filter( 'template_include', 'my_post_templater' );
  
//   function give_my_posts_templates(){
//     add_post_type_support( 'post', 'page-attributes' );
//   }
  
//   add_action( 'init', 'give_my_posts_templates' );
?>
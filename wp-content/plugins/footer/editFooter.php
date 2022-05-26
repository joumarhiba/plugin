<?php
/**
 * @package Edit_Footer
 * @version 1.0.0
 */
/*
Plugin Name: Edit Footer
Plugin URI: http://wordpress.org/plugins/edit-footer/
Description: C'est une extension qui permet d'éditer le footer de votre site
Author: Matt Mullenweg
Version: 1.0.0
Author URI: http://ma.tt/
*/

// don't load directly
if (!defined('ABSPATH'))
    die('-1');

register_activation_hook(__FILE__, function () {
    touch(__DIR__.'/footer');
    flush_rewrite_rules();
});

register_deactivation_hook(__FILE__, function () {
    unlink(__DIR__.'/footer');
});

add_action('init', function () {
    register_post_type('footer', [
        'label' => 'Footer',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-feedback',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'has_archive' => true,
    ]);
});

function example_footer_plugin () {
    $content = '';
    $content = '<footer style="text-align: center;margin:10% 0 0 0; background-color:#fff;padding:3% 0;border-top:1px solid #eee">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #3b5998;text-decoration:none;padding:1%; border-radius:50%;margin-right:4%"
          href="#!"
          role="button"
          >
          <span class="dashicons dashicons-facebook-alt"></span></a>

        <!-- Twitter -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #55acee;text-decoration:none;padding:1%; border-radius:50%;margin-right:4%"
          href="#!"
          role="button"
          ><span class="dashicons dashicons-twitter"></span></a>

        <!-- Google -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #dd4b39;text-decoration:none;padding:1%; border-radius:50%;margin-right:4%"
          href="#!"
          role="button"
          ><span class="dashicons dashicons-google"></span></a>

        <!-- Instagram -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #ac2bac;text-decoration:none;padding:1%; border-radius:50%;margin-right:4%"
          href="#!"
          role="button"
          ><span class="dashicons dashicons-instagram"></span></a>

        <!-- Linkedin -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #0082ca;text-decoration:none;padding:1%; border-radius:50%;margin-right:4%"
          href="#!"
          role="button"
          ><span class="dashicons dashicons-linkedin"></span></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-5" style=margin-top:3%; ">
    © All Rights Reserved 2022 Copyright.
    <!-- Copyright -->
  </footer>';

    return $content;
}
add_shortcode('example_footer', 'example_footer_plugin');

// add_action('wp_footer','edit_footer');

// function edit_footer() {
//     echo ('<p>copyright &copy 2022</p>');
// }
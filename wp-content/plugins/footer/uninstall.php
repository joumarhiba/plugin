<?php

/**
 * Trigger this file on Plugin uninstall
 * @package Edit_Footer
 *
 */

//  if this global variable generate apply Wordpress is not defined that means that someone is trying to access to this file not via wpress (not via a proper way )
 if (! defined( 'WP_uninstall_PlUGIN')) {
     die;
 }

//  clear DB stored data
$footer = get_posts( array('post_type' => 'footer', 'numberposts' => -1));

foreach($footer as $f) {
    wp_delete_post($f->ID, true);
}
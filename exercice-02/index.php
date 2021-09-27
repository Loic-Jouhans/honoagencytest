<?php
/**
 * @package show_social_network
 * @version 1.0.0
 */
/*
Plugin Name: show_social_network
Plugin URI: http://127.0.0.1/Honoagency-test/exercice-02/wordpress/wp-admin/plugins.php/show_social_network
Description: Pluggin permettant d'afficher une liste de réseaux sociaux.
Author: Loïc Jouhans
Version: 1.0.0
Author URI: http://127.0.0.1/Honoagency-test/exercice-02/wordpress/wp-admin/plugins.php/show_social_network
*/

function social_network() {
  $content = '<h1>Liste des réseaux sociaux</h1>';
  $content .= '<ul><li><a href="https://facebook.com">Facebook</a></li>';
  $content .= '<li><a href="https://instagram.com">Instagram</a></li>';
  $content .= '<li><a href="https://www.linkedin.com">Linkedin </a></li>';
  $content .= '<li><a href="https://github.com/honoagency">GitHub </a></li></ul>';

  return $content;
}

add_shortcode('ul', 'social_network');
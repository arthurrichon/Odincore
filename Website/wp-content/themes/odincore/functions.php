<?php
// Ajouter Image à la Une sur les articles
add_theme_support('post-thumbnails');

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Ajouter un menu bootstrap
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'odincore' ),
) );

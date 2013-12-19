<?php
/*
Plugin Name: TCR Add Author Filter
Description: Author filter for WordPress admin.
Version: 1.0.0
Plugin URI: http://thecellarroom.net
Author: The Cellar Room Limited
Author URI: http://www.thecellarroom.net
Copyright (c) 2013 The Cellar Room Limited
*/

// Add an author dropdown to the all posts admin page

function author_filter() { 

$args = array('name' => 'author', 'show_option_all' => 'View all authors'); 

     if (isset($_GET['user'])) { 
               $args['selected'] = $_GET['user']; 
    } 

wp_dropdown_users($args); 
} 

add_action('restrict_manage_posts', 'author_filter');
?>

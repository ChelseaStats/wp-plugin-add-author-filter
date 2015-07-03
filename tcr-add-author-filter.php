<?php
/*
Plugin Name: TCR Add Author Filter
Description: Author filter for WordPress admin.
Version: 1.0.0
Plugin URI: http://thecellarroom.uk
Author: The Cellar Room Limited
Author URI: http://www.thecellarroom.uk
Copyright (c) 2013 The Cellar Room Limited
*/

defined( 'ABSPATH' ) or die();

/*************************************************************************/

if ( ! class_exists( 'tcr_author_filter' ) ) :

		class tcr_author_filter {

			function __construct() {
				add_action('restrict_manage_posts', array( $this, 'author_filter'));
			}
		
			function author_filter() { 
			$args = array('name' => 'author', 'show_option_all' => 'View all authors'); 
				 if (isset($_GET['user'])) { 
						   $args['selected'] = $_GET['user']; 
				}
			wp_dropdown_users($args); 
			}
			

		}
		new tcr_author_filter;

endif;

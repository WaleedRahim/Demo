<?php
/*
Plugin Name: PHQ Form
Description: Plugin to Show results of PHQ.
Version: 1.0
Author: Waleed Khan
*/
?>

<?php
// Define plugin constants
define( 'MY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load plugin files and functions
require_once MY_PLUGIN_DIR . 'includes/phq-main.php';

// // Register plugin activation and deactivation hooks
// register_activation_hook( __FILE__, 'phq_activate' );
// register_deactivation_hook( __FILE__, 'phq_deactivate' );

// Add plugin actions and filters

// Plugin functions
add_action( 'admin_menu', 'phq_admin_menu' );
// Admin menu Function
function phq_admin_menu() {
    add_menu_page(
      'PHQ',
      'PHQ',
      'manage_options',
      'phq-form',
      'phq_admin_page',
      'dashicons-admin-generic',
      100
    );
  }
  function phq_admin_page() {
    // Output the contents of the admin page
  }
?>
<?php

/**
 * The Reve functions and definitions
 **/


// add_action( 'init', 'block_ip_address' );

// function block_ip_address(){


// $ip_list = array(
//         '^77\.29\.',
//         '203.215.161.2' //This is my IP Addres for checking purpose i Added this
// );

// if (isset($_SERVER['HTTP_CLIENT_IP']))
// {
//     $user_ip = $_SERVER['HTTP_CLIENT_IP'];
// } else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//     $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
// } else if(isset($_SERVER['HTTP_X_FORWARDED'])) {
//     $user_ip = $_SERVER['HTTP_X_FORWARDED'];
// } else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {
//     $user_ip = $_SERVER['HTTP_FORWARDED_FOR'];
// } else if(isset($_SERVER['HTTP_FORWARDED'])) {
//     $user_ip = $_SERVER['HTTP_FORWARDED'];
// } else if(isset($_SERVER['REMOTE_ADDR']))  {
//     $user_ip = $_SERVER['REMOTE_ADDR'];
// }

//         $blocked = false;

//         foreach($ip_list as $ip)
//         {
//             if($user_ip == $ip)
//             {
//                 $blocked = true;
//                 break;
//              }

             
//         }

//         if($blocked == true)
//     {
//         header('Location: "https://www.404.com"');
//         echo ("You Are Not Allowed To Visit This Webiste");
//     }
 

// }



function reve_theme_setup(){
	
    
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support( 'widgets-block-editor' );
    add_theme_support( 'custom-logo');
    add_theme_support( 'title-tag' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );
    load_theme_textdomain( 'reve', get_template_directory() . '/languages' );
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    $args = array(
        'flex-width'    => true,
        'width'         => 1280,
        'flex-height'   => true,
        'height'        => 400,
        'header'   => true,
        
    );
    add_theme_support( 'custom-header', $args );
   
    }
add_action('after_setup_theme' , 'reve_theme_setup');

?>

<?php
 
 
function reve_register_nav_menu()
{
        register_nav_menus( array(
            'header_menu' => __( 'Reve' )
           
        ) );
}
add_action( 'init', 'reve_register_nav_menu');



?>
<?php

// Adding External Files

require get_template_directory().'/scripts.php';
require get_template_directory().'/inc/customizer.php';
require get_template_directory().'/inc/kirki/kirki.php';
require get_template_directory().'/apidata.php';
require get_template_directory().'/inc/popupmail.php';



?>


<?php

// create table

global $wpdb;

$charset_collate = $wpdb->get_charset_collate();
$table_name = $wpdb->prefix . "popupdata";

$sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  -- time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
  littleintest int ,
  FDDRH int ,
  TFRS int ,
  FTRHLE int ,
  PARO  int,
  FBAYS int,
  TCOT int,
  MRSSS int,
  TTYWBBOD int,
  TotalScore text,
  Points int,
  Fname text,
  Email text, 
  
  PRIMARY KEY  (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );


?>


<!-- Insert Data -->


<?php


function ajax_contact_us(){


//wp_send_json_success( "text");
$arr=[];
// $dat=[];
// $point=[];

wp_parse_str( $_POST['contact_us'],$arr );
// wp_parse_str( $_POST['Score'],$dat );
// wp_parse_str( $_POST['points'],$point );


global $wpdb;
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

$table_name = $wpdb->prefix . "popupdata";


  $result = $wpdb->insert($table_name,[

    "littleintest" => $arr['littleintest'],
    "FDDRH" => $arr['FDDRH'],
    "TFRS" => $arr['TFRS'],
    "FTRHLE" => $arr['FTRHLE'],
    "PARO" => $arr['PARO'],
    "FBAYS" => $arr['FBAYS'],
    "TCOT" => $arr['TCOT'],
    "MRSSS" => $arr['MRSSS'],
    "TTYWBBOD" => $arr['TTYWBBOD'],
    "TotalScore" => $arr['Score'],
    "Points" => $arr['points'],
    "Fname" => $arr['name'],
    "Email" => $arr['email'],
 
  ]);
       
wp_send_json_success( $result );



}


add_action( 'wp_ajax_contact_us', 'ajax_contact_us');
add_action( 'wp_ajax_nopriv_contact_us', 'ajax_contact_us' );

?>

<?php




// Register Custom Post Type Project

add_action( 'init', 'create_project_cpt' ); // action Hook for custom post types
function create_project_cpt() {

    $labels = array(
        'name' => _x( 'Projects', 'test' ),
        'singular_name' => _x( 'Project', 'test' ),
        'menu_name' => _x( 'Projects', 'Admin Menu text', 'test' ),
        'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'test' ),
        'archives' => __( 'Project Archives', 'test' ),
        'attributes' => __( 'Project Attributes', 'test' ),
        'parent_item_colon' => __( 'Parent Project:', 'test' ),
        'all_items' => __( 'All Projects', 'test' ),
        'add_new_item' => __( 'Add New Project', 'test' ),
        'add_new' => __( 'Add New', 'test' ),
        'new_item' => __( 'New Project', 'test' ),
        'edit_item' => __( 'Edit Project', 'test' ),
        'update_item' => __( 'Update Project', 'test' ),
        'view_item' => __( 'View Project', 'test' ),
        'view_items' => __( 'View Projects', 'test' ),
        'featured_image' => __( 'Featured Image', 'test' ),
        'set_featured_image' => __( 'Set featured image', 'test' ),
        'remove_featured_image' => __( 'Remove featured image', 'test' ),
        'use_featured_image' => __( 'Use as featured image', 'test' ),
        'insert_into_item' => __( 'Insert into Project', 'test' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Project', 'test' ),
        'items_list' => __( 'Projects list', 'test' ),
        'items_list_navigation' => __( 'Projects list navigation', 'test' ),
        'filter_items_list' => __( 'Filter Projects list', 'test' ),
    );
    $args = array(
        'label' => __( 'Project', 'test' ),
        'description' => __( '', 'test' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'post-formats', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',


    );
    register_post_type( 'project', $args );

}



 // Add custom taxonomies to the Project


function add_custom_taxonomies() {


  // Add new "Project Type" taxonomy to Posts

  register_taxonomy('projectkey', 'project', array(
   
    'hierarchical' => true,
   
    'labels' => array(
      'name' => _x( 'Project Type', 'Project Type' ),
      'singular_name' => _x( 'Project Type', 'Project Type' ),
      'search_items' =>  __( 'Search Project Type' ),
      'all_items' => __( 'All Project Types' ),
      'parent_item' => __( 'Parent Project Type' ),
      'parent_item_colon' => __( 'Parent Project Type:' ),
      'edit_item' => __( 'Edit Project Type' ),
      'update_item' => __( 'Update Project Type' ),
      'add_new_item' => __( 'Add New Project Type' ),
      'new_item_name' => __( 'New Project Type' ),
      'menu_name' => __( 'Project Type' ),
    ),
    
    'rewrite' => array(
      'slug' => 'Project Type', 
      'with_front' => false, 
      'hierarchical' => true 
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
?>



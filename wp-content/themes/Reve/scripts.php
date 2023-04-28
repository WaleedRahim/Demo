<?php

/* Scripts */


?>



<?php

function Reve_theme_scripts(){


    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('fav-icon', get_template_directory_uri().'/assets/img/favicon.png' );

    wp_enqueue_style('image', get_template_directory_uri().'/assets/img/apple-touch-icon.png' );
    
    wp_enqueue_style('style-css', get_template_directory_uri().'/assets/vendor/aos/aos.css');

    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');

    wp_enqueue_style('icon-css', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');

    wp_enqueue_style('box-icon', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css');

    wp_enqueue_style('lightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');

    wp_enqueue_style('remix-icon', get_template_directory_uri().'/assets/vendor/remixicon/remixicon.css');

    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');

    // Java script Files
     

    // wp_enqueue_script('jquery.min.js');
    
    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery.min.js', get_template_directory_uri().'/assets/jquery/jquery.min.js', );

    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', );

    wp_enqueue_script('vendor-js', get_template_directory_uri().'/assets/vendor/aos/aos.js', );

    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' );

    wp_enqueue_script('lightbox-js', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js',);

    wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', );

    wp_enqueue_script('emailvalidate-js', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js' );

    wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', );

    wp_enqueue_script('waypoints-js', get_template_directory_uri().'/assets/vendor/waypoints/noframework.waypoints.js' );

    wp_enqueue_script('chart-js', get_template_directory_uri().'/assets/js/chart.js', array('jquery'), '1.0' ) ; // Popup

    // wp_enqueue_script('popup-js', get_template_directory_uri().'/assets/js/popup.js', array('jquery'), '1.0' ); // Popup

    

    // <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    // wp_enqueue_script('popup-js', get_template_directory_uri().'/assets/js/popup.js','jQuery', '1.0.0');

    // wp_localize_script( 'ajax-js', 'popup_ajax_url',
    // array( 
    //     'ajax_url' => admin_url( 'admin-ajax.php' )
    // ));

    wp_enqueue_script('todo-js', get_template_directory_uri().'/assets/js/todo.js','jQuery' );

    wp_localize_script( 'todo-js', 'todo_ajax_url',
    array( 
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ));

}

add_action('wp_enqueue_scripts', 'Reve_theme_scripts' );



?>
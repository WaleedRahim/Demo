<?php

/* Template Name: Single Post */
get_header();
?>

<?php 


$Api_args = array(
    'post_type' => 'dummy',
    'posts_per_page' => 12 , 
    'order' => 'ASC', 
    'post_status' => 'publish');

$loop = new WP_Query($Api_args); 

while ( $loop->have_posts() ) { $loop->the_post();



 the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
   
 ?>
 <div class="entry-content">
  
        <?php the_content(); ?>
    </div>

    <?php wp_reset_postdata() ?>
		
        <?php } 



get_footer();
?>




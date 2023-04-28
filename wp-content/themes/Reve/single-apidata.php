<?php

/** This is the single post */


get_header();
?>

<div class="container">
<?php
while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/content', get_post_format() ); ?>


<?php
	
    
 endwhile; 



get_footer();
?>



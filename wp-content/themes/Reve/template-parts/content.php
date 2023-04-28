<?php

/** This is the content post */


get_header();
?>

<div class="container">
<?php
while ( have_posts() ) :
	the_post(); ?>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 mt-5">
            <?php the_post_thumbnail( ) ?>
            <?php the_title( ); ?>
            </div>

            <div class="row">
            <div class="content col-lg-12">
            <p class = "mb-1"> <?php the_content() ?> </p>
            </div>

        </div>

      </div>

</div>
<?php
	
    
 endwhile; 



get_footer();
?>



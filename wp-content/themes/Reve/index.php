<?php

/*

This is mian page
*/

get_header();?>

<section class="page-title bg-1 ">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
         
          <h1 class="text-capitalize mb-5 text-lg"><?php wp_title(); ?></h1>
         <!-- <div class=" breadcrumb ">   <?php
               /*if ( function_exists('yoast_breadcrumb') ) {
               yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
               }
               */?> </div>-->
        
        </div>
      </div>
    </div>
  </div>
</section>


<div class="container blog">
<div class="row mt-5" >
<div class="block text-center">
          
          </div>
     <?php 
     
            while ( have_posts() ) : the_post(); ?>
    
            <div class="col-md-4 col-sm-12">
            <div class="service-item mb-4">
             <?php the_post_thumbnail(); ?>
             <div class="text">
             <p class="content mt-3"><a href="<?php the_permalink(); ?>"><?php  the_title();?></a></p> </div>
             <div class="excerpt"> <?php the_excerpt() ?></div>
            </div>
            </div>
    

 <?php
                    
      endwhile; 
                     
 ?>

 <?php
$Api_args = array(
    'post_type' => 'dummy',
    'posts_per_page' => 12 , 
    'order' => 'ASC', 
    'post_status' => 'publish');

$loop = new WP_Query($Api_args); 

while ( $loop->have_posts() ) { $loop->the_post();


?>

  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  
   
 

 <div class="entry-content">
  
        <?php the_content(); ?>
    </div>

    <?php wp_reset_postdata() ?>
		
        <?php } ?>



 <div class="pagination mb-5"> 
<?php echo paginate_links() ?>
    </div>
</div>
</div>
     
<?php get_footer();?>
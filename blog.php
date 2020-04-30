<?php
/************
 * Template Name: Blog
 ***********/
get_header(); ?>
   
   
         <section class="main-area">
      
        <?php
						// Start the loop.
						while ( have_posts() ) : the_post();
						?>
                
                		<?php the_content(); ?>  
                       
                        <?php
						// End the loop.
						endwhile;
						?>
    
    </section>   
    
<?php get_footer(); ?>
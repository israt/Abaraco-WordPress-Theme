<?php
/************
 * Template Name: Who-we-are
 ***********/
get_header(); ?>



<section class="we-content">
	<div class="container pad-0">
    	<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
						?>
                
                		<?php the_content(); ?>  
                       
                        <?php
						// End the loop.
						endwhile;
						?>
    
    </div>
     <!--container ends...... -->       
</section>
<!--we-content ends...... -->
      


    
<?php get_footer(); ?>


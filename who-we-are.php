<?php
/************
 * Template Name: Who-we-are
 ***********/
get_header(); ?>

<section class="who-we-are">
	<div class="container pad-0">
    	<div class="col-md-12 pad-0">
        	<h2><?php the_title();?></h2>
            <h3><?php the_subtitle(); ?></h3>
        </div>
        <!--col-md-12 ends...... -->
        
        <div class="team">
          <?php
					$args = array(
					  'post_type' => 'team',
					  'orderby' => 'name',
					  'order' => 'ASC',	
					  );					  
					  $query = new WP_Query($args);
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					     
			      ?>
                  <?php
     $feat_image3 = '';
                if (has_post_thumbnail( $post->ID ) ){ 
                $feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
    }
    ?>
        	<div class="col-md-4 col-sm-4">
            	<div class="single-team">
                    <div class="img-border">
                		<img src="<?php echo $feat_image3; ?>" alt="<?php the_title();?>">
                    </div>
                    <h2><?php the_title();?></h2>
           		    <h3><?php the_subtitle(); ?></h3>
                    <h4><?php echo $link=get_post_meta(get_the_ID(),"link",true)?></h4>
                    <?php the_content();?>
                </div>
                <!--single-team ends...... -->
            </div>
            <!--col-md-4 ends...... -->
            
             <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?> 
        </div>
        <!--team ends...... -->
    </div>
    <!--container ends...... -->
</section>
<!--section who-we-are ends...... -->


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


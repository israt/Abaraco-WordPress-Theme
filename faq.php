<?php
/************
 * Template Name: FAQ
 ***********/
get_header(); ?>
   
   
  <!-- section:banner-area-inner -->
	<section id="banner-area-inner">
    	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-bg.jpg" alt="header-bg">
    </section>
    <!-- banner-area ends -->
    
    <!-- section:inner-area -->
	<section id="inner-area" class="mb-50 faq">
    	<div class="container">
            <div class="col-md-8">
           		<h1>FAQs</h1> 
                <ul class="accordion">
                
                <?php
					$args = array(
					  'post_type' => 'faq',
					  'orderby' => 'name',
					  'order' => 'DESC',	
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
                      <li class="accordion__item js-contentToggle">
                        <button class="accordion__trigger js-contentToggle__trigger" type="button"><?php the_title();?><span class="control"></span></button>
                        <div class="accordion__content is-hidden js-contentToggle__content">
                          <?php the_content();?>
                        </div>
                      </li>
                      
                       <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?> 
                      
                      
                      
                     
                      
                    </ul>
                    <!-- accordion ends -->			
            </div>
            <!-- col-md-8 ends -->
            
            <div class="col-md-4">
            	<div class="page-sidebar">
                	<div class="col-md-12">
                        <h1>Follow us</h1>
                        <?php echo of_get_option('sf1','no entry');?> 
                    </div>
                    <!-- col-md-12 ends -->	
                    
                    <div class="social-feed">
                      
                       
                    
                    </div>
                    <!-- recent-news ends -->
                </div>
                <!-- page-sidebar ends -->
            </div>
            <!-- col-md-4 ends -->	
            
        </div>
        <!-- container ends -->
    </section>
    <!-- inner-area ends -->
    
    
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <!-- JS | contenttoggle script -->
 <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.contenttoggle.js"></script>
 <script>
   $( ".js-contentToggle" ).contentToggle();
  </script>
    
<?php get_footer(); ?>
    
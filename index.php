<?php



/************



 *  This is Home page main Template file *



 *  Template Name: HomePage



 ***********/



get_header(); ?>



<?php /*?> <!--section.banner-area starts...-->
        <section class="banner-area">
         
 <?php echo do_shortcode( '[rev_slider alias="slider 1"]' );?>
<!--carousel starts here.......-->
        		
        </section>
        <!--section.banner-area ends...-->
        
        
        <!--section blog-area starts...... -->
        <section class="blog-area filter-one">
            	<div  class="container pad-0">
                    <div class="col-md-12">

                        <h1><?php echo of_get_option('t1','no entry');?></h1>
                    	<?php echo do_shortcode( '[ess_grid alias="demo"]' );?>
                    </div>
                </div>
        </section>
        <!--section event-area ends...... -->
        
        
        
        <!--section apoios-area starts..-->
        <section class="apoios-area">
            	<div  class="container">
                         <div class="col-md-12">
                              <h1>Apoios</h1>
                    	      <?php echo do_shortcode( '[ess_grid alias="logo"]' );?>
                         </div>
                  
                </div>
                <!--container ends....-->
        </section>
        <!--section logo-area ends..--> <?php */?>
        
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


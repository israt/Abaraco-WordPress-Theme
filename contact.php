<?php
/************
 * Template Name: Contact Us
 ***********/
get_header(); ?>


<section class="contact-map">
     <div class="tab tab-horiz">
    		<ul class="tab-content">
                  <li>
                  	<?php echo of_get_option('mr1','no entry');?> 
                  </li>
                  <li>
                  	<?php echo of_get_option('mr2','no entry');?>
                  </li>
                  <li>
                  	<?php echo of_get_option('mr3','no entry');?> 
                  </li>
                 <li>
                 	<?php echo of_get_option('mr4','no entry');?> 
                  </li>
            </ul>
             <ul class="tab-legend">
              <li class="active">
              	  <h3><?php echo of_get_option('tr1','no entry');?></h3>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo of_get_option('ar1','no entry');?></p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo of_get_option('pr1','no entry');?>-<span>Fax:</span><?php echo of_get_option('fr1','no entry');?></p>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i><?php echo of_get_option('er1','no entry');?></p>
              </li>
              <li>
              	  <h3><?php echo of_get_option('tr2','no entry');?></h3>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo of_get_option('ar2','no entry');?></p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo of_get_option('pr2','no entry');?>-<span>Fax:</span><?php echo of_get_option('fr2','no entry');?></p>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i><?php echo of_get_option('er2','no entry');?></p>
              </li>
              <li>
              	  <h3><?php echo of_get_option('tr3','no entry');?></h3>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo of_get_option('ar3','no entry');?></p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo of_get_option('pr3','no entry');?>-<span>Fax:</span><?php echo of_get_option('fr3','no entry');?></p>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i><?php echo of_get_option('er3','no entry');?></p>
              </li>
              <li>
              	  <h3><?php echo of_get_option('tr4','no entry');?></h3>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo of_get_option('ar4','no entry');?></p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo of_get_option('pr4','no entry');?>-<span>Fax:</span><?php echo of_get_option('fr4','no entry');?></p>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i><?php echo of_get_option('er4','no entry');?></p>
              </li>
            </ul>
     </div>
</section>


<section class="contact-form">
	<div class="container">
    	<div class="col-md-8">
               <h1>Contact Us</h1>
               <p>How can we help? Don’t hesitate to contact us.</p>
               <div class="form_area_inner">
                	<?php echo do_shortcode( '[contact-form-7 id="110" title="Contact form 1"]' );?>                           
              </div>
        </div>
        <div class="col-md-4">
              <div class="social-feed">
              	<h2>feed here</h2>	  
                <?php echo of_get_option('sf1','no entry');?> 
              </div>
        </div>
    </div>
</section>

 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/tabModule.js"></script>
 <script type="text/javascript">
		$(document).ready(function(){
			 tabModule.init();
		});
 </script>

<?php get_footer(); ?>







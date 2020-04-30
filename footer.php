 <!-- newsletter-->
   <section class="news">
   		<div class="container">
            	<div class="col-md-4 col-sm-4">
                	<a href="<?php bloginfo('url');?>"><img src="<?php echo of_get_option('logo-ft','no entry');?>" alt="logo-ft"></a>
                   
                </div>
            	<div class="col-md-8 col-sm-8">
                	<form role="form">
                      <div class="form-group">
                            <div class="news-form">
                                <input type="email" class="form-control" id="sub" placeholder="Enter Email Address">
                                <input type="submit" class="form-control pull-left news-btn" id="sub" value="Subscribe!">
                            </div>
                            <!--news-form ends...-->
                            <label for="sub">SUBSCREVA A NOSSA NEWSLETTER</label>
                      </div>
                    </form>
                </div>
        </div>
   </section>
   <footer>
        <div class="container">
                <div class="col-md-9 col-sm-9">
                    <p><?php echo of_get_option('copyright_ftext','no entry');?></p>
                     <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => '','container'=> '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'left-ft', ) ); ?>
                    <?php /*?><ul class="left-ft">
                    	<li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul><?php */?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <ul class="ft-social">
                    	<li><a href="<?php echo of_get_option('fb','no entry');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo of_get_option('pin','no entry');?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo of_get_option('twt','no entry');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                       <!-- <li><a href="<?php echo of_get_option('fb','no entry');?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>-->
                        <li><a href="<?php echo of_get_option('ins','no entry');?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo of_get_option('plus','no entry');?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
        </div>
   </footer>
    
    
    
	






<!-- **** JS(Java Script) FILES****** --> 
<!-- Lib -->
<!--<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>-->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>-->




 
<!-- BOOTSTRAP js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
<!-- sc menu js -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sc-menu.js"></script>
<!-- bx JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider1').bxSlider();
	});
</script>




<!--<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>-->
<!--location menu........-->
<script>
var jq1101 = jQuery.noConflict();
jq1101(document).ready(function(){
   jq1101(".c").click(function(){
		jq1101( ".dis" ).slideToggle( "slow");
    });
	
});
</script>
<!--location menu........-->

<script>
var jq1101 = jQuery.noConflict();
jq1101(document).ready(function(){
   jq1101(".eg-icon-search").click(function(){
		jq1101( "#blog-page input.eg-search-input" ).css( "display","block");
		jq1101( ".eg-search-submit" ).css( "display","none");
		jq1101( ".eg-search-clean" ).css( "display","block");
		//jq1101( ".eg-search-submit i" ).css({"color": "transparent","background": " url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/red-cross.png) no-repeat",});
		//jq1101( ".eg-search-submit" ).addClass("w");
		jq1101( ".dropdownstyle" ).css( "display","none");
		jq1101( ".esg-sortbutton" ).css( "display","none");
		jq1101( "#blog-page .minimal-light .esg-sortbutton-order" ).css( "display","none");
    });
	
	
	jq1101(".eg-search-clean").click(function(){
		jq1101( "#blog-page input.eg-search-input" ).css( "display","none");
		jq1101( ".eg-search-submit" ).css( "display","block");
		jq1101( ".eg-search-clean" ).css( "display","none");
		jq1101( ".dropdownstyle" ).css( "display","inline-block");
		jq1101( ".esg-sortbutton" ).css( "display","inline-block");
		jq1101( "#blog-page .minimal-light .esg-sortbutton-order" ).css( "display","inline-block");
    });
	
	
	
	
});
</script>


<?php /*?><script>
var jq1101 = jQuery.noConflict();
jq1101(document).ready(function(){
   jq1101(".search-submit").click(function(){
		jq1101( ".page-searchbox input[type="submit"]" ).css({"color": "transparent","background": " url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/red-cross.png) no-repeat",});
    });
	
	
	jq1101(".eg-search-clean").click(function(){
		jq1101( "#blog-page input.eg-search-input" ).css( "display","none");
		jq1101( ".eg-search-submit" ).css( "display","block");
		jq1101( ".eg-search-clean" ).css( "display","none");
		jq1101( ".dropdownstyle" ).css( "display","inline-block");
		jq1101( ".esg-sortbutton" ).css( "display","inline-block");
		jq1101( "#blog-page .minimal-light .esg-sortbutton-order" ).css( "display","inline-block");
    });
	
	
	
	
});
</script><?php */?>



<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/pinterest_grid.js"></script> 
<script>
        $(document).ready(function() {
			var jq1101 = jQuery.noConflict();

            jq1101('#blog-landing').pinterest_grid({
                no_columns: 4,
                padding_x: 10,
                padding_y: 10,
                margin_bottom: 50,
                single_column_breakpoint: 700
            });

        });
    </script>



    
<?php wp_footer(); ?>


</body>
</html>


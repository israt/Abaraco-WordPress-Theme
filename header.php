<?php

/**

 * The template for displaying the header

 *

 * @package WordPress

 * @subpackage itech-softsolutions

 * @since itech-softsolutions

 */

?>

<!doctype html>
<html lang="en-US">
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">

<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','no entry');?>">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />

<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!-- tabModule STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/tabModule.css" />

<!-- flex STYLES -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flex.css" rel="stylesheet" type="text/css" />

<!-- fancyBox main CSS files -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- sc-menu STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sc-menu.css">

<!--slider-->
<link rel="stylesheet" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" type="text/css">

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />


<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />



<?php wp_head(); ?>
</head>

<style>

h1{
}

</style>

<body <?php body_class(); ?>>
	<header>
    	<div class="container border-bottom pad-b-5 pad-0">
        	<div class="top-header">
            	<div class="col-md-4 col-sm-4 pad-0">
                	<div class="logo-area">
                    	<a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo','no entry');?>" alt="logo"></a>	
                    </div>	
                    <!--logo-area ends....-->
                </div>
                <!--col-md-5 ends....-->
                
                <div class="col-md-6 col-sm-6 pad-0">
                      <div class="full-drop c">
                        
                        <div class="social-bookmarks-left default">
                            <ul>
                              <li class="border-right drop">
                                 <!--<select class="selectpicker">
                                      <option>Lisbon</option>
                                      <option>Lisbon</option>
                                      <option>Lisbon</option>
                                  </select>-->
                                  <a href="#">Lisboa<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                              </li>
                              <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo of_get_option('le1','no entry');?>" target="_top"><?php echo of_get_option('l1','no entry');?></a></li>
                              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo of_get_option('ll2','no entry');?>"><?php echo of_get_option('l2','no entry');?></a></li>
                            </ul>
                            <!--ul ends...-->	
                        </div>	
                        <!--social-bookmarks-right ends....-->
                        
                     <div class="full-down dis">
                        <div class="social-bookmarks-left">
                            <ul>
                              <li class="border-right drop2">
                                 <!--<select class="selectpicker">
                                      <option>Lisbon</option>
                                      <option>Lisbon</option>
                                      <option>Lisbon</option>
                                  </select>-->
                                  <a href="#">Porto<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                              </li>
                               <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo of_get_option('pe1','no entry');?>" target="_top"><?php echo of_get_option('p1','no entry');?></a></li>
                              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo of_get_option('pl2','no entry');?>"><?php echo of_get_option('p2','no entry');?></a></li>
                            </ul>
                            <!--ul ends...-->	
                        </div>	
                        <!--social-bookmarks-left ends....-->
                        
                         <div class="social-bookmarks-left">
                            <ul>
                              <li class="border-right drop2">
                                 <!--<select class="selectpicker">
                                      <option>Lisbon</option>
                                      <option>Lisbon</option>
                                      <option>Lisbon</option>
                                  </select>-->
                                  <a href="#">Setúbal<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                              </li>
                              <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo of_get_option('se1','no entry');?>" target="_top"><?php echo of_get_option('s1','no entry');?></a></li>
                              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo of_get_option('sl2','no entry');?>"><?php echo of_get_option('s2','no entry');?></a></li>
                            </ul>
                            <!--ul ends...-->	
                        </div>	
                        <!--social-bookmarks-left ends....-->
                        
                        
                         <div class="social-bookmarks-left">
                            <ul>
                              <li class="border-right drop2">
                                 <!--<select class="selectpicker">
                                      <option>Lisbon</option>
                                      <option>Lisbon</option>
                                      <option>Lisbon</option>
                                  </select>-->
                                  <a href="#">Funchal<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                              </li>
                              <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo of_get_option('fe1','no entry');?>" target="_top"><?php echo of_get_option('f1','no entry');?></a></li>
                              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo of_get_option('fl2','no entry');?>"><?php echo of_get_option('f2','no entry');?></a></li>
                            </ul>
                            <!--ul ends...-->	
                        </div>	
                        <!--social-bookmarks-left ends....-->
                        
                     </div>
                     <!--full-down ends....-->
                     
                    
                     
                        
                     </div>
                     <!--full-drop ends....-->
                     
                    <!-- <select class="full-drop">
                            <option value="volvo">
                                <span class="first">
                                    Lisbon <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </span>
                                <span class="second">
                                    <i class="fa fa-envelope" aria-hidden="true"></i><?php echo of_get_option('l1','no entry');?>
                                </span>
                                <span class="third">
                                    <i class="fa fa-phone" aria-hidden="true"></i><?php echo of_get_option('l2','no entry');?>
                                </span>
                            
                            </option>
                      
                      
                     
                      
                     
                     
                    </select>-->


                </div>
                <!--col-md-6 ends....-->
                
                
                <div class="col-md-2 col-sm-2 pad-0">
                        <div class="social-bookmarks-right">
                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i>Ajudar a Abraço</a>	
                        </div>	
                        <!--social-bookmarks-right ends....-->
                </div>
                <!--col-md-2 ends....-->
                    
                    
                    
                    
                    
                    
                    
                    <div class="menu-area">
                        <div id='scmenu'>
                        	 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'scmenu','container'=> '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '', ) ); ?>
                           <?php /*?> <ul>
                               <li><a href="#">Home</a></li>
                               <li><a href="#">Who we are </a></li>
                               <li><a href="#">Where we are</a></li>
                               <li><a href="#">FAQ</a></li>
                               <li><a href="#">Blog</a></li>
                               <li><a href="#">Contacts</a></li>
                            </ul><?php */?>
                            </div>
                            <!--sc menu....-->	
                     </div>
                     <!--menu-area ends...-->
                </div>
                <!--col-md-9 ends....-->
            </div>	
            <!--top-header ends...	-->
        </div>
        <!--container ends...-->
    </header>
    <!--header ends...-->
    
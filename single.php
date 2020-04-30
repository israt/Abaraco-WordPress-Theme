<?php
/************
 * The template for displaying all single posts
 ***********/
get_header(); ?>

    
    
    <!-- section inner starts...-->
    <section class="content_area_inner single-page">
        	<div class="container pad-0">
            	<div class="col-md-8">
                <h2>Notícias</h2>
                
                    
                     <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				?>
                <?php
				 $feat_image3 = '';
                if (has_post_thumbnail( $post->ID ) ){ 
                $feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
				}
				?>
                
                <?php

$categories = get_the_category();
$separator = ' ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
       $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    //echo trim( $output, $separator );
}


?>
                
                <p class="single-site-title">you are in Blog / <?php echo trim( $output, $separator );?>/<?php the_title();?></p>
                    
                    
                    	<div class="single-event-inner">
                        	<div class="single-event-inner-img">
                            	<img src="<?php echo $feat_image3; ?>" alt="<?php the_title();?>">
                            </div>
                            <!--single-event-inner-img ends....-->
                            
                            <div class="single-event-title-inner">
                                 <h3><a href="<?php the_permalink(); ?> "><?php the_title();?></a></h3>
                                 <p><span><?php the_time('d/m/ Y'); ?> </span> <a href="#"><span class="red">Categories:</span>
                                 

<?php

$categories = get_the_category();
$separator = ' ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
}


?>



</p>

<?php

$tags = wp_get_post_tags ($post->ID);
$TagsList = '<span class"all-tags">';
foreach($tags as $tag){
$TagsList .= '<span class="tag">'.$tag->name.' </span> ';
}

$TagsList .= '</span>';
//var_dump($TagsL<wbr />ist);

?>
                                 
                                  
                                 <?php /*?><p><span class="red">Tags:</span><?php echo $TagsList; ?></p> <?php */?>
                            </div>
                            <!--single-event-title-inner ends....-->
                                        
                            <div class="single-event-content-inner">
                               <?php the_content(); ?> 
                            </div>
                            <!--single-event-content-inner ends....-->
                            
                        </div>
                        <!--single-event-inner ends....-->
                        
                         <?php
						// End the loop.
						endwhile;
						?>
                        
                        
                </div>
                <!--col-md-8 ends.....-->
                
                <div class="col-md-4">
            	<div class="page-sidebar">
                	<div class="page-searchbox">
                          <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
                    <!-- page-searchbox ends -->
                    
                     <div class="categories-news">
                        <h4>Categories</h4>
                        <div class="categories-news-single">
                        	<ul>
                            	<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 
foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
     
    echo '<li><a href="#">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</a></li>';
   // echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
    //echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
} ?>
                            	<!--<li><a href="#">Categorie 1</a></li>
                                <li><a href="#">Categorie 2</a></li>
                                <li><a href="#">Categorie 3</a></li>-->
                            </ul>
                        </div>
                        <!-- recent-news-single ends -->
                    </div>
                    <!-- recent-news ends -->
                    
                    <div class="tag-news">
                        <h4>Tags</h4>
                        <div class="tag-news-single">
                      <?php wp_tag_cloud( array(
						   'smallest' => 8, // size of least used tag
						   'largest'  => 22, // size of most used tag
						   'unit'     => 'px', // unit for sizing the tags
						   'number'   => 45, // displays at most 45 tags
						   'orderby'  => 'name', // order tags alphabetically
						   'order'    => 'ASC', // order tags by ascending order
						   'taxonomy' => 'post_tag' // you can even make tags for custom taxonomies
						) ); ?>
                        	
                        </div>
                        <!-- recent-news-single ends -->
                    </div>
                    <!-- recent-news ends -->
                    
                    <div class="recent-news">
                        <h4>Recent Posts</h4>
                        
                        
                     <?php

							$args = array(

							'post_type' => 'post',

							  'orderby' => 'name',

							  'order' => 'DESC',

							  'posts_per_page' => 3	

							  );					  

							  $query = new WP_Query($args);

								if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

								  $feat_image3= '';

									if (has_post_thumbnail( $post->ID ) ){ 

									$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

									}

						  ?>
                    
                        
                            <div class="blog-area-single">
                                <div class="blog-area-img">
                                    <a href="<?php the_permalink(); ?>" class="hvr-grow">
                                    	<img src="<?php echo $feat_image3; ?>" alt="<?php the_title();?>">    
                                    </a>
                                </div>
                                <!--blog-area-img ends...-->
                                
                                <div class="blog-area-title2">
                                    <h3><a href="<?php the_permalink(); ?> "><?php the_title();?></a></h3>
                                </div>
                                <!--blog-area-title ends...-->
                                
                                <div class="blog-area-link">
                                	<a href="<?php the_permalink(); ?>">Ler mais</a>
                                </div>
                                <!--blog-area-link ends....-->
                                
                                <div class="blog-area-date">
                                	<a href="<?php the_permalink(); ?>"><?php the_time('d/m/ Y'); ?></a>
                                </div>
                                <!--blog-area-link ends....-->
                                
                            </div>
                            <!--blog-area-single ends...-->
                            
                            <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>

                      
                    </div>
                    <!-- recent-post ends -->
                    
                   
                    	
                </div>
                <!-- page-sidebar ends -->
            </div>
            <!-- col-md-4 ends -->	
                
            </div>
    </section>
    <!--section inner ends...-->
    
    <?php /*?><?php get_sidebar(); ?><?php */?>
    
<?php get_footer(); ?>
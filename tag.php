<?php /*
Template Name: Tag Archive
*/ ?>
<div>
<?php get_header(); ?>

<!-- section inner starts...-->
    <section class="content_area_inner">
        	<div class="container pad-0">

<h2>Tag Archive</h2>
<?php wp_tag_cloud( '' ); ?>
<div class="navigation">
	<div class="alignleft"><?php next_posts_link( '« Older Entries' ); ?></div>
	<div class="alignright"><?php previous_posts_link( 'Newer Entries »' ); ?></div>
</div>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry">
			<?php the_content( 'Read the rest of this entry »' ); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
</div>

</div>
</section>





<?php get_footer(); ?>
<?php
/**
 * Template Name: Organization
 */


get_header("org"); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php if (fruitful_state_page_comment()) { comments_template( '', true ); } ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>
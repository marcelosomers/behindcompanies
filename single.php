<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Behind Companies 5.0
 */

get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php get_template_part('meta', get_post_format() ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				// if ( comments_open() || '0' != get_comments_number() ) :
				// 	comments_template();
				// endif;
			?>

		<?php endwhile; // end of the loop. ?>
	</section>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
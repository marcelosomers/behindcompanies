<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Behind Companies 5.0
 */

get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'one', get_post_format() ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				// if ( comments_open() || '0' != get_comments_number() ) :
				// 	comments_template();
				// endif;
			?>

		<?php endwhile; // end of the loop. ?>
	</section>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
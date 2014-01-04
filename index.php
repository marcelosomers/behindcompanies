<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Behind Companies 5.0
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); $loopcounter++; $timestamp = get_the_time('l') . get_the_time('M j, Y'); ?>

				<?php if ($loopcounter  == 1) : // if it's the topmost post, then don't put in the article break class ?>

				<span>
					<?php if( $timeflag != $timestamp ) : ?>
					<?php $timeflag = $timestamp; endif; ?>
				</span>

				<?php elseif ( in_category('2')) : // if it's an article do nothing - 3 in production, 3 on local ?>
				<?php else : // if it's not an article and it's not the topmost post, then echo the date ?>

				<?php if( $timeflag != $timestamp ) : ?>
					<div class="home-dates"><?php the_date('F j, o') ?></div>
					<?php $timeflag = $timestamp; endif; ?>
				<?php endif; ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php behindcompanies_5_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</section>

		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

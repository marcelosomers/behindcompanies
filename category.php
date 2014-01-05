<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Behind Companies 5.0
 */

get_header(); ?>

         <h2 class="title title--article"><?php echo single_cat_title(); ?></h2>

        <ul class="archive-list">
            <?php
                global $post;
                $args = array( 'numberposts' => 999999, 'category' => get_cat_id( single_cat_title("",false) ) );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) :  setup_postdata($post); ?>
                    <li>
                        <span class="archive-date"><?php the_time('M j o') ?></span>
                        <span class="title title--archive"><a href="<?php the_permalink() ?>">
                        <?php if (get_post_format() == 'link') : ?>
                            <img src="<?php bloginfo('template_directory'); ?>/images/link.svg" class="archive-link-img">
                        <?php endif; ?> <?php the_title(); ?></a></span>
                    </li>
            <?php endforeach; ?>
        </ul>

        </section>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

<?php
/**
 * The Template for displaying all a link formatted posts.
 *
 * @package Behind Companies 5.0
 */
?>

<article>
    <div class="category">
        <?php
            $category = get_the_category();
            echo "<a href='" . home_url() . "/category/" . $category[0]->cat_name . "'>" . $category[0]->cat_name . "</a>";
        ?>
    </div>
    <h2 class="title title--link"><a href="<?php the_linked_list_link() ?>"><?php the_title(); ?></a> <span class="link-permalink"><a href="<?php the_permalink() ?>">&#9642;</a></span></h2>
    <?php the_content(); ?>
</article>
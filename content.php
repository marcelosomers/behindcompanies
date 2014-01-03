<?php
/**
 * @package Behind Companies 5.0
 */
?>

<article>
    <div class="category">
        <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
        ?>
    </div>
    <h2 class="title title--article"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
</article>
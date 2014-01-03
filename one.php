<article>
    <div class="category">
        <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
        ?>
    </div>
    <h2 class="title title--article"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>

    <div class="meta"><?php the_time('F j, o') ?></div>
</article>
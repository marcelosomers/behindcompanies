<article>
    <div class="category">
        <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
        ?>
    </div>
    <h2 class="title title--link"><a href="<?php the_linked_list_link() ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>

    <div class="meta"><a href="<?php the_permalink(); ?>"><?php the_time('F j, o') ?></a> &#9642; <a href="<?php the_linked_list_link() ?>">Source Article</a></div>
</article>
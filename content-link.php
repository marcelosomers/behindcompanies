<article>
    <div class="category">
        <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
        ?>
    </div>
    <h2 class="title title--link"><a href="<?php the_linked_list_link() ?>"><?php the_title(); ?></a> <span class="link-permalink"><a href="<?php the_permalink() ?>">&#9642;</a></span></h2>
    <?php the_content(); ?>
</article>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Behind Companies 5.0
 */

get_header(); ?>

        <h2 class="title title--article">Archive</h2>

        <?php get_search_form(); ?>

        <div class="archive-category-box">
            <div class="archive-icon"><img src="<?php bloginfo('template_directory'); ?>/images/business.svg" alt="Business"></div>
            <div class="archive-category-description">
                <h3><a href="<?php echo home_url() ?>/category/business/">Business</a></h3>
                <p>The stories behind interesting companies, and what this site was founded on.</p>
            </div>
        </div>

        <div class="archive-category-box">
            <div class="archive-icon"><img src="<?php bloginfo('template_directory'); ?>/images/design.svg" alt="Design"></div>
            <div class="archive-category-description">
                <h3><a href="<?php echo home_url() ?>/category/design/">Design</a></h3>
                <p>Articles and links spanning the gamut of design, user experience, and building delightful products.</p>
            </div>
        </div>

        <div class="archive-category-box">
            <div class="archive-icon"><img src="<?php bloginfo('template_directory'); ?>/images/code.svg" alt="Code"></div>
            <div class="archive-category-description">
                <h3><a href="<?php echo home_url() ?>/category/code/">Code</a></h3>
                <p>JavaScript, Ruby on Rails, PHP, and anything in between.</p>
            </div>
        </div>

        <div class="archive-category-box">
            <div class="archive-icon"><img src="<?php bloginfo('template_directory'); ?>/images/career.svg" alt="Career"></div>
            <div class="archive-category-description">
                <h3><a href="<?php echo home_url() ?>/category/career/">Career</a></h3>
                <p>Is it self-help? Maybe, but this is everything related to improving yourself as a professional.</p>
            </div>
        </div>

        <div class="archive-category-box">
            <div class="archive-icon"><img src="<?php bloginfo('template_directory'); ?>/images/guides.svg" alt="Guides"></div>
            <div class="archive-category-description">
                <h3><a href="<?php echo home_url() ?>/category/guides/">Guides</a></h3>
                <p>How to do cool stuff.</p>
            </div>
        </div>

        <div class="archive-category-box">
            <div class="archive-icon"><img src="<?php bloginfo('template_directory'); ?>/images/announcement.svg" alt="Site Announcements"></div>
            <div class="archive-category-description">
                <h3><a href="<?php echo home_url() ?>/category/announcement/">Announcements</a></h3>
                <p>Anything related to this site itself or personal news.</p>
            </div>
        </div>

        <p style="font-size: 11px;"><em>Icons from <a href="http://thenounproject.com/">The Noun Project</a></em></p>

        </section>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>

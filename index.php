<?php get_header(); ?>
<?php do_shortcode('[wpseo_breadcrumb]'); ?>
<section>
    <div class="container">
        
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/common/content', get_post_type());
            endwhile;
        endif;
        ?>
    </div>
</section>
<?php get_footer();

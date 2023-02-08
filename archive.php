<?php get_header(); ?>

<section>
    <div class="container">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'type',
            'posts_per_page' => -1,
        ));
        ?>

        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php get_template_part('template-parts/common/loop', 'post-type'); ?>
            <?php
            endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
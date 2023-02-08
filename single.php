<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
    get_template_part('template-parts/common/page', 'single', get_post_format());
endwhile;
?>

<?php get_footer(); ?>
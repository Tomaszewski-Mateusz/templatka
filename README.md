# templatka
<?php get_header(); ?>
<?php get_footer(); ?>
<?php get_template_part('template-parts/...'); ?>

<?php echo get_home_url(); ?>
<?php echo get_post_type_archive_link('service'); ?>">
<?php echo esc_url( get_permalink( get_page_by_title( 'contact' ) ) ); ?>">

<!-- common loop -->
<?php
while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/common/loop'); ?>
<?php
endwhile;
?>

<!-- common loop + pagination -->
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query = new WP_Query(array(
    'posts_per_page' => 6,
    'paged' => $paged
));

?>
<?php
while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/common/loop'); ?>
<?php
endwhile;
?>

<?php the_posts_pagination(array(
    'mid_size' => 2,
    'prev_text' => __('prev', 'coderhino'),
    'next_text' => __('next', 'coderhino'),
)); ?>

<!-- single post -->
<?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('large', array('class' => 'aspect555x500')); ?>
<?php else : ?>
    <img src="https://via.placeholder.com/555x500" alt="">
<?php endif; ?>

<?php $trimTitle = wp_trim_words(get_the_title(), 10); ?>
<?php the_category(' '); ?>
<?php the_date(); ?>
<?php echo get_permalink(); ?>
<?php echo get_template_directory_uri(); ?>
<?php get_field("field-name"); ?>

<?php echo apply_shortcodes(' [contact-form-7 id="58" title="mainForm"] ') ?>

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

<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package vbav2
 */
?>

<?php get_header(); ?>

    <?php get_template_part('template-parts/content-membersidebar'); ?>

    <header class="fourofour-header">
        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'vbav2' ); ?></h1>
    </header><!-- .fourofour-header -->

    <p class="fourofour-warning">
        <?php _e( 'It looks like nothing was found at this location. Maybe try one of the News and Events links below, or do a a search?', 'vbav2' ); ?>
    </p>

    <?php get_search_form(); ?>

    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

<?php get_footer(); ?>
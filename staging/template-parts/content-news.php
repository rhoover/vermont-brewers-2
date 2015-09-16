<?php
/**
Template Name: NewsEvents
 * The template used for displaying the list of blog/news posts
 *
 * @package vbaV2
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content-membersidebar'); ?>

        <?php
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <section class="post-list">
            <h2><a href="<?php the_permalink(); ?>" title="Read more" class="post-list-title"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </section>

        <?php endwhile; ?>

        <?php if ($paged > 1) { ?>

        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
        </nav>

        <?php } else { ?>

        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
        </nav>

        <?php } ?>

        <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
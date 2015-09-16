<?php
/**
 * @package vbav2
 */
?>

<?php get_template_part('template-parts/content-membersidebar'); ?>

<header class="single-post-header">
    <h2 class="single-post-title"><?php the_title(); ?></h2>
    <p class="single-post-time"><?php the_time("F jS, Y"); ?></p>
</header>

<article class="single-post-content">
    <?php the_content(); ?>
</article>



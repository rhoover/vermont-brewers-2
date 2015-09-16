<?php
/**
Template Name: MembershipMap Page
 *
 *The template used for displaying Membership Map
 *
 * @package vbav2
 */
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('template-parts/content-membersidebar'); ?>

    <section class="membershipmap-page" ng-controller="MembershipMapCtrl">

        <div class="membershipmap-page-map" data-membershippage-map></div>

    </section> <!-- end .membermappage -->

    <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() ) :
            comments_template();
        endif;
    ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>

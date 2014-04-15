<?php
/**
 * The template used for displaying page content called from page.php
 *
 * @package vbav2
 */
?>

<?php if ( !is_front_page() ) :?>
    <?php get_template_part('memberlist'); ?>
    <?php get_template_part('innerpage'); ?>
<?php endif;?>

<?php if ( is_front_page() ) :?>
    <p class="lede">The Vermont Brewers Association is proud to represent the amazing work of Vermont breweries, their brewers and brewing teams.</p>
    <?php get_template_part('frontpage'); ?>
<?php endif;?>
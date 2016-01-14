<?php
/**
* The template used for displaying page content called from page.php
*
* @package vbav2
*/
?>



<?php if ( !is_front_page() && !is_page('news-events') ) :?>
    <?php get_template_part('template-parts/content-membersidebar'); ?>
    <?php get_template_part('template-parts/content-innerpage'); ?>
<?php endif;?>

<?php if ( is_front_page() ) :?>
    <p class="lede">The Vermont Brewers Association is proud to represent the amazing work of Vermont breweries, their brewers and brewing teams. Stay up to date with Vermont's craft brewers on <a href="http://www.facebook.com/VermontBrewersAssociation" target="_blank" class="lede-link">Facebook</a> or <a href="https://twitter.com/VermontBrewers" target="_blank" class="lede-link">Twitter</a>!</p>
    <?php get_template_part('template-parts/content-frontpage'); ?>
<?php endif;?>

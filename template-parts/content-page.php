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
    <p class="lede">The Vermont Brewers Association was founded in 1995 to promote and strengthen the culture of craft brewing in Vermont through marketing, educating and advocating for Vermont made beer. Stay up to date with Vermont's craft brewers on <a href="http://www.facebook.com/VermontBrewersAssociation" target="_blank" class="lede-link">Facebook</a>, <a href="https://twitter.com/VermontBrewers" target="_blank" class="lede-link">Twitter</a> or <a href="https://www.instagram.com/Vermontbrewers" target="_blank" class="lede-link">Instagram!</a></p>
    <?php get_template_part('template-parts/content-frontpage'); ?>
<?php endif;?>

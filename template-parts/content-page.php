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
    <div class="tickets">
      <img src="<?php bloginfo('template_directory'); ?>/images/festival.png" />
      <p>Yes! <a href="https://order.ticketalternative.com/cgi-bin/ncommerce3/SEGetEventInfo?ticketCode=GS%3ATAUSA%3ATA16%3AVER0715%3A&linkID=tausa&shopperContext=&caller=&appCode=" class="lede-link">Tickets are still available</a> for the Vermont Brewers Festival's Friday, July 15 session.</p>
    </div>
    <p class="lede">The Vermont Brewers Association was founded in 1995 to promote and strengthen the culture of craft brewing in Vermont through marketing, educating and advocating for Vermont made beer. Stay up to date with Vermont's craft brewers on <a href="http://www.facebook.com/VermontBrewersAssociation" target="_blank" class="lede-link">Facebook</a>, <a href="https://twitter.com/VermontBrewers" target="_blank" class="lede-link">Twitter</a> or <a href="https://www.instagram.com/Vermontbrewers" target="_blank" class="lede-link">Instagram!</a></p>
    <?php get_template_part('template-parts/content-frontpage'); ?>
<?php endif;?>

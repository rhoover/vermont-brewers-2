<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vbaV2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<title><?php global $page, $paged; wp_title( '|', true, 'left' );?></title>

<!-- generic -->
<meta name="description" content="The Vermont Brewers Association - Small State - Big Beer">
<meta name="author" content="Robin Hoover - MooseDog Studios - Stowe, VT - www.moosedog.io">
<meta name='robots' content='index,follow'>

<!-- Mobile Stuff -->
<meta name="HandheldFriendly" content="True">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">


<!-- apple stuff -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Vermont Brewers">
<meta name='apple-touch-fullscreen' content='yes'>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- because microsoft exists -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="msapplication-TileImage" content="images/apple-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#222222">
<meta http-equiv="cleartype" content="on">

<!-- Twitter Meta Properties -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="Vermont Brewers Association">

<!-- Facebook OpenGraph Meta Properties -->
<meta property="og:title" content="The Vermont Brewers Association" />
<meta property="og:type" content="organization"/>
<meta property="og:url" content="http://www.vermontbrewers.com"/>
<meta property="og:site_name" content="The Vermont Brewers Association - Small State - Big Beer"/>
<meta property="og:description" content="Proud To Support Vermont's Craft Brewers"/>
<meta property="og:email" content="info@vermontbrewers.com"/>
<meta property="og:phone_number" content="802-885-1262"/>

<!-- icons -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">

<!-- icon actually for android -->
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />

<?php wp_head(); ?>
</head>

<body itemscope itemtype="http://schema.org/Organization" ng-app="vbaV2App">

    <header class="header">
            <p class="mobile-back-button">Back</p>
            <h1 class="mobile-screen-title" itemprop="name">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">Vermont Brewers</a>
            </h1>
            <h1 class="big-screen-title" itemprop="name">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">Vermont Brewers Association</a>
            </h1>
            <p class="mobile-menu-button">Menu</p>
    </header><!-- end .header -->

    <?php
        //courtesy of:  http://zoerooney.com/blog/tutorials/removing-list-items-wordpress-menus/
        //combine with addition to functions.php and tweaked by yours truly
        // first let's get our nav menu using the regular wp_nav_menu() function with special parameters
        $cleanermenu = wp_nav_menu( array(
            'theme_location' => 'navmenu', // we've registered a theme location in functions.php
            'container' => false, // this is usually a div outside the menu ul, we don't need it hence false
            'menu_id' => '', //added by me
            'menu_class' => 'nav-menu', //added by me
            'items_wrap' => '<nav class="%2$s" data-nav-menu="moveMenu">%3$s</nav>', // replacing the ul with nav, remove id too
            'echo' => false, // don't display it just yet, instead we're storing it in the variable $cleanermenu
        ) );
        // Find the closing bracket of each li and the opening of the link (><a), then all instances of "<li"
        $find = array('><a','<li');
        // Replace the ><a with nothing (a.k.a. delete) and the "<li" with "<a"
        $replace = array('','<a');
        echo str_replace( $find, $replace, $cleanermenu );
    ?><!-- end .nav-menu -->

    <div class="herobanner" data-banner-image>
        <h2 class="herobanner-header"><span class="herobanner-yellow">small state.</span><span class="herobanner-green"> BIG BEER.</span></h2>
        <p class="herobanner-text">Maybe there's something in the water. Maybe there's something in the air.<br />Maybe..... there's something up here in the mountains.<br />Vermont's brewers are making magic with it.</p>
    </div><!-- end .hero-banner -->

    <main
        <?php if (is_front_page()) { ?>
            <?php echo "class=\"content\" "; ?>
        <?php } else { ?>
            <?php echo "class=\"content inner-content\" "; ?>
        <?php } ?>
    >

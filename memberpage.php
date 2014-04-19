<?php
/**
Template Name: Member Page
 *
 *The template used for displaying Member content
 *
 * @package vbav2
 */
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('membersidebar'); ?>

    <section class="memberpage"
        <?php $inner_value = get_post_meta($post->ID, 'member-class', true); ?>
        <?php echo "ng-controller=\"MemberPageCtrl\"  data-member=\"$inner_value\" "; ?>
    >

        <h3 class="post-title">
            <?php the_title(); ?>
        </h3>

        <img class="member-info-logo" ng-src="http://vbav2/wp-content/themes/vbav2/images/VBA100/{{member.selector}}.png"  alt="{{member.name}} Logo"  />
        <div class="member-info">
            <p class="member-info-address">{{member.address}}</p>
            <p class="member-info-address">{{member.city}}, {{member.state}}  {{zip}}</p>
            <a href="tel:{{member.phone}}" class="member-info-phone">{{member.phone}}</a>
            <a href="{{member.url}}" target="_blank" class="member-info-link">{{member.name}}</a>
            <p class="openmap">Open Map</p>
            <div class="member-info-social">
                <a href="{{member.facebook}}" data-show-social target="_blank"><span class="member-social social-facebook"></span></a>
                <a href="{{member.twitter}}" data-show-social target="_blank"><span class="member-social social-twitter"></span></a>
                <a href="{{member.googleplus}}" data-show-social target="_blank"><span class="member-social social-google"></span></a>
            </div>
        </div>

        <div class="memberpage-map" data-memberpage-map></div>

        <div class="memberpage-about"><?php the_content(); ?></div>

    </section> <!-- end .innerpage -->

    <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() ) :
            comments_template();
        endif;
    ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>

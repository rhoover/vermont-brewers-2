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

    <section
        <?php $inner_value = get_post_meta($post->ID, 'member-class', true); ?>
        <?php echo "class=\"innerpage\"  "; ?>
        <?php echo "ng-controller=\"MemberCtrl\"  data-$inner_value"; ?>
    >

        <h3 class="post-title">
            <?php the_title(); ?>
        </h3>

        <div class="info">
        <!-- <img class="info-logo" src="http://vbav2/wp-content/themes/vbaV2/images/vba200/{{member.selector}}.jpg"  alt="{{name}} Logo"  /> -->
            <!-- <div class="info-list"> -->
                <p class="info-address">{{member.address}}</p>
                <p class="info-address">{{member.city}}, {{member.state}}  {{zip}}</p>
                <a href="tel:{{phone}}" class="info-phone">{{member.phone}}</a>
                <a href="{{url}}" target="_blank" class="info-link">{{member.name}}</a>
                <p id="openmap">Open Map</p>
                <div class="info-social">
                    <a href="{{member.facebook}}" target="_blank" class="social-facebook">{{member.name}}</a>
                    <a href="{{member.twitter}}" target="_blank" class="social-twitter">{{member.name}}</a>
                    <a href="{{member.googleplus}}" target="_blank" class="social-google">{{member.name}}</a>
                </div>
            <!-- </div> -->
        </div>
        <div id="membermap"></div>

        <div class="member-page-about"><?php the_content(); ?></div>

    </section> <!-- end .innerpage -->

    <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() ) :
            comments_template();
        endif;
    ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>

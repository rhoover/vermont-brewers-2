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

        <div class="memberpage-info">

            <div class="memberpage-info-primary">
                <div class="memberpage-info-logo">
                    <div class="VBA100-{{member.selector}}"></div>
                </div>

                <div class="memberpage-info-details">
                    <p class="memberpage-info-address">{{member.address}}</p>
                    <p class="memberpage-info-address">{{member.city}}, {{member.state}}  {{zip}}</p>
                    <a href="tel:{{member.phone}}" class="memberpage-info-phone">{{member.phone}}</a>
                    <a href="{{member.url}}" target="_blank" class="memberpage-info-link">{{member.name}}</a>
                    <div class="memberpage-info-openmap">Open Map</div>
                    <a href="{{member.facebook}}" class="memberpage-info-social" data-show-social target="_blank"><span class="memberpage-info-social-icon social-facebook"></span></a>
                    <a href="{{member.twitter}}" class="memberpage-info-social" data-show-social target="_blank"><span class="memberpage-info-social-icon social-twitter"></span></a>
                    <a href="{{member.googleplus}}" class="memberpage-info-social" data-show-social target="_blank"><span class="memberpage-info-social-icon social-google"></span></a>
                </div>
            </div>

            <div class="memberpage-info-about"><?php the_content(); ?></div>

        </div>

        <div class="memberpage-map" data-memberpage-map data-latitude="{{member.latitude}}"></div>

    </section> <!-- end .memberpage -->

    <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() ) :
            comments_template();
        endif;
    ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>

<?php
/**
 * The template used for displaying Front Page content as called from content-page.php
 *
 * @package vbaV2
 */
?>

<section  class="frontpage" <?php echo "data-home-gallery ng-controller=\"MemberListCtrl\""; ?>  >

<!-- <a class="frontpage-member" href="http://vbav2/{{member.selector}}" ng-repeat="member in memberList | orderBy: 'selector' "> -->
<a class="frontpage-member" href="<?php echo esc_url( home_url( '/' ) ); ?>{{member.selector}}" ng-repeat="member in memberList | orderBy: 'selector' ">
    <h4 class="frontpage-member-title" itemprop="member">{{member.name}}</h4>
    <p class="frontpage-member-address">{{member.city}}, VT</p>
    <div class="frontpage-member-logo VBA100-{{member.selector}}"></div>
</a>

<?php edit_post_link( __( 'Edit', 'vbaV2' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>

</section> <!-- end .frontpage -->
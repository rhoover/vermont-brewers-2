<?php
/**
 * The template used for displaying Member List "sidebar" as called from lots of places
 *
 * @package vbaV2
 */
?>

<section class="member-sidebar" <?php echo "ng-controller=\"MemberListCtrl\" "; ?> >
    <a href="http://vbav2/{{member.selector}}" class="member-sidebar-item" ng-repeat="member in memberList">
        <div class="member-sidebar-image VBA40-{{member.selector}}"></div>
        <p  class="member-sidebar-name" >{{member.name}}</p>
    </a>
</section>
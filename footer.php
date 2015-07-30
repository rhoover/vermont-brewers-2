<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package vbaV2
 */
?>


    <footer class="footer">
            <p class="footer-copyright">&copy; The Vermont Brewers Assoc. 2014</p>
            <section class="footer-social">
                <a href="http://www.facebook.com/VermontBrewersAssociation" target="_blank" class="social-logo"><div class="social-facebook"></div></a>
                <a href="https://twitter.com/VermontBrewers" target="_blank" class="social-logo "><div class="social-twitter"></div></a>
            </section>
    </footer>
    <!-- end .footer -->
    <?php wp_footer(); ?>

    </main>
    <!-- end .content -->

    <!-- Grab Google Maps API If Not FrontPage -->
    <?php if ( !is_front_page() ) :?>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true&language=en"></script>
    <?php endif;?>

    <!-- Grab Core AngularJS -->
    <script src="/wp-content/themes/vbav2/js/libraries/angular/angular.js"></script>
    <script src="/wp-content/themes/vbav2/js/libraries/angular-animate/angular-animate.js"></script>
    <script src="/wp-content/themes/vbav2/js/libraries/angular-touch/angular-touch.js"></script>

    <!-- Grab VBA Angular Script -->
    <script src="/wp-content/themes/vbav2/js/vbaV2/app.js"></script>

    <script src="/wp-content/themes/vbav2/js/vbaV2/services/memberjson.js"></script>
    <script src="/wp-content/themes/vbav2/js/vbaV2/services/storageservice.js"></script>
    <script src="/wp-content/themes/vbav2/js/vbaV2/services/googlemap.js"></script>

    <script src="/wp-content/themes/vbav2/js/vbaV2/filters/memberpagefilter.js"></script>

    <script src="/wp-content/themes/vbav2/js/vbaV2/controllers/memberlist.js"></script>
    <script src="/wp-content/themes/vbav2/js/vbaV2/controllers/memberpage.js"></script>
    <script src="/wp-content/themes/vbav2/js/vbaV2/controllers/allmembermap.js"></script>

    <script src="/wp-content/themes/vbav2/js/vbaV2/directives/backbutton.js"></script>
    <script src="/wp-content/themes/vbav2/js/vbaV2/directives/bannerimage.js"></script>
    <script src="/wp-content/themes/vbav2/js/vbaV2/directives/showsocial.js"></script>
    <script src="/wp-content/themes/vbav2/js/vbaV2/directives/membermap.js"></script>
    <script src="/wp-content/themes/vbav2/js/vbaV2/directives/allmembermap.js"></script>


    <!-- Grab Google Analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-40551995-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
</body>
</html>

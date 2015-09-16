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
    <script src="http://www.vermontbrewers.com/wp-content/themes/vbav2/js/libraries/92459ad6.all-angular.min.js"></script>

    <!-- Grab VBA Angular Script -->
    <script src="http://www.vermontbrewers.com/wp-content/themes/vbav2/js/vbaV2/ee11cbd9.vbav2.min.js"></script>


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

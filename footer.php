<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Behind Companies 5.0
 */
?>

	<footer>
        <div class="subscribe">
            <div class="container">
                <div class="subscribe--text">
                    Want to hear more about Business, Design, and Technology? Get a summary of posts each Sunday.
                </div>
                <div class="subscribe--email">
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                    <form action="http://marcelandkel.us1.list-manage.com/subscribe/post?u=693ab794c43a549ddd6097cfd&amp;id=bca220b637" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="mc-field-group">
                        <input type="email" value="" name="EMAIL" placeholder="your email" class="required email subscribe-box" id="mce-EMAIL">
                    </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_693ab794c43a549ddd6097cfd_bca220b637" value=""></div>
                        <?php
                            // Get the page URL and strip the site url from it for the MailChimp Signup Reference Link
                            $url = get_permalink();
                            $url = str_replace(site_url(), "", $url);
                        ?>
                        <input type="hidden" name="SIGNUP" id="SIGNUP" value="footer-<?php echo $url ?>" />
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
                <div class="subscribe--icons">
                    <a href="http://behindcompanies.com/feed"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png"></a>
                    <a href="http://twitter.com/behindcompanies"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png"></a>
                    <a href="http://facebook.com/behindcompanies"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png"></a>
                </div>
            </div>
        </div>

        <div class="footer">
            <ul class="nav nav--footer container">
                <li><a href="#">Behind Companies</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Subscribe</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Archive</a></li>
                <li class="copyright">Copyright &copy; 2010-2014</li>
            </ul>
        </div>
</footer>

<?php wp_footer(); ?>

<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/jquery-2.0.3.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/retina-1.1.0.min.js'></script>

<script>
    $(document).ready(function() {
        $(".js-nav-toggle").click(function() {
            $(".js-nav").slideToggle("normal", function() {
                easing : "easeOutSine"
            });
        });
    });
</script>

<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8513019-12']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>
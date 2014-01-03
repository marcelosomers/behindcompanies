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
                    <input type="text" class="subscribe-box" placeholder="your email" />
                    <input type="submit" value="Subscribe" class="subscribe-button">
                </div>
                <div class="subscribe--icons">
                    <a href="http://behindcompanies.com/feed"><img src="wp-content/themes/behindcompanies-5/images/facebook.png"></a>
                    <a href="http://twitter.com/behindcompanies"><img src="wp-content/themes/behindcompanies-5/images/twitter.png"></a>
                    <a href="http://facebook.com/behindcompanies"><img src="wp-content/themes/behindcompanies-5/images/rss.png"></a>
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

</body>
</html>
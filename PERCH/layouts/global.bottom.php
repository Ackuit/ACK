
<footer>
    <div class="container">

        <div class="twitterfeed visible-tablet">
            <div class="row">
                <div class="twitter-feed"></div>
            </div>
            <div class="row">
                <div class="twitter-icon">&#62217;</div>
            </div>
        </div>

        <div class="row">
            <div class="copyright offset1 span3">
                <!-- Footer Navigation -->
                <!-- <ul id="menu-footer" class="footer-nav unstyled opcty06">
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>  -->

                <p class="opcty06">© 2013<br>Ackuit</p>
                <p class="opcty06">Photography by <a href="http://www.flickr.com/photos/radiosonggirl/with/4628037988/" target="_blank">Arianna Palazzi</a> </p>

            </div>
        </div>

    </div>
</footer>

<div id="lightwindow">
    <div id="lightwindow-content" class="hide"></div>
</div>

<!-- Begin Mailing List -->
<div class="mailing-list-ajax newsletter_form_ajax hide">
    <a class="close"></a>
    <div class="container">
        <div class="row">
            <div class="offset2 span8">
                <h1 class="animated delay05 fadeInUp">Join our<br>mailing list</h1>
                <h2 class="animated delay010 fadeInUp">to stay up date</h2>
            </div>
        </div>
        <div class="row">
            <div class="span2 offset1">
                <div class="message-wrapper">
                    <div class="message">Please enter a valid e-mail</div>
                    <div class="message-arrow"></div>
                </div>
            </div>
            <div class="span6">
                <form method="post" id="newsletter" action="newsletter.php" class="animated delay15 fadeInUp">
                    <input type="text" class="input-block-level" name="email" placeholder="Your e-mail">
                    <button>- show me your world</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Mailing List -->

<div id="fb-root"></div>

<!-- Javascript -->
<script>

    Modernizr.load([
        { load : 'http://connect.facebook.net/en_US/all.js#xfbml=1' },
        { load : 'http://platform.twitter.com/widgets.js' }
    ]);

    /* Config Vars*/

    var config = {
        "base_color" : "#ffffff",
        "contact_form_submit" : "contact-form.php",
        "newsletter_form_submit" : "newsletter-form.php",
        "pt_twitter_username" : "pixelthrone",
        "pt_twitter_count" : "3",
        "pt_twitter_path" : "\/libs\/twitter\/",
        "portfolio_items_page" : "",
        "blog_items_page" : "",
        "google_maps_circle_color" : "#000000",
        "google_maps_landscape_color" : "#cccccc",
        "google_maps_water_color" : "#aaaaaa",
        "google_maps_zoom" : "4",
        "pt_google_maps_latitude_1" : 39.810745,
        "pt_google_maps_longitude_1" : -7.512589,
        "pt_google_maps_title_popover_1" : "",
        "pt_google_maps_text_popover_1" : "",
        "pt_google_maps_latitude_2" : "",
        "pt_google_maps_longitude_2" : "",
        "pt_google_maps_title_popover_2" : "",
        "pt_google_maps_text_popover_2" : "",
        "pt_google_maps_latitude_3" : "",
        "pt_google_maps_longitude_3" : "",
        "pt_google_maps_title_popover_3" : "",
        "pt_google_maps_text_popover_3" : "",
        "pt_google_maps_latitude_4" : "",
        "pt_google_maps_longitude_4" : "",
        "pt_google_maps_title_popover_4" : "",
        "pt_google_maps_text_popover_4" : ""
    };

    /* Images for Background Slideshow */
    var pt_supersized_slides = [
        {"image" : "http://farm5.staticflickr.com/4036/4628037988_dd1e00cddc_o.jpg"},
        {"image" : "http://farm7.staticflickr.com/6138/6006068811_b0fe2fcf58_o.jpg"},
        {"image" : "http://farm5.staticflickr.com/4014/4528198678_39cac0917e_o.jpg"},
        {"image" : "http://farm9.staticflickr.com/8060/8186821098_109ee0fb8d_o.jpg"},
        {"image" : "http://farm5.staticflickr.com/4034/4384624658_36460704c9_o.jpg"}
    ];

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="js/vendor/retina-2x/retina.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


</body>
</html>
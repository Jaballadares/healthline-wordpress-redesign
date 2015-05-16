<footer class="footer-main">
    <div class="container">

        <div class="row">
            <div class="span7">
                <h2><img src="<?php bloginfo('template_directory'); ?>/library/img/structure/healthline-white.png" alt="Healthline" width="233" height="44"></h2>
                <?php dynamic_sidebar( 'footer' ); ?>
                <nav class="nav-footer row">
                    <ul class="span4">
                        <li><h5><a href="/platform/">Platform</a></h5></li>
                        <li><a href="/platform#taxonomy">Taxonomy</a></li>
                        <li><a href="/platform#applications">Applications</a></li>
                        <li><a href="/platform#concepts-codes">Concepts &amp; Codes</a></li>
                    </ul>
                    <ul class="span4">
                        <li><h5><a href="/solutions/">Solutions</a></h5></li>
                        <li><a href="/solutions/search-discovery/">Search &amp; Discovery</a></li>
                        <li><a href="/solutions/data/">Data</a></li>
                        <!-- <li><a href="/solutions/content/">Content</a></li> -->
                        <li><a href="/solutions/marketing/">Marketing</a></li>
                    </ul>
                    <ul class="span4">
                        <li><h5><a href="/about-us/">About Us</a></h5></li>
                        <li><a href="/about-us#leadership">Leadership</a></li>
                        <li><a href="/about-us#advisory-board">Advisory Board</a></li>
                        <li><a href="/about-us#customers">Customers</a></li>
                        <li><a href="/about-us#careers">Careers</a></li>
                        <li><a href="/about-us#news-press">News &amp; Press</a></li>
                    </ul>
                </nav>
            </div>
            <div class="span4 offset1">
                <nav class="nav-social">
                    <ul class="list-inline">
                        <li><a href="https://www.youtube.com/user/Healthline" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="http://www.linkedin.com/company/healthline-networks-inc.?trk=company_logo" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                        <li><a href="https://twitter.com/Healthline" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/healthlinenetworks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </nav>
                <form class="form-newsletter" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="form-general form-get-started">
                    <input type="hidden" name="oid" value="00DG0000000i5W2">
                    <!-- Thank you page redirect -->
                    <input type="hidden" name="retURL" value="http://corp.healthline.com/thanks">
                    <input type="hidden" name="leadSource" value="corpNews">
                    <h4>Stay Connected</h4>
                    <p class="text-center">Sign up for our newsletter</p>
                    <div class="input-wrap">
                        <label class="placeholder-hide" for="first_name">First Name</label>
                        <input id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="First Name">
                    </div>
                    <div class="input-wrap">
                        <label class="placeholder-hide" for="last_name">Last Name</label>
                        <input id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Last Name">
                    </div>
                    <div class="input-wrap">
                        <label for="email" class="placeholder-hide">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <input type="submit" value="Sign Up" class="btn btn-blue btn-block">
                </form>
            </div>
        </div><!--! .row -->

    </div>
</footer>

<footer class="footer-sub">
    <div class="container">

        <div class="row">
            <div class="span6">
                <p>&copy;<?php echo date("Y") ?> Healthline Networks</p>
            </div>
            <div class="span6 text-right">
                <a href="/about-us#contact-us">Contact Us</a>
            </div>
        </div><!--! .row -->

    </div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/vendor/picker.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/vendor/picker.date.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/vendor/picker.time.js"></script>
<script>
    $('.picker').pickadate();
    $('.timepicker').pickatime();
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-26124207-9', 'healthline.com');
    ga('send', 'pageview');
</script>

</body>
</html>

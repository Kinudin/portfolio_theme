     </div> <!-- /wrapper -->
 <!-- footer -->
    <footer>
    <div class="large-12 columns" id="footer">

        <!-- 1/3 -->
        <div class="small-12 large-4 columns" ID="footer-left-widget">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
        </div>
        <!-- /End 1/3 -->
        <!-- 2/3 -->
        <div class="small-12 large-4 columns" id="footer-center-widget">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
        </div>
        <!-- /End 2/3 -->
        <!-- 3/3 -->
        <div class="small-12 large-4 columns" id="footer-right-widget">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
        </div>
        
        
        <!-- /End 3/3 -->
         <div class="row">
            <div class="large-12 columns" id="copywrite">
                  <p>&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?></p>
            </div>
        </div>
    </div>


        <?php wp_footer(); ?>
        <!-- analytics -->
        <script>
        (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
        (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
        l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
        ga('send', 'pageview');
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>-child/script.js"></script>

    </body>
</html>

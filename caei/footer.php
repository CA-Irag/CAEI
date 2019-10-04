        <section id="caei-footer">
            <footer>                
                <div class="footer_top">
                    <div class="container">
                        <?php dynamic_sidebar( 'footer-top-widget-area' ); ?>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="container">
                        <div class="footer_copyright">
                            <?php  bloginfo('name'); ?> &copy; All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>                
        </section>
        <?php wp_footer(); ?>
    </body>
</html>
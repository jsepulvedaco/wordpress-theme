    <footer class="site-footer">

        <div class="footer-callout clearfix">
            <div class="footer-callout-image"></div>
            <div class="footer-callout-text">
                <h2>Placeholder Heading</h2>
                <p>Dummy lorem ipsum content here.</p>
            </div>
        </div>

        <div class="footer-widgets clearfix">
            <?php if (is_active_sidebar( 'footer1' )) : ?>
                <div class="footer-widget-area"><?php dynamic_sidebar( 'footer1' ); ?></div>
            <?php endif; ?>


            <?php if (is_active_sidebar( 'footer2' )) : ?>
                <div class="footer-widget-area"><?php dynamic_sidebar( 'footer2' ); ?></div>
            <?php endif; ?>


            <?php if (is_active_sidebar( 'footer3' )) : ?>
                <div class="footer-widget-area"><?php dynamic_sidebar( 'footer3' ); ?></div>
            <?php endif; ?>


            <?php if (is_active_sidebar( 'footer4' )) : ?>
                <div class="footer-widget-area"><?php dynamic_sidebar( 'footer4' ); ?></div>
            <?php endif; ?>
        </div>

        <nav class="site-nav">
            <?php $args = array( 'theme_location' => 'footer' ); ?>
            <?php wp_nav_menu( $args ); ?>
        </nav>
        <p><?php bloginfo( 'name' ); ?> - &copy; <?php echo date( 'Y' ); ?></p>
    </footer>

    <?php wp_footer(); ?>

</div><!-- container -->
</body>
</html>

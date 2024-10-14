<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
        <nav class="footer-navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => 'ul',
                'menu_class' => 'footer-menu',
            )); ?>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>



<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
    <aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'primary-sidebar' ); ?>
    </aside>






<?php endif; ?>




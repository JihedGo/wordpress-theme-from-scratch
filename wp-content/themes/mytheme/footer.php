<footer>
    <div class="container">
        <?php
        wp_nav_menu(
            array(
                //'menu' => 'Top Bar' - instead of using theme location
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-bar'

            )
        ); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
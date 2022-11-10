<footer class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-12 mb-4 mb-md-0 col-md-6">
            <div class="footer-logo">
                <img src="<?php the_field('footer_logo', 'option'); ?>">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col-4">
                    <?php wp_nav_menu(array(
                        'theme_location'    => 'footer',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'list-unstyled lh-lg',
                        'menu_class' => 'nav navbar-nav',
                        'items_wrap' => '
                                        <li id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</li>
                                        ',

                    ));
                    ?>
                </div>
                <div class="col-4">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'footer2',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'list-unstyled lh-lg',
                        'menu_class' => 'nav navbar-nav',
                        'items_wrap' => '
                    <li id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</li>
                    ',
                    ));
                    ?>
                </div>
                <div class="col-4 third">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'footer3',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'list-unstyled lh-lg',
                        'menu_class' => 'nav navbar-nav',
                        'items_wrap' => '
                    <li id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</li>
                    ',

                    ));
                    ?>
                </div>
            </div>

        </div>
    </div>
    <div class="row copyright-section pt-5 pb-5">
        <div class="col-12 logo-wrapper">
            <?php the_field('linki', 'option'); ?>
            <img class="footer_logo" src="<?php the_field('footer_logo_male', 'option'); ?>">
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
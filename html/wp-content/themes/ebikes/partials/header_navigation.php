<!-- navigation -->

<nav class="navbar navbar-expand-md">
    <div class="container">
        <div class="menu-wrapper">
            <div class="header-top">
                <a class="navbar-brand" href="/">
                    <img src="<?php the_field('sbm_theme_options_header_logo', 'option');?>" alt="eBikes">
                </a>
                <?php include ebikes_theme_path('/partials/header_widget_area.php'); ?> 
            </div>
            <div class="header-bottom">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>
           </div>
        </div>
    </div>
</nav>
<!-- end navigation  -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="fixed-top">

        <div id="showBanner1">
            <div class="bannerBig d-none d-md-block">
                <div id="bigHeader"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
                <div id="tagLine"><?php bloginfo('description'); ?></div>
            </div>
        </div>
        <div id="showBanner2">

            <div class="collapseBanner d-none d-md-block">
                <div>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                </div>
                <!--This banner only shows when screen is larger then md-->
            </div>

        </div>

        <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-md-none mx-auto collapseHeader collapseBanner"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-center',
                'container_id'      => 'mainNavbar',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
            
        </nav>
    </div>
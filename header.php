<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>

    <?php echo "X"; ?>

    <div class="navigation">
    <?php
    /**
     * This code use to display the header menu
     */
    wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</div>
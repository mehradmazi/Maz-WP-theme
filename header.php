<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <?php if (has_custom_logo()) {
        the_custom_logo();
    } else {
        echo '<h1>' . get_bloginfo('name') . '</h1>';
    } ?>
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
</header>

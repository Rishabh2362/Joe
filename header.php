<?php 
/**
 *Joe WordPress Theme
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <title> <?php wp_title('&laquo',true,'right'); ?><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
            <?php wp_head(); ?>
</head>
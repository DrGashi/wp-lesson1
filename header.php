<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi.com - the international Audi</title>
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri("images/favicon.png")); ?>" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header" id="top">
        <nav class="site-nav">
            <?php 
            wp_nav_menu( array(
                "theme_location" => "primary",
                'menu_class' => 'main-menu'
                )); 
            ?>
        </nav>
    </header>
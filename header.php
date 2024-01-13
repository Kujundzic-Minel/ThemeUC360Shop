<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unified Champions</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header-fixed">
            <a href="/uc360shop">
                <img src="http://localhost/uc360shop/wp-content/uploads/2023/11/Fichier-1-3.svg" alt="logo unified champions" class="logo-header">
            </a> 
            <nav class="menu-header">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </nav>
        </div>
    </header>
</body>
</html>
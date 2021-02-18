<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/misrecetas-logo.png">
        <meta name="description" content="Página en la que os muestro mis recetas de cocina.">
        <meta name="keywords" content="Recetas, cocina, culinarias, repostería, gastronomía">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
        <?php wp_head() ?>
                
    </head>
    <body>
        <div class="container">
            <!--Cabecera-->
            <header id="header" class="block-center-row mb-3 bg-color">                
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/misrecetas-logo.png" alt="Mis recetas"></a>
            </header>
            <!--Navegación-->
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu,',
                        'container' => 'nav',
                        'container_class' => 'nav-main block-center-row mb-2',
                        'after' => '<span>|</span>'
                    )
                );
            ?>
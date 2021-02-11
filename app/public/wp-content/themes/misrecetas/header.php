<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
        <link rel="icon" href="images/misrecetas-logo.png">
        <meta name="description" content="Página en la que os muestro mis recetas de cocina.">
        <meta name="keywords" content="Recetas, cocina, culinarias, repostería, gastronomía">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>css/style.css">
        <?php wp_head(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id0' => 'primary-menu,',
                    'container' => 'nav',
                    'container_class' => 'nav-main block-center-row mb-2'
                )
            );
        ?>
    </head>
    <body>
        <div class="container">
            <!--Cabecera-->
            <header id="header" class="block-center-row mb-3">                
                <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>images/misrecetas-logo.png" alt="Mis recetas"></a>
            </header>
            <!--Navegación-->
            <nav class="nav-main fnt-lg block-center-row mb-2">
                <ul>
                    <li>Inicio</li>
                    <li class="separator">|</li>
                    <li><a href="recetas.html">Recetas</a></li>
                    <li class="separator">|</li>
                    <li><a href="contactar.html">Contactar</a></li>                      
                </ul>                             
            </nav>
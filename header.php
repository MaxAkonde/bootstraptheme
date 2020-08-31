<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Blog - Start Bootstrap Theme</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'container' => '',
                            'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>',
                        )
                    ); 
                ?>
                
            </div>
        </div>
    </nav>
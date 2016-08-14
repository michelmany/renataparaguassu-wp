<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo IMAGES_PATH ?>/favicon.ico">
    <title>Renata Paraguassú & Carreiro - Odontologia</title>
    <meta name="description" content="">
    <meta name="author" content="NITDESIGN">        
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>                

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Cabin:500,400' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>

    <header>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('home'); ?>">
                        <img src="<?php echo IMAGES_PATH ?>/logo.png" alt="">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar">
                <!--         <li><a href="#">Home</a></li>
                        <li><a href="#">Quem somos</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="#">Parceiros</a></li>
                        <li><a href="#">Convênios</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contato</a></li> -->

                       <?php
                          wp_nav_menu(
                              array(
                              'menu'        => 'principal',
                              'menu_class'  => 'nav navbar-nav',
                              'walker'      => new BS3_Walker_Nav_Menu
                            ));
                        ?>                        
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </header>
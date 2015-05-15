<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="google-site-verification" content="lC19838MQdUht79Pd1YQHYbhAx3qy-rbg3w3bHAMLxc" />


    <title><?php wp_title('-', TRUE, 'right'); ?> <?php bloginfo('description'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/img/structure/favicon.png">


    <?php wp_head(); ?>

    <script type="text/javascript" src="//use.typekit.net/mli0lbq.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>

<header class="header-main">
    <div class="container">

        <div class="row">
            <nav class="nav-main span12" role="navigation">

                <h1>
                    <a href="/"><img src="<?php bloginfo('template_directory'); ?>/library/img/structure/healthline.png" alt="Healthline" width="222" height="43"></a>
                </h1>

                <a href="#" class="mobile-nav">+ Menu</a>

                <?php bones_main_nav(); ?>

            </nav>
        </div><!--! .row -->

    </div>
</header>
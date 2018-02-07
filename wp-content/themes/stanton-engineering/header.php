<!doctype html>
<head>
    <!-- Site design and development by Chawlie (Charlie Chauvin) http://www.chawlie.com -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', TRUE, 'right'); ?> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

    <!-- Icons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_72x72.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_57x57.png">

    <!-- Typography -->
    <script src="https://use.typekit.net/ipf2sql.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400" rel="stylesheet">

    <?php wp_head(); ?>
    <!-- wp_head() needs to be placed just before </head> tag of your theme. Many plugins use this to populate data to the header. -->
</head>
<body <?php body_class(); ?>>
    <a id="top"></a>
    <div class="page-wrapper">
        <header class="page-header">
            <div class="row">
                <div class="columns small-12">
                    <div class="menu-bar">
                        <div class="primary-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/site/images/stanton_eng_logo.svg" alt="Stanton Engineering" /></a>
                        </div>
                        <div class="primary-nav">
                            <?php header_menu_primary(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="mobile-header">
            <div class="row">
                <div class="top-bar" data-responsive-toggle="mobile-nav" data-hide-for="none" data-toggle>
                        <a href="/" class="mobile-logo" title="Go to <?php bloginfo('name'); ?> Home Page"><img src="<?php bloginfo('template_url'); ?>/site/images/stanton_eng_logo.svg" alt="Stanton Engineering" /></a>
                        <a class="mobile-menu-button" data-toggle title="Site Menu"><span class="hamburger-icon"></span></a>
                </div>
                <nav class="mobile-nav" id="mobile-nav">
                    <?php mobile_menu(); ?>
                </nav>
            </div>
        </header>


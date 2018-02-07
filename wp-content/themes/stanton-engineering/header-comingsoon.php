<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', TRUE, 'right'); ?> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

    <!-- Social Data: Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= (!empty($post->ID)) ? get_the_twitter_title($post->ID) : '' ?>">
    <meta name="twitter:description" content="<?= (!empty($post->ID)) ? get_the_twitter_description($post->ID) : '' ?>">
    <meta name="twitter:url" content="<?= (!empty($post->ID)) ? get_permalink($post->ID) : '' ?>">
    <meta name="twitter:image" content="<?= (!empty($post->ID)) ? get_the_twitter_image($post->ID) : '' ?>">

    <!-- Social Data: Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:title" content="<?= (!empty($post->ID)) ? get_the_og_title($post->ID) : '' ?>">
    <meta property="og:description" content="<?= (!empty($post->ID)) ? get_the_og_description($post->ID) : '' ?>">
    <meta property="og:url" content="<?= (!empty($post->ID)) ? get_permalink($post->ID) : '' ?>">
    <meta property="og:image" content="<?= (!empty($post->ID)) ? the_field('og_image') : '' ?>">

    <!-- Icons -->
    <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/favicon.ico" type="image/x-icon">
    <link rel="App Icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_144x144.png">
    <link rel="App Icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_114x114.png">
    <link rel="App Icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_72x72.png">
    <link rel="App Icon" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_57x57.png"> -->

    <!-- Typography -->
    <script src="https://use.typekit.net/ipf2sql.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">

    <!-- Always have wp_head() just before the closing </head> tag of your theme, or you will break many plugins. -->
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'coming-soon-body' ); ?>>
    <a id="top"></a>
    <div class="page-wrapper">

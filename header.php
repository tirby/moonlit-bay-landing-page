<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,700" rel="stylesheet">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

    <!--
      Application Wrapper
    -->
    <div class="app-wrapper">

      <!--
        Application Header
      -->
      <header class="app-header" data-application-header>
        <div class="header-content flat three-column">
          <!-- Application Branding -->
          <div class="app-branding">
            <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
              <a href="<?php echo home_url(); ?>">
                <?php the_custom_logo(); ?>
              </a>
            <?php else : ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/codelation-wp-logo.png" alt="<?php bloginfo( 'name' ); ?>" />
              </a>
            <?php endif; ?>
          </div>
          <!-- /app-branding -->
          <!-- Application Navigation -->
          <nav id="app-navigation" class="app-navigation" role="navigation">
            <?php codelation_nav(''); ?>
          </nav>
          <!-- /app-navigation -->
        </div>
        <!-- Mobile Trigger -->
        <div id="trigger" class="trigger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <!-- /mobile-trigger -->
      </header>
      <!-- /app-header -->

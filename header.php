<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header id="masthead" class="site-header">
  <div class="site-header-container">

    <div class="site-branding">
      <a href="<?php echo home_url(); ?>" class="custom-logo-link">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="TaleSwap">
      </a>
    </div>

    <nav id="site-navigation" class="main-navigation">
      <ul class="main-menu">
        <li><a href="<?php echo home_url('/explore'); ?>">Explore</a></li>
        <li><a href="<?php echo home_url('/upload'); ?>">Upload</a></li>
        <li><a href="<?php echo home_url('/community'); ?>">Community</a></li>
        <li><a href="<?php echo home_url('/about-us'); ?>">About us</a></li>
      </ul>
    </nav>

    <div class="header-profile-icon">
      <a href="<?php echo home_url('/login'); ?>" aria-label="Profile">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.svg" alt="Profile">
      </a>
    </div>

  </div>
  <?php wp_head(); ?>
</header>

  <div id="content" class="site-content">

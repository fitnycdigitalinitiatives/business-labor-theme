<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-100">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('h-100'); ?>>
<div id="page" class="site d-flex flex-column h-100">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'business-labor-theme' ); ?></a>
	<header id="masthead" class="site-header flex-shrink-0" role="banner">
    <div class="container-fluid py-3" id="fit-wordmark">
      <a href="https://www.fitnyc.edu">
        <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/fit-wordmark.png'; ?>" alt="FIT logo"/>
      </a>
    </div>

    <div class="container pt-5 pb-3 d-none d-md-block">
      <div class="row justify-content-center">
        <div class="col-auto">
          <a class="text-dark text-decoration-none" href="<?php echo esc_url( home_url( '/' )); ?>">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/blh-brand.png'; ?>" alt="FIT Business / Labor" id="blh-brand"/>
          </a>
        </div>
      </div>
    </div>

    <nav class="navbar navbar navbar-expand-md mt-2 mt-md-0">
      <div class="container">
        <a class="navbar-brand d-md-none" href="<?php echo esc_url( home_url( '/' )); ?>">
          <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/blh-brand.png'; ?>" alt="FIT Business / Labor">
        </a>
        <button class="navbar-toggler px-0" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="#343a40" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
        </button>

        <?php
        wp_nav_menu(array(
        'theme_location'    => 'primary',
        'container'       => 'div',
        'container_id'    => 'main-nav',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav m-auto',
        'depth'           => 3,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
        ));
        ?>
      </div>
    </nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content my-5 flex-shrink-0">
		<div class="container">
			<div class="row justify-content-center">

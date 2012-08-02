<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <?php include (TEMPLATEPATH . '/shared/head.php'); ?>
  </head>

  <body>
    <header>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

      <?php get_search_form(); ?>

    </header>
    <nav>
      <?php $settings = array( 'menu' => 'mainnav', 'container' => false, 'menu_id' => false, 'menu_class' => false); wp_nav_menu($settings); ?>
    </nav>

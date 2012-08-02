<title>
  <?php
    global $page, $paged;
    wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";
    if ( $paged >= 2 || $page >= 2 )
      echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
  ?>
</title>

<meta name="description" content="
  <?php
    if ( is_single() ) {
      single_post_title('', true);
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>"
/>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="icon" type="image/png" href="<?php echo bloginfo('template_directory'); ?>/assets/images/favicon.png" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/stylesheets/screen.css" media="all" />

<?php wp_deregister_script('jquery');wp_head(); ?>

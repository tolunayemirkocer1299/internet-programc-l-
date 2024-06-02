<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milli Türk Talebe Birliği</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>    

<header class="top">
<div class="container">

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
  <a class="navbar-brand" href="#">Milli Türk Talebe Birliği</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

<?php wp_nav_menu(
array(
    'theme_location' => 'top-menu',
    'menu_class' => 'navigation'
)
)
?>

</div>
</header>    


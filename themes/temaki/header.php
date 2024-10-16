<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--head WP-->
    <?php wp_head(); ?>
    <title><?php bloginfo('description'); ?></title>
    <!--fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<!--CSS-->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>
<body <?php body_class(); ?>>
    
<header class="cabecera">
<a href="<?php echo home_url(); ?>" class="cabecera__logo">
    
         <div class="cabecera__imagen"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.svg"></div>
         <h3 class="cabecera__texto"><?php bloginfo('name'); ?></h3>
    </a>

    <input type="checkbox" id="check">

    <label class="cabecera__burger" for="check">
        <div></div>
        <div></div>
        <div></div>
    </label>

    <div class="cabecera__separador"></div>

    <nav class="cabecera__nav">
    <!--menu superior-->
        <?php wp_nav_menu( array( 
        'theme_location' => 'topmenu', 
        'container' => 'false', //quita un div basura
        'menu_class'=>'cabecera__menu') 
        ); ?>
   <!--menu redes-->
       <?php wp_nav_menu( array( 
       'theme_location' => 'redesmenu', 
       'container' => 'false', 
        'menu_class'=>'cabecera__redes') 
        ); ?>

</nav>

<div class="cabecera__buscador">
<?php the_widget( 'WP_Widget_Search' ); /* buscador */ ?> 
</div>


</header>

<main>








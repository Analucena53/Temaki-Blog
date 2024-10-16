<?php get_header(); ?>
<!-- main -->

<article class="articulo">
<!-- empieza el LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
/* variables para cada imagen */
$full = get_the_post_thumbnail_url(get_the_ID(),'full');
$large = get_the_post_thumbnail_url(get_the_ID(),'large');
$thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
$medium = get_the_post_thumbnail_url(get_the_ID(),'medium');
?>

<picture class="articulo__imagen">
<source media="(min-width: 990px)" srcset="<?php echo esc_url($medium); ?>">
<img src="<?php echo esc_url($medium); ?>" alt="">
</picture>

<div class="articulo__contenedor">

<h3 class="articulo__categoria"><?php the_category(); ?></h3>

<h1 class="articulo__titulo"><?php the_title(); ?></h1>
<div class="articulo__contenido"><?php the_content(); ?></div>

<ul class="articulo__meta">
    <li class="articulo__autor"><?php the_author_posts_link(); ?></li>
    <li class="articulo__fecha"><?php echo get_the_date(); ?></li>
</ul>

<?php the_tags( '<ul class="articulo__etiquetas"><li>', '</li><li>', '</li></ul>' ); ?>
<?php if ( comments_open() || get_comments_number() ) :
	comments_template();
endif; ?> 




</div> <!--articulo__contenedor-->

<?php endwhile; endif; ?>
<!-- termina el LOOP -->
</article>


<!--fin main-->
<?php get_footer(); ?>

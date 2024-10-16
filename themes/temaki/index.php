<?php get_header(); ?>


<section class="entradas">

    <div class="entradas__col-principal">
    <h1 class="entradas__descripcion"><?php bloginfo('description'); ?></h1>

    <?php
        if (is_category()) { 
            echo '<h3 class="entradas__label"><span>categoría </span>';
            echo single_cat_title();
            echo '</h3>';
        } 
        elseif (is_tag()) {
            echo '<h3 class="entradas__label"><span>etiqueta </span>';
            echo single_tag_title();
            echo '</h3>';
        }
        elseif (is_author()) {
            echo '<h3 class="entradas__label"><span>escritos por </span>';
            echo get_the_author();
            echo '</h3>';
        }
        ?>




    <div class="entradas__fila">
<!-- empieza el LOOP -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
/* variables para cada imagen */
$full = get_the_post_thumbnail_url(get_the_ID(),'full');
$large = get_the_post_thumbnail_url(get_the_ID(),'large');
$thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
$medium = get_the_post_thumbnail_url(get_the_ID(),'medium');
?>

<div class="entradas__col">

<article class="entradas__articulo">

<picture class="entradas__imagen">
<source media="(min-width: 990px)" srcset="<?php echo esc_url($medium); ?>">
<img src="<?php echo esc_url($thumbnail); ?>" alt="">
</picture>

<div class="entradas__contenido">
   <h2 class="entradas__titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <ul class="entradas__meta">
    <li class="entradas__categoria"><?php the_category(); ?></li>
    <li class="entradas__fecha"><?php echo get_the_date(); ?></li>
   </ul>



<div class="entradas__extracto"><?php the_excerpt(); ?></div>

</div>


<a href="<?php the_permalink(); ?>" class="entradas__mas"><i class="icon-flecha"></i></a>

</article>

</div> <!-- entradas__col -->

<?php endwhile; endif; ?>
<!-- termina el LOOP -->

</div> <!--entradas__fila -->

<div class="paginador"><?php echo paginate_links(); ?>
</div>

</div> <!--entradas__col-principal -->

<div class="entradas__col-lateral">
<?php if(!dynamic_sidebar('lateral')); ?>
</div>

</section>

<?php get_footer(); ?>
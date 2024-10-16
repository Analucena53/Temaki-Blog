<?php get_header(); ?>


<section class="resultados">

    <div class="resultados__col-principal">

        <h1 class="resultados__titulo-bus">
            Has buscado:
            <?php
            $allsearch = new WP_Query("s=$s&showposts=-1");
            $key = wp_specialchars($s, 1);
            $count = $allsearch->post_count;
            echo '<strong> ' . $key . '</strong> - encontrados: <strong> ' . $count . '</strong>';
            wp_reset_query();
            ?>
        </h1>



    <div class="resultados__fila">

<!-- empieza el LOOP -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
/* variables para cada imagen */
$full = get_the_post_thumbnail_url(get_the_ID(),'full');
$large = get_the_post_thumbnail_url(get_the_ID(),'large');
$thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
$medium = get_the_post_thumbnail_url(get_the_ID(),'medium');
?>

<div class="resultados__col">

<article class="resultados__articulo">

<picture class="resultados__imagen">
<source media="(min-width: 990px)" srcset="<?php echo esc_url($medium); ?>">
<img src="<?php echo esc_url($thumbnail); ?>" alt="">
</picture>

<div class="resultados__contenido">
   <h2 class="resultados__titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <ul class="resultados__meta">
    <li class="resultados__categoria"><?php the_category(); ?></li>
    <li class="resultados__fecha"><?php echo get_the_date(); ?></li>
   </ul>



<div class="resultados__extracto"><?php the_excerpt(); ?></div>

</div>

<a href="<?php the_permalink(); ?>" class="resultados__mas">Ver más</a>


</article>

</div> <!-- entradas__col -->

<?php endwhile; endif; ?>
<!-- termina el LOOP -->

</div> <!--entradas__fila -->

<div class="paginador"><?php echo paginate_links(); ?>
</div>

</div> <!--entradas__col-principal -->

<div class="entradas__col-lateral"></div>

</section>

<?php get_footer(); ?>
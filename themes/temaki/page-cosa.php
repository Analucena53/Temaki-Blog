<?php
/* Template Name: otra cosa */
?>


<?php get_header(); ?>
<!-- main -->

<article class="pagina">
<!-- empieza el LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="pagina__contenido"><?php the_content(); ?></div>
<h1 class="pagina__titulo"><?php the_title(); ?></h1>

<?php endwhile; endif; ?>
<!-- termina el LOOP -->
</article>



<?php get_footer(); ?>

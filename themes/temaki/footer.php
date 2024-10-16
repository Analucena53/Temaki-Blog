</main>

<footer class="pie">

<div class="pie__widgets">

<?php if(!dynamic_sidebar('general')); ?>

</div>

<div class="pie__cierre">
    <!--menu pie-->
    <?php wp_nav_menu( array( 
       'theme_location' => 'piemenu', 
       'container' => 'false', 
        'menu_class'=>'pie__menu') 
        ); ?>

<!--copyright-->
<?php if ( function_exists( 'display_copyright' ) ) display_copyright(); ?>



</div>





</footer>

<div class="subir">
    <i class="icon-flecha"></i>
</div>

<?php wp_footer(); ?>
</body>
</html>
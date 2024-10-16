<?php


//MENUS
function register_my_menus() {
  register_nav_menus(
    array(
      'topmenu' => __( 'Menú superior' ), 
      'redesmenu' => __( 'Menú de redes' ),
      'piemenu' => __( 'Menú en el pie' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//WIDGETS PIE
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Widgets pie',
        'id'            => 'general',
        'before_widget' => '<div id="%1$s" class="pie__widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="pie__titulo">',
        'after_title'   => '</h3>'
    ));
}

//WIDGETS COLUMNA LATERAL
if(function_exists('register_sidebar')) {
  register_sidebar(array(
      'name'          => 'Widgets lateral',
      'id'            => 'lateral',
      'before_widget' => '<div id="%1$s" class="lateral__widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="lateral__titulo">',
      'after_title'   => '</h3>'
  ));
}

// Desactiva el editor de bloques en la gestión de widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );


//imagenes destacadas
add_theme_support( 'post-thumbnails' ); 

//EXTRACTO
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');



// FORMULARIO DE ACCESO A COMENTARIOS
function campos_formulario( $fields) {
	
  //Variables necesarias básicas como que el email es obligatorio
  $commenter = wp_get_current_commenter();
  $req = get_option( 'require_name_email' );
  $aria_req = ( $req ? " aria-required='true'" : '' );
    
  // campos por defecto del formulario que vamos a introducir con nuestros cambios
  $fields =  array(
    
  //NOMBRE
  'author' =>
  '<input id="author" placeholder="nombre" class="comentarios__nombre" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
  '" size="30"' . $aria_req . ' />',
  // EMAIL
  'email' =>
  '<input id="email" placeholder="email" class="comentarios__email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',
  //URL
  'url' =>
  '<input id="url" placeholder="web" class="comentarios__web" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
  '" size="30" />',
  ); 
    
  return $fields;
  }
  add_filter('comment_form_default_fields', 'campos_formulario');
  
  
  // copyright
function display_copyright( $iYear = null, $szSeparator = " - ", $szTail = '. Todos los derechos reservados.')
{echo '<div class="copyright">' . display_years( $iYear, $szSeparator, false ) . ' &copy; ' . get_bloginfo('name') . $szTail . '</div>';}
function display_years( $iYear = null, $szSeparator = " - ", $bPrint = true )
{
$iCurrentYear = ( date( "Y" ) );
if ( is_int( $iYear ) )
{$iYear = ( $iCurrentYear > $iYear ) ? $iYear = $iYear . $szSeparator . $iCurrentYear : $iYear;
} else {
$iYear = $iCurrentYear;}
if ( $bPrint == true ) echo $iYear; else return $iYear;
}


function replace_jquery() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.1.0.min.js' , false, NULL, true );
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'replace_jquery');

function main_scripts() {
  wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ));
}
add_action( 'wp_footer', 'main_scripts' );

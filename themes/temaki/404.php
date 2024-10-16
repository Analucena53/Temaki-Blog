<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <style>

    /*reset*/
    *{box-sizing: border-box;}
    img {max-width: 100%; display:block; height:auto;}
    figure, picture {display: block;}
    h1,h2,h3,h4,h5,h6,p,ul,body, figure, blockquote {margin:0;}
    ul{list-style: none; padding: 0;}
    input[type="text"],
    input[type="email"],
    textarea {width: 100%; display: block; outline: none;}
    a { text-decoration: none;}

    /*colores*/
    :root{
        --azul-cta: #1FC1DB;
        --azul-oscuro:#293537;
        --azul-claro:#DDF6FA;
        --azul-medio:#037C8F;
        --azul-gris:#B9C4CE;
        --blanco:#ffffff;
    }

    
/* tema */

body, html {
    height: 100%;
}

body{
    font-family: 'Roboto', sans-serif;
    color:var(--azul-oscuro);
    display: flex;
    flex-direction: column;
}



/* cabecera */

        .cabecera{
            display: flex;
            margin-bottom: 30px;
            z-index: 999;
        }

        .cabecera__logo{
            display: block;
            width: 60px;
            height:60px;
            background-color: var(--azul-cta);
            padding:10px;
        }
        .cabecera__texto{
            display: none;
        }


/* menu */

        main {flex: 1;}    

        .titulo {
            font-size: 18px;
            font-family: 'roboto';
            color:#293537;
            text-align: center;   
            text-transform: uppercase; 
            margin-top: 20px;
            
            
        }

        .imagen404 {
            width: 365px;
            height: 365px;
        }

        .subtitulo {
            font-size: 16px;
            color:#293537;
            text-align: center;
            padding: 0 65px;
            padding-bottom: 50px;
            margin: 0;
        }

        .foto {margin: auto;}
        
        .pildora {
            display: block;
            margin: auto;
            width: 150px;
            text-align: center;
            background-color: #037C8F;
            text-transform: uppercase;
            color: white;
            font-size: 14px;
            font-weight: bold;
            border-radius: 40px;
            padding: 10px;
            cursor: pointer;
        }


/*TABLET*/

@media (min-width:768px) {

/* cabecera */

        .cabecera{
            display: flex;
            margin-bottom: 30px;
            z-index: 999;
        }

        .cabecera__logo{
            display: block;
            width: 100px;
            height:100px;
            background-color: var(--azul-cta);
            padding:10px;
        }
        .cabecera__texto{
            display: none;
        }
        
/* menu */

        .titulo {
            font-size: 26px;
            font-family: 'roboto';
            color:#293537;
            text-align: center;   
            text-transform: uppercase; 
            margin-top: 50px;
        
        }

        .imagen404 {
            width: 600px;
            height: 600px;
        }

        .subtitulo {
            font-size: 20px;
            color:#293537;
            text-align: center;
            padding: 0 65px;
            padding-bottom: 50px;
            margin: 0;
        }
        
        

        .pildora{
            display: block;
            margin: auto;
            width: 170px;
            text-align: center;
            background-color: #037C8F;
            text-transform: uppercase;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 40px;
            padding: 10px;
            cursor: pointer;
        }

        .pildora:hover{
        transform: scale(1.1);
        background-color: #1FC1DB;
        }

}

/*ESCRITORIO*/
@media (min-width: 1280px){

    /* cabecera */

        .cabecera {
        max-width: 1140px;
        margin-right: auto;
        margin-left: auto;
        width: 100%;
    }

        .cabecera__logo {
            flex: 0 0 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .cabecera__imagen {
            flex:0 0 80px;
            margin-right: 10px;
        }

        .cabecera__texto {
            display: block;
            color:var(--azul-claro);
            font-size: 25px;
        }
        
/* menu */

        .titulo {
            font-size: 26px;
            font-family: 'roboto';
            color:#293537;
            text-align: center;   
            text-transform: uppercase; 
            margin-top: -50px;
        
        }

    
        .subtitulo {
            font-size: 20px;
            color:#293537;
            text-align: center;
            padding: 0 65px;
            padding-bottom: 20px;
            margin: 0;
        }
        
        
}

    </style>
</head>
<body>
<header class="cabecera">
    <a href="<?php echo home_url(); ?>" class="cabecera__logo">
        <div class="cabecera__imagen"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.svg"></div>
        <h3 class="cabecera__texto"><?php bloginfo('name'); ?></h3>
    </a>


    </header>
    
    <h1 class="titulo">UPS! Esto no es lo que buscas</h1>
    <div class="foto">
        <img class="imagen404" src="<?php bloginfo( 'template_url' ); ?>/img/imagen404.png">
    </div>
    <h2 class="subtitulo">Sentimos no poder ayudarte con tu búsqueda</h2>
    <a href="<?php echo home_url(); ?>" class="pildora">vuelve al inicio</a>
</body>
</html>


    
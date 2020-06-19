<?php
session_start();

if(!isset( $_SESSION['uuid']))
{
    header('Location: '.'index.php');

}

?>
<!DOCTYPE html>
<html >

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169909930-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169909930-1');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>Mecanica SoftDreams</title>
    <link rel='stylesheet' href='css/mecanica.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/botones.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/general.css' type='text/css' media='all' />

    <link rel='stylesheet' href='revslider/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/select2.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/main-home.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/shop.css' type='text/css' media='all' />

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='revslider/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='revslider/js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript" src="revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revslider/js/extensions/revolution.extension.parallax.min.js"></script>
    
    <link rel="icon" href="img/icon.ico" sizes="32x32" />
    <link rel="icon" href="img/icon.ico" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/icon.ico">
    <meta name="msapplication-TileImage" content="img/icon.ico">
</head>

<body class="home page wide wave-style">
    <div class="page">
        <!-- top panel -->
        <div class='site_top_panel wave slider'>
            <!-- canvas -->
            <div class='top_half_sin_wrapper'>
                <canvas class='top_half_sin' data-bg-color='#ffffff' data-line-color='#ffffff'></canvas>
            </div>
            <!-- / canvas -->
            <
        </div>
        <!-- / top panel -->
        <!-- slider and menu container -->
        <div class='slider_vs_menu'>
            <div class='header_cont'>
                <div class='header_mask'>
                    <div class='header_pattern'></div>
                </div>
                <header class='site_header logo-in-menu' data-menu-after="2">
                    <div class="header_box">
                        <div class="container">
                            <!-- logo -->
                            <div class="menu header_logo_part with_border logomenu" role="banner">
                                <a class="logo logomenu" href="galerias.php"><img src='img/logomenu2.png' data-at2x='img/logomenu2.png' alt /></a>
                            </div>
                            <!-- / logo -->
                            <!-- menu -->
                            <div class="menu header_nav_part">
                                <nav class="main-nav-container a-right">
                                    <div class="mobile_menu_header">
                                        <i class="mobile_menu_switcher"><span></span><span></span><span></span></i>
                                    </div>
                                    <ul id="menu-main-menu" class="main-menu menu-bees margin-bottom-menu">

                                        <!-- menu item -->
                                        <li class="menu menu-item current-menu-item page_item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children bees-start">
                                            <a href="home.php" class="menu" >
                                                <div class="bees bees-start">
                                                    
                                                </div>Participar
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                            <!-- <span class='button_open'></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item back"><a href="#"><em>←</em>&nbsp;Mi perfil</a>
                                                </li>
                                                <li class="menu-item current-menu-item page_item current_page_item"><a href="index.html">Learn&#038;Play</a></li>
                                                <li class="menu-item"><a href="babysitter.html">Babysitter</a></li>
                                                <li class="menu-item"><a href="store.html">Store</a></li>
                                            </ul> -->
                                        </li>
                                        <!-- / menu item -->

                                        <!-- menu item -->
                                        <li class="menu menu-item  right">
                                            <a href="mecanica.php" id="participar" >Mecánica
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed">
                                                        
                                                    </canvas>
                                                </div>
                                            </a>   
                                        </li>
                                        <!-- / menu item -->

                                        <!-- menu item -->
                                        <li class="menu menu-item menu-item-has-children"><a href="perfil.php" >Mi perfil<div class="canvas_wrapper" ><canvas class="menu_dashed"></canvas></div></a>
                                            <!-- <span class='button_open'></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item back"><a href="#"><em>←</em>&nbsp;BACK</a>
                                                </li>
                                                <li class="menu-item"><a href="features-benefits.html">Template Benefits</a></li>
                                                <li class="menu-item"><a href="features-shop-ready.html">Shop Ready</a></li>
                                                <li class="menu-item"><a href="features-content-elements.html">Content Elements</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="features-shop.html">Shop</a>
                                                    <span class='button_open'></span>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item back"><a href="#"><em>←</em>&nbsp;BACK</a>
                                                        </li>
                                                        <li class="menu-item"><a href="features-shop.html">Shop</a></li>
                                                        <li class="menu-item"><a href="features-shop-cart.html">Cart</a></li>
                                                        <li class="menu-item"><a href="features-shop-checkout.html">Checkout</a></li>
                                                        <li class="menu-item"><a href="features-my-account.html">My Account</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <!-- / menu item -->
                                        
                                        
                                        
                                        <!-- menu item -->
                                        <li class="menu menu-item right bees-end">
                                            <a href="galerias.php" >
                                                <div class="bees bees-end">

                                                </div>Galerías
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- / menu item -->


                                    </ul>
                                </nav>
                            </div>
                            <!-- / menu -->
                        </div>

                        <div class="grid_row alineacion" style="">
                            <div class="cws_fa_tbl_row " style="z-index: 45;">
                                <div class="cws_fa_tbl_cell ">
                                    <div class="cws_fa_wrapper round">
                                        <img class="icono-nube" src="img/cloud.png">
                                    </div>
                                </div>
                                <div class="cws_fa_tbl_cell ">
                                    <h4 class="titulo-nube"></h4>
                                </div>
                                <div class="div-nuve">
                                    
                                    <a href="participa.php" class="cws_button small boton-uno" onclick="llenar_nube();">OBTENER NUBES</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </header>
                <!-- #masthead -->
            </div>
            <div class="container-fluid fondo-azul" >
                <div class="row">
                <!-- <div class="col-12 col-sm-9 col-md-4 col-lg-6 logo-idex alinear-img">
                    <img src="img/logo1.png"  data-no-retina class="img-menu">
                </div> -->
                <!-- <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                        
                    </div> -->

            </div><!-- END roW -->
            
            <!-- END REVOLUTION SLIDER -->
           </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- / slider and menu container -->
        
        <!-- canvas -->
        <div class="cloud_wrapper">
            <canvas class="white_cloud"></canvas>
        </div>
        <!-- / canvas -->

        <!-- main container -->
        <div id="main-mecanica" class="site-main">
            <div class="page_content margin-botton" style="padding-bottom: 10px !important;">
                <!-- pattern conatainer / -->
                <div class='left-pattern pattern pattern-6'>
                    
                </div>

                <main>
                    <div class='grid_row ' style='padding-top: 0px;'>
                        <div class="grid_col grid_col_12">
                            <h3 class="titulo1">Mecánica</h3>
                            <div class=" clearfix linea">
                                <div class="grid_col grid_col_12">
                                    <div class="ce clearfix">
                                        <div>
                                            <hr class="hr-linea">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- section -->    
                </main>
                <!-- main container -->
        <div id="main-mecanica1" class="site-main">
            <div class="page_content margin-botton">
                <!-- pattern conatainer / -->
                <div class='left-pattern pattern pattern-6'></div>
                <main>
                    <!-- heading section -->
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <h3 class="ce_title" style="text-align: center;">¿Cómo participo? <span ></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- / heading section -->
                    <!-- section -->
                    <div class='grid_row clearfix' style=''>
                        <div class='grid_col grid_col_8 justificar'>
                            <!-- about us -->
                            <div class='ce clearfix'>
                                <div>
                                    
                                    <p class="texto2">
                                        Por cada <strong>$180.00 pesos</strong> de compra en productos Soft Dreams, participa para ganar premios diarios, semanales, premios por categorías especiales y la oportunidad de ganar el  <strong>premio final con valor de $100,000 pesos</strong>. 

                                    </p>
                                    
                                
                                </div>
                            </div>
                            <!-- / about us -->
                        </div>
                        <div class='grid_col grid_col_4 centrar'>
                            <div class='ce clearfix'>
                                <div>
                                    <img class="noborder alignnone image-type size-full" src="img/participa.jpg" width="385" height="373" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / section -->
                    <!-- divider -->
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <hr class="hr-linea">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / divider -->

                    <!-- heading section -->
                    <br>
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <h3 class="ce_title" style="text-align: center;">¿Cómo gano? <span ></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / heading section -->
                    <br>
                    <!-- section -->
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_4'>
                            <div class='ce clearfix'>

                                <div class="centrar">
                                    <img class=" image-type size-full imagen-circulo" src="img/1.jpg" width="385" height="373" />
                                </div>

                                <div>
                                    <div class='cws_fa_tbl'>

                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <h2 class="titulo2">Premios Diarios</h2>
                                            </div>
                                        </div>
                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <p class="texto1_1"><br></p>
                                                <p class="texto1"><strong>Diseña&nbsp; una&nbsp; foto&nbsp; creativa&nbsp; con</strong> Soft Dreams y compártela. Tu foto participará todos los días de la vigencia a partir de la fecha en que fue compartida. Premiaremos la fotografía más creativa cada día de la Promoción.
                                                </p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class='grid_col grid_col_4'>
                            <div class='ce clearfix'>
                                <div class="centrar">
                                    <img class=" image-type size-full imagen-circulo" src="img/2.jpg" width="385" height="373" />
                                </div>

                                <div>

                                    <div class='cws_fa_tbl'>
                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <h2 class="titulo2">Premios Semanales</h2></div>
                                        </div>
                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <p class="texto1"><br>La Promoción estará vigente durante 10 semanas. Al final de cada semana, se premiará la foto más creativa. Participarán todas las fotos compartidas hasta ese momento.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class='grid_col grid_col_4'>
                            <div class='ce clearfix'>
                                <div class="centrar">
                                    <img class=" alignnone image-type size-full imagen-circulo" src="img/3.jpg" width="385" height="373" />
                                </div>

                                <div>
                                    <div class='cws_fa_tbl'>
                                        <div class='cws_fa_tbl_row centrar'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <h2 class="titulo2">Categorías Especiales</h2>
                                            </div>
                                        </div>


                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <p class="texto1_1"><br></p>
                                                <p class="texto1"> <strong>Diseña&nbsp; una&nbsp; foto&nbsp; creativa&nbsp; con</strong> Soft Dreams haciendo alusión a la categoría especial en la que elijas participar. Sube la(s) fotos participantes a la plataforma para ganar. Al final de la Promoción se premiará las fotos más creativas de cada categoría especial. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <br>
                    <!-- / section -->
                    <!-- divider -->
                    <div class='grid_row clearfix' style=''>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <hr class="hr-linea">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / divider -->
                    <br>
                    <!-- heading section -->
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <h3 class="ce_title" style="text-align: center;">Premio Final <span ></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- / heading section -->
                    <!-- section -->
                    <div class='grid_row clearfix' style='padding-top: 30px;'>
                        <div class='grid_col grid_col_8'>
                            <!-- about us -->
                            <div class='ce clearfix'>
                                <div>
                                   
                                    <p class="texto1">Participarán para el premio final todas las fotografías compartidas en la plataforma en línea durante la vigencia establecida. La foto más creativa de toda la Promoción será acreedora al gran Premio. El ganador podrá elegir que le sea entregado su premio en especie y/o en dinero con un valor que no exceda de la cantidad establecida. </p>
                                    
                                    <!-- <a href='page-about-us.html' class='cws_button small'>More About Us</a> -->
                                </div>
                            </div>
                            <!-- / about us -->
                        </div>
                        <div class='grid_col grid_col_4'>
                            <div class='ce clearfix'>
                                <div><img class="noborder alignnone image-type size-full ganaimg" src="img/5.png" width="385" height="373" /></div>
                            </div>
                        </div>
                    </div>
                    <!-- / section -->
                    <!-- / section -->
                </main>
                <!-- pettaren container / -->
                <div class='right-pattern pattern pattern-6'></div>
                <!-- footer image container / -->
                
            </div>
            
        </div>
        <!-- #main -->
                <!-- pettaren container / -->
                <div class='right-pattern pattern pattern-6'></div>
                <!-- footer image container / -->
                
            </div>
            <!-- svg filter -->
            
            <!-- / svg filter -->
        </div>
        <!-- #main -->
        <!-- footer -->
        <div class='footer_wrapper_copyright'>
            <!-- canvas -->
            <div class='half_sin_wrapper'>
                <canvas class='half_sin' data-bg-color='23,108,129' data-line-color='23,108,129'></canvas>
            </div>
            <!-- / canvas -->
            
            <!-- copyright -->
            <div class='copyrights_area fotter' >
                <!-- canvas -->
                <div class='half_sin_wrapper'>
                    <canvas class='footer_half_sin' data-bg-color='14,64,77' data-line-color='14,64,77'></canvas>
                </div>
                <!-- / canvas -->
                <div class='container'>
                    <div class='copyrights_container'>
                        <div class="post_info_header centrar">
                           <h3 class="ce_title3 grid_col grid_col_6 boreder "><a href="https://softdreams.blob.core.windows.net/legal/Te%CC%81rminos%20y%20Condiciones.pdf#toolbar=0" class="terminos-y-condicion" target="_blank">Términos y Condiciones </a></h3>


                            <h3 class="ce_title3 grid_col grid_col_6 boreder " style=""><a href="https://softdreams.blob.core.windows.net/legal/Aviso%20de%20Privacidad.pdf#toolbar=0" target="_blank" class="terminos-y-condicion">Aviso de Privacidad</a>
                            </h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- / copyright -->
        </div>
    </div>
    <!-- #page -->
    <div class='scroll_top animated'></div>
    
    
    <script type='text/javascript' src='js/retina_1.3.0.js'></script>
    <script type='text/javascript' src='js/modernizr.js'></script>
    <script type='text/javascript' src='js/owl.carousel.js'></script>
    <script type='text/javascript' src='js/TweenMax.min.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='js/select2.min.js'></script>
    <script type='text/javascript' src='js/wow.min.js'></script>
    <script type='text/javascript' src='js/jquery.validate.min.js'></script>
    <script type='text/javascript' src="js/jquery.form.min.js"></script>
    <script type='text/javascript' src='js/scripts.js'></script>
    <script type='text/javascript' src="js/jquery.tweet.js"></script>

    <script type='text/javascript' src="js/participa.js"></script>
    <script type="text/javascript" src="js/users_summary.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function(){
  llenar_nube();
});
    </script>

</body>

</html>

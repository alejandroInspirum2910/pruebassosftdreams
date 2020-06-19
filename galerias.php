<?php
session_start();

if(!isset( $_SESSION['uuid']))
{
    header('Location: '.'index.php');

}

?>
<!DOCTYPE html>
<html lang="en" style="height: 100%">

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
    
    <title>Galeria SoftDreams</title>
    
    <link rel='stylesheet' href='css/galeria.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/botones.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/general.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/jPages.css' type='text/css' media='all' />

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

<body class="home page wide wave-style" style="height: 100%">
    <div class="page" style="height: 95%">
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

                                    <div class="row">
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
                                        <li class="menu menu-item menu-item-has-children right">
                                            <a href="mecanica.php" >Mecánica
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed">
                                                        
                                                    </canvas>
                                                </div>
                                            </a>   
                                        </li>
                                        <!-- / menu item -->

                                        <!-- menu item -->
                                        <li class="menu menu-item menu-item-has-children"><a href="perfil.php" >Mi perfil<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>
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
                                </div>


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
                                    <a href="participa.php" class="cws_button small boton-uno" >OBTENER NUBES</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </header>
                

                <!-- #masthead -->
            </div>
            
            <div class="container-fluid fondo-azul">
                <div class="grid_row">
                    
                    

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
        <div id="main" class="site-main body" >
            <div class="page_content margin-botton" style="padding-bottom: 10px !important;">
                <!-- pattern conatainer / -->
                <div class='left-pattern pattern pattern-6'>
                    
                </div>


                <main>
                    <div class='grid_row ' style='padding-top: 0px;'>
                        <div class="grid_col grid_col_12">
                            <h5 class="titulo">Galerias</h5>
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
                <!-- main container -->
        <div id="main3" class="site-main">
            <div class="page_content">
                <!-- pattern container / -->
                <div class='left-pattern pattern pattern-6'></div>
                <main>
                    <div class='grid_row clearfix'>
                        <!-- filter -->
                        <section class='cws_portfolio massonry'>
                            <!-- filter header -->
                            <div class='cws_portfolio_header'>
                                <div id="div_titulo_galerias">
                                    <p class="sub-titulos" id="titulo_galeria"></p>
                                </div>
                                
                                <div class='cws_portfolio_filter_container' style="text-align: right;">
                                    <select  class=" select_galerias select" id="select_galeria" onchange="fotos_diarias();">
                                        <!-- <option value="">Selecciona una opcion..</option> -->
                                         <option value="1" selected='selected'>Ganador Premios Diarios</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <!-- / filter header -->
                            <!-- filter items -->
                            <div class='cws_wrapper1'>

                                <div class='cws_portfolio_items grid grid-4' id="itemContainer" >
                                    <!-- item -->
                                    
                                    <!-- / item -->
                                    


                                </div>
                            </div>
                            <!-- / filter items -->
                            <input type='hidden' class='cws_portfolio_ajax_data' value='{"p_id":1858,"cols":"4","mode":"grid_with_filter","portcontent":"categories","cats":["explore","math","paint","read"],"exclude":[],"filter":"all","posts_per_page":"4"}' />

                        </section>
                        <!-- / filter -->
                    </div>
                    <div class="grid_row grid_col_12">
                                
                                <div class="holder" style="width: 100%;">
                                        
                                    </div>
                                    
                            </div>
                </main>
                <!-- / main content -->
                <!-- pattern container / -->
                <div class='right-pattern pattern pattern-6'></div>
                <!-- footer image container / -->
                
            </div>
            <!-- svg filter -->
            
            <!-- / svg filter -->
        </div>
        <!-- #main -->
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
            <div class='copyrights_area fotter' style="background-color: #35A89F !important; position: unset !important;">
                <!-- canvas -->
                <div class='half_sin_wrapper'>
                    <canvas class='footer_half_sin' data-bg-color='14,64,77' data-line-color='14,64,77'></canvas>
                </div>
                <!-- / canvas -->
                <div class='container'>
                    <div class='copyrights_container'>
                        <div class="post_info_header centrar">
                            <h3 class="ce_title3 grid_col grid_col_6 boreder "><a href="https://softdreams.blob.core.windows.net/legal/Te%CC%81rminos%20y%20Condiciones.pdf#toolbar=0" class="terminos-y-condicion" target="_blank">Términos y Condiciones </a></h3>


                            <h3 class="ce_title3 grid_col grid_col_6 boreder " style=""><a href="https://softdreams.blob.core.windows.net/legal/Aviso%20de%20Privacidad.pdf#toolbar=0" target="_blank" class="terminos-y-condicion" target="_blank">Aviso de Privacidad</a>
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

    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    
    <script type='text/javascript' src='js/retina_1.3.0.js'></script>
    <script type='text/javascript' src='js/modernizr.js'></script>
    <script type='text/javascript' src='js/owl.carousel.js'></script>
    <script type='text/javascript' src='js/TweenMax.min.js'></script>
    
    <script type='text/javascript' src='js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='js/select2.min.js'></script>
    <script type='text/javascript' src='js/wow.min.js'></script>
    
     <script type='text/javascript' src="js/jquery.form.min.js"></script>
    <script type='text/javascript' src='js/scripts.js'></script>
    <script type='text/javascript' src="js/jquery.tweet.js"></script>

    <script type="text/javascript" src="js/jPages.js"></script>
    <script type="text/javascript" src="js/users_summary.js"></script>
    <script type="text/javascript" src="js/galeria.js"></script>
    <script type="text/javascript" src="js/validaciones.js"></script>

    <script type="text/javascript">
        jQuery(function(){

    /* initiate the plugin */
    
    var filter = jQuery('#select_galeria').val();
    filterList(filter);
});

    function paginacion()
    {
        //console.log('paginas='+perPag);
        //Inicio=" previous";
        jQuery("div.holder").jPages({
        containerID  : "itemContainer",
        perPage      : 16,
        startPage    : 1,
        startRange   : 1,
        midRange     : 5,
        endRange     : 1,
        //first       : "Inicio",
        previous    : "Anterior",
        next        : "Siguiente",
        //ast        : "Final",
        animation: "fadeIn"

    });
    }
jQuery('#itemContainer').height(400);


//Filter Recruiters
// jQuery('select#select_galeria').change(function() {
//     var filter = jQuery(this).val();
//     filterList(filter);
    
// });

// Recruiters filter function
// function filterList(value) {
//     var perPag=0;
//     var list = jQuery('.cws_portfolio_items .item');
//     jQuery(list).hide();
//     //console.log(list);
//     if (value === 'all') {

//         jQuery('.cws_portfolio_items').find("article").each(function (i) {
//             jQuery(this).show();
//             perPag++;
//         });
//         if (perPag>=16) 
//         {
//             paginacion(16);
//         }
//         else
//         {
//             paginacion(perPag);
//         }
//     } 
//     else {
//         console.log('Maloo'+value);
//         // *=" means that if a data-custom type contains multiple values, it will find them
//         jQuery('.cws_portfolio_items').find("article[data-custom-type*='" + value + "']").each(function (i) {
//             jQuery(this).show();
            
//             perPag++;
            

//         });
//         if (perPag>=16) 
//         {
//             paginacion(16);
//         }
//         else
//         {
//             paginacion(perPag);
//         }
//     }
// }


    </script>
</body>

</html>

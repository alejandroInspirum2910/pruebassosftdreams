<?php
session_start();

if(!isset( $_SESSION['uuid']))
{
    header('Location: '.'index.php');

}

?>
<!DOCTYPE html>
<html lang="en-US" id="">

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
    
    <title>Participa SoftDreams</title>
    <link rel='stylesheet' href='css/home.css' type='text/css' media='all' />
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel='stylesheet' href='css/jquery-ui.css' type='text/css' media='all' />
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
                                    <ul id="menu-main-menu" class="main-menu menu-bees margin-bottom-menu" >

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
                                    <h4 class="titulo-nube" id="nubes_creditos"> </h4>
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


        <!-- main container SUBIR FOTO -->
        <div id="main" class="site-main" >
            
            
            <!-- / svg filter -->
        </div>
        <!-- #main -->

        <!-- main container SUBIR FOTO -->
        <div id="main2" class="site-main">
            <div class="page_content">
    <!-- pattern conatainer / -->
    <div class='left-pattern pattern pattern-6'>
        
    </div>
    <div class="load" style=" background-image: url('img/fancybox/fancybox_loading@2x.gif');">
        
    </div>
    <main>
        <div class='grid_row' style='padding-top: 0px;'>
            <div class="grid_col grid_col_12">
                <h5 class="titulo">Participar</h5>
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
                    <div class='grid_row clearfix' style='padding-top: 0px;'>
                         <div class="boxes">
                        <div class='grid_col grid_col_6 '>
                            <!-- about us -->
                            <div class='ce clearfix'>
                                <div class="movil-separador">
                                    <form id="form_participa">
                                    <p class="sub-titulos">Obtener Nubes</p>
                                    <p>Obtener nubes es muy sencillo. Sólo sube una foto de tu ticket de compra. Por cada <strong>$180.00 MXN</strong> de compra obtendrás una nube.</p>
                                    <div class="form-group">
                                        <label for="select_cadena" class="label">1. Selecciona la cadena donde realizaste tu compra.</label>
                                        
                                        <select id="select_cadena" class="select1" onchange="validar_participacion('select_cadena'); ">
                                            <option value="" selected='selected'>
                                                Selecciona una opcion..
                                            </option>
                                        </select>
                                        <div class="" id="errselect_cadena"> </div>
                                    </div>
                                    <br>
                                     
                                    <div class="form-group">
                                        
                                        <label for="numero_ticket" class="label">2. Indica el número de ticket de compra.</label>
                                         <input type="text" class="form-control" id="numero_ticket" aria-describedby="ticket_help" placeholder="" onkeyup ="validar_participacion('numero_ticket');">
                                        <div class="" id="errnumero_ticket"> </div>
                                    </div>
                                    <br>

                                    
                                    <div class="form-group">
                                        
                                        <label for="monto_compra" class="label">3. Indica el monto de tu compra en productos Soft Dreams.</label>
                                         <input type="number" class="form-control" id="monto_compra" aria-describedby="monto_help" placeholder="" onkeyup ="validar_participacion('monto_compra');">
                                        <div class="" id="errmonto_compra"> </div>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="select_fecha" class="label">4. Indica la fecha de tu ticket de compra.</label>
                                       
                                         <!-- <select id="select_fecha" class="select" onchange="validar_participacion('select_fecha');">
                                            <option value="">Selecciona una opcion..</option>
                                            
                                        </select> -->
                                        <div id="date_picker">
                                            <!-- <input type="date" name="" id="select_fecha" class="select date"  min="2020-06-15" max="" value="" onchange="validar_participacion('select_fecha');"> -->
                                            <input type="text" id="select_fecha" onchange="validar_participacion('select_fecha');">
                                        </div>
                                        
                                        <div class="" id="errselect_fecha"> </div>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="file_participar" class="label">5. Sube la fotografía de tu ticket de compra.</label>
                                        <small id="file_participar_help" class="form-text text-muted alerta-texto">Por favor, asegúrate de que la imagen sea legible.</small>
                                        <br>
                                        <div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
                                            <input type="file" id="file_participar" name="file_participar[]" class="input-file" accept=".jpg, .jpeg, .png" multiple />
                                            SELECCIONAR IMAGEN
                                        </div>
                                        <span id="file_name"></span>
                                        <div class="" id="errfile_participar" > </div>
                                    </div>
                                    <br>
                                    </form>

                                    <div id="preview_img">
                                        
                                        

                                    </div>
                                    
                                </div>
                                <div>

                                </div>

                            </div>
                            <!-- / about us -->
                        </div>

                        <div class='grid_col grid_col_6 '>
                            <p class="sub-titulos2">Nubes Disponibles</p>
                                
                                <div class="">
                                  <div class="cws_fa_tbl_row">
                                    <div class="cws_fa_tbl_cell ">
                                        <div class="cws_fa_wrapper round">
                                        <img class="icono-nube" src="img/cloud.png">
                                    </div>
                                    </div>
                                    <div class="cws_fa_tbl_cell">
                                        <h4 class="sub-titulos2" id="valor_nube"> </h4>
                                    </div>

                                    </div>

                                </div>
                                
                                <p class="sub-titulos1">¿Cómo Tomar la Fotografía de tu Ticket de Compra?</p>
                                <div>
                                    <p>Debe apreciarse:</p>
                                    <ul class="checkmarks_style rticket">
                                        <li>Fecha de compra</li>
                                        <li>Cadena/Comercio (tienda)</li> 
                                        <li>Nombre del producto</li>
                                        <li>Monto de compra</li>
                                    </ul>

                                </div>
                        </div>
                        </div>
                    </div>
                    <!-- / section -->
  
                </main>
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
            <div class='copyrights_area fotter'>
                <!-- canvas -->
                <div class='half_sin_wrapper'>
                    <canvas class='footer_half_sin' data-bg-color='14,64,77' data-line-color='14,64,77'></canvas>
                </div>
                <!-- / canvas -->
                <div class='container'>
                    <div class='copyrights_container '>
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
    
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    
    <script type='text/javascript' src='js/retina_1.3.0.js'></script>
    <script type='text/javascript' src='js/modernizr.js'></script>
    <script type='text/javascript' src='js/owl.carousel.js'></script>
    <script type='text/javascript' src='js/TweenMax.min.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox.js'></script>
    <!-- <script type='text/javascript' src='js/select2.min.js'></script> -->
    <script type='text/javascript' src='js/wow.min.js'></script>
    <script type='text/javascript' src='js/jquery.validate.min.js'></script>
    <!-- <script type='text/javascript' src="js/jquery.form.min.js"></script> -->
    
    <script type='text/javascript' src="js/jquery.tweet.js"></script>

    <script type="text/javascript" src="js/participa.js"></script>
    <script type="text/javascript" src="js/validaciones.js"></script>
    <script type="text/javascript" src="js/users_summary.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function()
        {
          llenar_nube();
          cargar_fecha();
          
      });
    </script>
 <script type="text/javascript">
    // jQuery( function() {

    //     var date = new Date();
    //       var day = date.getDate();
           
    //       var month = ((date.getMonth() + 1) < 10 ? '0' : '') + (date.getMonth() + 1);
          
    //       var year = date.getFullYear();

    //       var div='';

    //       fecha_fomateada= (year + '-' + month + '-' + day);
    //   let fecha1 = new Date('2020-06-18');
    //   let fecha2 = new Date(fecha_fomateada);

    //   let resta = fecha2.getTime() - fecha1.getTime();
      
    //   var minDat= Math.round(resta/ (1000*60*60*24));
    //   console.log(Math.round(resta/ (1000*60*60*24)))
    //   console.log('-'+minDat+'D');

    //   jQuery( "#select_fecha" ).val(fecha_fomateada);
    //   jQuery( "#select_fecha" ).datepicker(
    //   { 
    //     monthNames: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],

    //     dayNamesMin: [ "D", "L", "M", "M", "J", "V", "S" ],
    //     dateFormat: "yy-mm-dd",
    //     currentText: "Now",
    //     constrainInput: false,
    //     defaultDate: +7,
    //     buttonText: "Choose",
    //     autoSize: true,
    //     minDate: '-'+minDat+'D',
    //     maxDate: '+0D',
    //   }
    //   );
    // } );
  </script>

    <script type='text/javascript' src='js/scripts.js'></script>

</body>

</html>

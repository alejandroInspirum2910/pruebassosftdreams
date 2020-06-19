<?php
session_start();

if(!isset( $_SESSION['uuid']))
{
    header('Location: '.'index.php');

}

?>
<!DOCTYPE html>
<html lang="en-US">

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
    
    <title>Perfil SoftDreams</title>

    <link rel='stylesheet' href='css/perfil.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/botones.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/general.css' type='text/css' media='all' />
    
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
    
    <link rel='stylesheet' href='css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/main-home.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/shop.css' type='text/css' media='all' />

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    
    
    <link rel="icon" href="img/icon.ico" sizes="32x32" />
    <link rel="icon" href="img/icon.ico" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/icon.ico">
    <meta name="msapplication-TileImage" content="img/icon.ico">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
                                        <li class="menu menu-item bees-start" >
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
                                        <li class="menu menu-item left">
                                            <a href="perfil.php" >Mi perfil
                                                <div class="canvas_wrapper" >
                                                    <canvas class="menu_dashed">
                                                        
                                                    </canvas>
                                                </div>
                                            </a>
                                            
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
                                    <a href="participa.php" class="cws_button small boton-uno1" >OBTENER NUBES</a>
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
        <div id="main" class="site-main">
            <div class="page_content">
                <!-- pattern conatainer / -->
                <div class='left-pattern pattern pattern-6'>
                    
                </div>
                <main>
                    <div class='grid_row ' style='padding-top: 0px;'>
                        <div class="grid_col grid_col_6">
                            <h5 class="titulo">Perfil</h5>
                            
                        </div>
                        <div class="grid_col grid_col_6 cerrar_s" style="">

                            <a href="php/logout.php"><h5 class="titulo2">Cerrar sesión</h5></a>
                            
                        </div>

                        <div class=" row col-12 linea">
                            <div class="grid_col grid_col_12">
                                <div>
                                            <hr class="hr-linea">
                                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- section -->

                    <div class='grid_row clearfix' style='padding-top: 0px;'>
                        <div class='grid_col col-12  col-sm-12 col-md-6 col-lg-6 '>
                            <!-- about us -->
                            <div class='ce clearfix'>
                                <div>
                                    <div id="mi_perfil">
                                    <div id="perfil_error"></div>
                                    <p class="sub-titulos">Modificar mi Información</p>
                                    <p class="p">Modifica la información con la que te identificas</p>
                                    <div class="form-group">
                                        <label for="editar_nombre" class="label">Nuevo nombre</label>
                                        <input type="text" class="form-control input" id="editar_nombre" aria-describedby="nombre_help" placeholder="Paulina Gutiérrez" onkeyup ="validar_nombre_perfil('editar_nombre')" >
                                        <small id="nombre_help" class="alerta-texto2">En el sitio aparecerás como <strong id="nombre_1"></strong> .</small>
                                        <div class="" id="erreditar_nombre"> </div>
                                    </div>
                                    <div class="form-group boton-magin">
                                       <button class="cws_button small boton-uno" id="btn_editar_perfil_nombre">
                                        ACTUALIZAR
                                    </button> 
                                    </div>
                                    

                                    <p class="p">Modifica tu correo electrónico. (Ningún otro usuario conocerá tu dirección de correo)</p>
                                    <div class="form-group">
                                        <label for="editar_correo" class="label">Nueva dirección de Correo</label>
                                        <input type="text" class="form-control input" id="editar_correo" aria-describedby="correo_help" placeholder="paulina.gtz@gmail.com" onkeyup="validar_correo_perfil('editar_correo');" >
                                        <div class="" id="erreditar_correo"> </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="edidar_correo_verificar" class="label">Verificar Dirección</label>
                                        <input type="text" class="form-control input" id="edidar_correo_verificar" aria-describedby="correo_help" placeholder="paulina.gtz@gmail.com" onkeyup="validar_correo_perfil('edidar_correo_verificar');" >
                                        <div class="" id="erredidar_correo_verificar"> </div>
                                    </div>

                                    <div class="form-group boton-magin">
                                        <button class="cws_button small boton-uno" id="btn_editar_perfil_correo">
                                        ACTUALIZAR
                                    </button>
                                    </div>
                                    

                                    <p class="p">Actualiza tu contraseña. (Debe tener al menos 6 caracteres. Es sensible a mayúsculas)</p>
                                    <div class="form-group">
                                        <label for="editar_password" class="label">Nueva contraseña</label>
                                        <input type="password" class="form-control input" id="editar_password" aria-describedby="password_help" placeholder="****" onkeyup="validar_password_perfil('editar_password');">
                                        <div class="" id="erreditar_password"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="edidar_password_verificar" class="label">Verificar Contraseña</label>
                                        <input type="password" class="form-control input" id="edidar_password_verificar" aria-describedby="password_help1" placeholder="****" onkeyup="validar_password_perfil('edidar_password_verificar');">
                                        <div class="" id="erredidar_password_verificar"> </div>
                                    </div>
                                    <div class="form-group boton-magin">
                                        <button class="cws_button small boton-uno" id="btn_editar_perfil_password">
                                        ACTUALIZAR
                                    </button>
                                    </div>
                                    </div>

                                    <div id="eliminar_cuenta">
                                    <div class="row">
                                        <p class="sub-titulos">Eliminar mi Cuenta</p>

                                        <p class="alerta-texto"><strong>Atención:</strong> Tu información será eliminada inmediatamente y no podrás recuperarla.</p>
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <button class="cws_button small boton-dos" id="btn_modal_elimnar_perfil">ELIMINAR
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                <div>

                                </div>

                            </div>
                            <!-- / about us -->
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
        <div class='right-pattern pattern pattern-6'></div>
        <!-- #main -->
        <!-- footer -->
        <div class='footer_wrapper_copyright'>
            <!-- canvas -->
            <div class='half_sin_wrapper'>
                <canvas class='half_sin' data-bg-color='23,108,129' data-line-color='23,108,129'></canvas>
            </div>
            <!-- / canvas -->
            
            <!-- copyright -->
            <div class='copyrights_area alt' style="background-color: #35A89F !important; position: unset !important;">
                <!-- canvas -->
                <div class='half_sin_wrapper'>
                    <canvas class='footer_half_sin' data-bg-color='14,64,77' data-line-color='14,64,77'></canvas>
                </div>
                <!-- / canvas -->
                <div class='container'>
                    <div class='copyrights_container'>
                        <div class="post_info_header centrar">

                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 centrar">
                                    <h3 class="ce_title3  boreder "><a href="https://softdreams.blob.core.windows.net/legal/Te%CC%81rminos%20y%20Condiciones.pdf#toolbar=0" target="_blank" class="terminos-y-condicion">Términos y Condiciones </a></h3>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 centrar">
                                    <h3 class="ce_title3  boreder " style=""><a href="https://softdreams.blob.core.windows.net/legal/Aviso%20de%20Privacidad.pdf#toolbar=0" target="_blank" class="terminos-y-condicion">Aviso de Privacidad</a>
                                </h3>
                                </div>


                            
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- / copyright -->
        </div>
    </div>
    <!-- #page -->
    <div class='scroll_top animated'></div>

    <div class="modal" tabindex="-1" role="dialog" id="modal_eliminar_cuenta">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="registrate-tyc boreder sub-titulos">Eliminar Perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="err_modal"></div>
                    <form>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check_eliminar_cuenta">
                                
                                    <small class="alerta-texto">Aceptar eliminar tu perfil, al eliminar tu perfil no podrás tener acceso más al sitio.</small>
                                
                            </div>
                        </div>
                    </form>
                    <div class="form-group text-center">
                        <button type="button" class="cws_button small boton-dos" id="btn_eliminar_perfil">ELIMINAR PERFIL</button>
                        
                    </div>

                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>

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
    <script type='text/javascript' src='js/select2.min.js'></script>
    <script type='text/javascript' src='js/wow.min.js'></script>
    <script type='text/javascript' src='js/jquery.validate.min.js'></script>
    <script type='text/javascript' src="js/jquery.form.min.js"></script>
    <script type='text/javascript' src='js/scripts.js'></script>
    <script type='text/javascript' src="js/jquery.tweet.js"></script>

    <script type='text/javascript' src="js/validaciones.js"></script>
    <script type='text/javascript' src="js/perfil.js"></script>
    <script type="text/javascript" src="js/users_summary.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function(){
  
  resumen_usuario_perfil();
  
});
</script>
</body>

</html>

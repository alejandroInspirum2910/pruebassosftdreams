<?php
    session_start();

    if (isset($_POST['userID'])) {
        $_SESSION['userID'] = $_POST['userID'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['accessToken'] = $_POST['accessToken'];

        exit("success");
    }
?>
<!DOCTYPE html>
<html>

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
    <title>Pruebas Soft Dreams</title>
    <link rel='stylesheet' href='revslider/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />

    <link rel='stylesheet' href='css/index.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/general.css' type='text/css' media='all' />
    
    <link rel='stylesheet' href='css/select2.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/shop.css' type='text/css' media='all' />
     <link rel='stylesheet' href='css/captcha.css' type='text/css' media='all' />
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='revslider/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='revslider/js/jquery.themepunch.revolution.min.js'></script>
    
    <script src="https://www.google.com/recaptcha/api.js"></script>

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
            <div class='container'>
                
              
                
            </div>
        </div>
        <!-- / top panel -->
        <!-- slider and menu container -->
        <div class='slider_vs_menu index-slidermin-heigh fondo3'>
            <div class='header_cont '>
                <div class='header_mask'>
                    <div class='header_pattern'></div>
                </div>
                <header class='site_header logo-in-menu' data-menu-after="3" style="display: none;">
                    <div class="header_box">
                        <div class="container">
                            <!-- logo -->
                            <div class="header_logo_part" role="banner">
                                <a class="logo" href="index.html">
                                    <img src='img/logo1.png' data-at2x='img/logo1-304vqrnv7ccxz47xp4tw5m@2x.png' alt /></a>
                            </div>
                            <!-- / logo -->
                            <!-- menu -->
                            <div class="header_nav_part" >
                                <nav class="main-nav-container a-right">
                                    <div class="mobile_menu_header">
                                        <i class="mobile_menu_switcher" style="display: none;"><span></span><span></span><span></span></i>
                                    </div>
                                   
                                </nav>
                            </div>
                            <!-- / menu -->
                        </div>
                    </div>
                </header>
                <!-- #masthead -->
            </div>
            <div class="container-fluid fondo3">
                <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 logo-idex centrar">
                    <div class="img-index">
                        <img src="img/logo1.png">
                    </div>
                    
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                        <div class=" index-slidermin-heigh font" style="">
                        <main>
                        <div class="cws-widget">
                            <div class="woocommerce">
                                <div class="col1-set" id="customer_login">
                                    <!-- login section -->
                                    <div class="col-12 centrar">
                                        
                                        <h2 class="color-blanco index-ingresar">Ingresa</h2>
                                        <form method="post" class="login index-bacgroud-login centrar">
                                            <div id="err_login"></div>
                                            <p class="form-row form-row-wide  grid_col_6">
                                                <label for="txt_correo_inicar_sesion" class="label1">Correo <span class="required">*</span></label>
                                                <input type="text" class="input-text" name="txt_correo_inicar_sesion" id="txt_correo_inicar_sesion" onkeyup="validar_nombre('txt_correo_inicar_sesion');">
                                                <small id="errtxt_correo_inicar_sesion"> </small>
                                            </p>
                                            
                                            
                                            <p class="form-row form-row-wide  grid_col_6">
                                                <label for="txt_password_iniciar_sesion" class="label1 ">Contraseña <span class="required">*</span></label>
                                                <input class="input-text" type="password" name="txt_password_iniciar_sesion" id="txt_password_iniciar_sesion" onkeyup="validar_nombre('txt_password_iniciar_sesion');">
                                                <small id="errtxt_password_iniciar_sesion"> </small>
                                            </p>
                                            
                                            
                                            
                                            <div class="grid_col grid_col_12 boreder">
                                                <p class="form-row grid_col grid_col_12">
                                                <a href="#" id="btn_recuperar_modal" class="a">¿Olvidaste tu contraseña?</a>
                                            </p>
                                            <p class=" grid_col grid_col_12 centrar">

                                                
                                                <a href="#" class="button botones" id="btn_iniciar_sesion" >INICIA SESIÓN</a>
                                                <a href="#" class="button botom-facebook botones" data-bg_hover_color="#aa00ff" id="btn_iniciar_sesion_facebook"><span class="fa fa-facebook-official" ></span> CONTINUAR CON FACEBOOK
                                                </a>
                                            </p>

                                            <p class=" grid_col_12 centrar" style="font-family: VAG Rounded Black SSi Bold; color: rgb(30, 133, 123);">                                           
                                                ¿Aún no te has registrado?
                                                
                                            </p>
                                            </div>

                                           <div class="form-row grid_col grid_col_12 centrar">                                                                                        
                                            
                                                <p class="lost_password grid_col grid_col_12 ">
                                               
                                               <a href="#"  class="button fondo2 botones" id="registro_usuario" >REGÍSTRATE AQUÍ</a>

                                            </p>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- login section -->
                                   
                                </div>
                            </div>
                        </div>
                    </main>

                    </div>
                    </div>

            </div><!-- END roW -->
            
            <!-- END REVOLUTION SLIDER -->
           </div> 
        </div>
        <!-- / slider and menu container -->
        <div class='benefits_area wave' style="">
            <div class="row centrar">
                <div class="haz-realidad-tus-su">
                ¡Haz realidad tus sueños!
            </div>
            </div>
            
            
            <!-- canvas -->
            <div class='cloud_wrapper' >

                <canvas class='cloud'  data-bg-color='rgb(54,131,122)' data-line-color='#ffffff' data-pattern-src=''></canvas>
                
            </div>
            <!-- / canvas -->
            <div class='container' style="background: rgb(54,131,122) !important;">
                <!-- benefits container -->

                <div class='benefits_container'>
                    <!-- benefits item -->
                    <div class="cws-widget nubes2 ">
                        <div class="widget-title boreder">
                            <div class='widget_title_box boreder'>
                                <div class='widget_title_icon_section'>
                                    <img width="110" height="100" src='img/tarjetacodigo1.png' data-at2x='' alt />
                                </div>
                                <div class='widget_title_text_section texto3' style="">Certificado de Regalo
                                </div>
                            </div>
                        </div>
                        

                    </div>
                    <!-- / benefits item -->
                    <!-- benefits item -->
                    <div class="cws-widget nubes2">
                        <div class="widget-title boreder">
                            <div class='widget_title_box boreder'>
                                
                                <div class='widget_title_text_section'>Tu Sueño</div>
                            </div>
                        </div>
                        
                        <div class="widget-title ">
                            <div class='widget_title_box '>
                                
                                <div class='widget_title_text_section texto3' style="">Lo que quieras de hasta $100,000 Pesos</div>
                            </div>
                        </div>
                    </div>
                    <!-- / benefits item -->
                    <!-- benefits item -->
                    <div class="cws-widget nubes2">
                        
                        
                        <div class='cws_textwidget_content boreder'>
                            <div class="cws_fa_wrapper round"><img width="100" height="100" src="img/p1.png" class="" alt="" style=""></div>
                        </div>

                        <div class="widget-title boreder">
                            <div class='widget_title_box boreder'>
                                
                                <div class='widget_title_text_section texto3' >Dotaciones Anuales</div>
                            </div>
                        </div>
                    </div>
                    <!-- / benefits item -->
                </div>
                <!-- / benefits container -->
            </div>
        </div>
        <!-- canvas -->
        <div class="cloud_wrapper">
            <canvas class="white_cloud"></canvas>
        </div>
        <!-- / canvas -->

        <!-- main container -->
        <div id="main" class="site-main">
            <div class="page_content">
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
                    <!-- / heading section -->
                    <!-- section -->
                    <div class='grid_row clearfix' style='padding-top: 30px;'>
                        <div class='grid_col grid_col_8'>
                            <!-- about us -->
                            <div class='ce clearfix'>
                                <div>
                                    
                                    <p class="texto2 justificar">
                                        Por cada <strong>$180.00 pesos</strong> de compra en productos Soft Dreams, participa para ganar premios diarios, semanales, premios por categorías especiales y la oportunidad de ganar el  <strong>premio final con valor de $100,000 pesos</strong> . 

                                    </p>
                                    
                                
                                </div>
                            </div>
                            <!-- / about us -->
                        </div>
                        <div class='grid_col grid_col_4 centrar'>
                            <div class='ce clearfix'>
                                <div><img class="noborder alignnone image-type size-full" src="img/participa.jpg" width="385" height="373" /></div>
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
                    <!-- section -->
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_4'>
                            <div class='ce clearfix'>

                                <div class="centrar">
                                    <img class=" image-type size-full imagen-circulo" src="img/1.jpg" width="385" height="373" />
                                </div>

                                <div>
                                    <div class='cws_fa_tbl'>

                                        <div class='cws_fa_tbl_row' >
                                            
                                            <div class='cws_fa_tbl_cell centrar'>
                                                <h2 class="font1 subtitulo">Premios Diarios</h2>
                                            </div>
                                        </div>
                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <p class="justificar texto1"><br><strong>Diseña&nbsp; una&nbsp; foto&nbsp; creativa&nbsp; con</strong> Soft Dreams y compártela. Tu foto participará todos los días de la vigencia a partir de la fecha en que fue compartida. Premiaremos la fotografía más creativa cada día de la Promoción.
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
                                            
                                            <div class='cws_fa_tbl_cell centrar'>
                                                <h2 class="font1 subtitulo">Premios Semanales</h2>
                                            </div>
                                        </div>
                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <p class="justificar texto1"><br>La Promoción estará vigente durante 10 semanas. Al final de cada semana, se premiará la foto más creativa. Participarán todas las fotos compartidas hasta ese momento.</p>
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
                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell centrar' >
                                                <h2 class="font1 subtitulo">Categorías Especiales</h2></div>
                                        </div>


                                        <div class='cws_fa_tbl_row'>
                                            
                                            <div class='cws_fa_tbl_cell'>
                                                <p class="justificar texto1"><br><strong>Diseña&nbsp; una&nbsp; foto&nbsp; creativa&nbsp; con</strong> Soft Dreams haciendo alusión a la categoría especial en la que elijas participar. Sube la(s) fotos participantes a la plataforma para ganar. Al final de la Promoción se premiará las fotos más creativas de cada categoría especial. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- / section -->
                    <!-- divider -->
                    <div class='grid_row clearfix' style='padding-bottom: 50px;'>
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
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <h3 class="ce_title" style="text-align: center;">Premio Final <span ></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / heading section -->
                    <!-- section -->
                    <div class='grid_row clearfix' style='padding-top: 30px;'>
                        <div class='grid_col grid_col_8'>
                            <!-- about us -->
                            <div class='ce clearfix'>
                                <div>
                                   
                                    <p class="justificar texto1">Participarán para el premio final todas las fotografías compartidas en la plataforma en línea durante la vigencia establecida. La foto más creativa de toda la Promoción será acreedora al gran Premio. El ganador podrá elegir que le sea entregado su premio en especie y/o en dinero con un valor que no exceda de la cantidad establecida. </p>
                                    
                                    <!-- <a href='page-about-us.html' class='cws_button small'>More About Us</a> -->
                                </div>
                            </div>
                            <!-- / about us -->
                        </div>
                        <div class='grid_col grid_col_4'>
                            <div class='ce clearfix centrar'>
                                <div><img class="noborder alignnone image-type size-full" src="img/5.png" width="385" height="373" /></div>
                            </div>
                        </div>
                    </div>
                    <!-- / section -->
                    <!-- divider -->
                    
                    <!-- / divider -->


                    <!-- section -->
                    <!-- <div class='grid_row clearfix' style='padding-top: 0px;'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <h3 class="ce_title" style="text-align: center;">We are <span >Kiddy</span><br /> Children HTML Template</h3>
                                    <p style="text-align: center;">Libero commodo, ornare mi id, egestas metus.
                                        <br /> Vivamus condimentum elit vel vestibulum feugiat Aliquam
                                        <br /> semper nunc augue, vitae fringilla felis adipiscing ac.</p>
                                    <p style="text-align: center;"> <a href='#' class='cws_button customized' data-bg_hover_color='#fec20b' data-bg_color='#3eb2cf' data-text_color='#fff'>Purchase Now</a> <a href='#' class='cws_button'>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- / section -->
                    <!-- section gallery -->
                    
                    <!-- / gallery section -->
                    <!-- section -->
                    <!-- <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div class='cws_callout'>
                                    <div class='content_section'>
                                        <div class='callout_title'>
                                            <div class="bees bees-end"><span></span></div>STILL NOT CONVINCED?</div>
                                        <div class='separate'></div>
                                        <div class='callout_text'>
                                            <p>Want to get more information about our learning center or would like to see it inside, feel free to schedule&nbsp;a tour.
                                                <br /> Come visit us today!</p>
                                        </div>
                                    </div>
                                    <div class='button_section'><a href='#' class='cws_button xlarge'>Schedule a Tour Now<div class='button-shadow'></div></a></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- / section -->
                </main>
                <!-- pettaren container / -->
                <div class='right-pattern pattern pattern-6'></div>
                <!-- footer image container / -->
                
            </div>
            <!-- svg filter -->
            <svg xmlns="" version="1.1" width="0" style='display:none;'>
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <!-- / svg filter -->
        </div>
        <!-- #main -->
        
        <!-- footer -->
        <div class='footer_wrapper_copyright' style="background-color: rgb(54,131,122)  !important;">
            <!-- canvas -->
            <div class='half_sin_wrapper'>
                <canvas class='half_sin' data-bg-color='23,108,129' data-line-color='23,108,129'></canvas>
            </div>
            <!-- / canvas -->
            
            <!-- copyright -->
            <div class='copyrights_area' style="background-color: rgb(54,131,122)  !important; position: unset !important;">
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

    <div class="modal" tabindex="-1" role="dialog" id="modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="registrate-tyc boreder">Regístrate</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="limpiar_terminos();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="err_modal"></div>
                    <form>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                
                                    Confirmo que he <a>leído</a> y  acepto los
                                    <a href="#" class="a">Términos y Condiciones</a> y
                                    <a href="#" class="a">Aviso de Privacidad</a>.
                                
                            </div>
                        </div>
                    </form>
                    <div class="form-group text-center">
                        <button type="button" class="btn boton1-tyc" id="registro_correo">REGISTRARME CON MI CORREO</button>
                        
                    </div>

                    <div class="form-group text-center">
                        <button type="button" class="btn boton2-tyc" id="btn_preregistro_facebook">
                            <span class="fa fa-facebook-official"></span> 
                        CONTINUAR CON FACEBOOK</button>
                    </div>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="registrate-tyc boreder" id="exampleModalLabel">Regístrate
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="limpiar_registro();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <section id="captcha">
                        <!-- default form layout -->
                        <form class="captcha-from needs-validation" novalidate id="form_registro_usuario">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="nombre" class="label1">Nombre:</label>
                                    <input type="text" maxlength="250"  class="form-control" id="nombre"  required autocomplete="off" placeholder="" onkeyup ="validar_registro('nombre')">
                                    <div class="" id="errnombre"> </div>
                                    <small class="alerta-texto2">En el sitio aparecerás como <strong id="nombre_2"></strong></small>
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="label1 ">Correo:</label>
                                    <input type="email" maxlength="50"  class="form-control" id="email" required autocomplete="off" placeholder="" onkeyup ="validar_registro('email')">
                                    <div id="erremail"></div>

                                </div>
                                <div class="col-md-12">
                                    <label for="email1" class="label1 ">Confirmar Correo:</label>
                                    <input type="email1" maxlength="50"  class="form-control" id="email1" required autocomplete="off" placeholder="" onkeyup ="validar_registro('email1')">
                                    <div id="erremail1"></div>
                                    
                                </div>
                                <div class="col-md-12">
                                    <label for="pwd" class="label1 ">Contraseña:</label>
                                    <input type="password" minlength="5" class="form-control" id="pwd" required autocomplete="off" placeholder="" onkeyup ="validar_registro('pwd')">
                                    <div id="errpwd"></div>
                                </div>
                                <div class="col-md-12">
                                    <label for="cpwd" class="label1 ">Confirmar Contraseña:</label>
                                    <input type="password"  minlength="5"  class="form-control" id="cpwd" required autocomplete="off"  placeholder="" onkeyup ="validar_registro('cpwd')">
                                    <div id="errcpwd"></div>
                                </div>
                                <br>
                                <div class="col-md-12" style="padding-top: 8px;">
                                    <div class="g-recaptcha" data-sitekey="6Ldem6IZAAAAALuTjLPtwpBDRddJMSTqJbdPn8xx" data-callback="verifyCaptcha"></div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                            </div>
                            <!-- <div class="form-row">
                                <div class="container">

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="" class="label">Captcha</label>
                                            <div class="captcha-code  ">
                                                <div class="code">
                                                    <div class="dynamic-code"></div>
                                                </div>
                                                <div class="captcha-reload">
                                                    <i class="ion-ios-loop-strong"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-9 col-md-6 col-lg-6">
                                            <div class="captcha-input" style="margin-top: 2.8em !important">
                                                <input type="text" class="form-control" id="captcha_input"  required autocomplete="off"  placeholder="Enter captcha code ...">
                                                <span id="errcaptcha_input" onkeyup ="validar_registro('captcha_input')"></span>
                                            </div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-6 col-lg-6">
                                            <a href="#" class="btn btn-info btn-sm" onclick="cargarcaptcha();" style="margin-top: 2.8em !important">
                                                <span class="fa fa-refresh"></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                            
                        </form>
                    </section><!-- #/main -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_cloce" onclick="limpiar_registro();">CERRAR</button>
                    <button type="button" class="btn btn-info" id="btn_registro_usuario_preregistro">COMPLETAR REGISTRO</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_recuperar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="registrate-tyc boreder" id="exampleModalLabel">Recupera tu Contraseña
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="limpiar_password_recuperar();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section id="captcha">
                        <!-- default form layout -->
                        <form class="captcha-from needs-validation" novalidate id="form_registro_usuario">
                            <div class="form-row">
                                
                                <div class="col-md-12">
                                    <label for="recuperar_correo" class="label1 ">Correo Electrónico</label>
                                    <input type="recuperar_correo" maxlength="50"  class="form-control" id="recuperar_correo" required autocomplete="off" placeholder="" onkeyup="validar_recuperar_passw('recuperar_correo');">
                                    <p class="small2">En unos segundos recibirás un correo electrónico con un código de verificación. Si no lo ves, revisa tu bandeja de spam.</p>
                                    <div id="errrecuperar_correo"></div>
                                </div>
                            
                                <div class="col-md-12" style="margin-top: 15px">
                                    <button type="button" class="btn btn-info" id="btn_enviar_codigo">ENVIAR CÓDIGO</button>
                                </div>
                                <br>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 15px">
                                    <label for="codigo_verificacion" class="label1 ">Código de Verificación</label>
                                    <input type="text" name="codigo_verificacion" maxlength="50"  class="form-control" id="codigo_verificacion" required autocomplete="off" placeholder="" onkeyup="validar_recuperar_codigo('codigo_verificacion');">
                                    <div id="errcodigo_verificacion"></div>
                                    <div id="id_code"></div>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="recuperar_password" class="label1 ">Nueva Contraseña</label>
                                    <input type="password" minlength="5" class="form-control" id="recuperar_password" required autocomplete="off" placeholder="" onkeyup="validar_password('recuperar_password');">
                                    <div id="errrecuperar_password"></div>
                                </div>
                                <div class="col-md-12">
                                    <label for="recuperar_password1" class="label1 ">Repite tu Nueva Contraseña</label>
                                    <input type="password"  minlength="5"  class="form-control" id="recuperar_password1" required autocomplete="off"  placeholder="" onkeyup="validar_password('recuperar_password1');">
                                    <div id="errrecuperar_password1"></div>
                                </div>
                            </div>
                        </form>

                    </section><!-- #/main -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_cloce" onclick="limpiar_password_recuperar();">CERRAR</button>
                    <button type="button" class="btn btn-info" id="btn_recuperar_password">CONFIRMAR</button>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>

    <form action="php/start.php" id="formA" method="POST"></form>
    <script type='text/javascript' src='js/modernizr.js'></script>
   
    
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='js/select2.min.js'></script>
    <script type='text/javascript' src='js/wow.min.js'></script>
    <script type='text/javascript' src='js/jquery.validate.min.js'></script>
    
   <script src='https://www.google.com/recaptcha/api.js'></script>

    <script type='text/javascript' src='js/scripts.js'></script>
    <script type='text/javascript' src="js/jquery.tweet.js"></script>

    <script type='text/javascript' src="js/login.js"></script>
    <script type='text/javascript' src="js/captcha.js"></script>
    <script type='text/javascript' src="js/validaciones.js"></script>

    <script type="text/javascript">
       
             jQuery(function(){
    jQuery("div").removeClass("tp-fullwidth-forcer");
});
             jQuery(document).ready(function(){
                jQuery("div").removeClass("tp-fullwidth-forcer");
});
    </script>

    <script>
        var person = { userID: "", name: "", accessToken: "", email: ""};

        function logIn() {
            FB.login(function (response) {
                if (response.status == "connected") {
                    person.userID = response.authResponse.userID;
                    person.accessToken = response.authResponse.accessToken;

                    FB.api('/me?fields=id,name,email', function (userData) {
                        person.name = userData.name;
                        person.email = userData.email;
                        person.id = userData.id;

                        jQuery.ajax({
                           url: "index.php",
                           method: "POST",
                           data: person,
                           dataType: 'text',
                           success: function (serverResponse) {
                               console.log(person);
                               //console.log(person[]);
                               preregistro_facebook(person.id,person.email,person.name);
                               start_loading();
                               //if (serverResponse == "success")
                                   //window.location = "index.php";
                           }
                        });
                    });
                }
            }, {scope: 'public_profile, email'})
        }

        window.fbAsyncInit = function() {
            FB.init({
                //local host
                //appId            : '601315490733915',
                //Produccion
                //F Deve
                // appId            : '610348209898670',
                // F prod
                appId            : '264295127993238',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v2.11'
            });
        };

        function logIn1() {
            FB.login(function (response) {
                if (response.status == "connected") {
                    person.userID = response.authResponse.userID;
                    person.accessToken = response.authResponse.accessToken;

                    FB.api('/me?fields=id,name,email', function (userData) {
                        person.name = userData.name;
                        person.email = userData.email;
                        person.id = userData.id;

                        jQuery.ajax({
                           url: "index.php",
                           method: "POST",
                           data: person,
                           dataType: 'text',
                           success: function (serverResponse) {
                               console.log(person);
                               //console.log(person[]);
                               iniciar_sesion_facebook(person.id);
                               start_loading();
                               //if (serverResponse == "success")
                                   //window.location = "index.php";
                           }
                        });
                    });
                }
            }, {scope: 'public_profile, email'})
        }

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

  <script>
    function submitUserForm() 
    {
        var response = grecaptcha.getResponse();
        if(response.length == 0) 
        {
            document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
            return false;
        }
        return true;
    }

    function verifyCaptcha() 
    {
        document.getElementById('g-recaptcha-error').innerHTML = '';
    }
</script>
</body>

</html>

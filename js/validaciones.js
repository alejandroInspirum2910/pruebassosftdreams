//variable global
var err='#err';
function stop_loading()
{
	jQuery("#overlay").fadeOut(300);
}
function start_loading()
{
	jQuery("#overlay").fadeIn(300);　
}
//CLASE DE ERROR 
function error(campo)
{
	jQuery('#'+campo+'').html('<div class="cws_msg_box error-box clearfix">'+
		'<div class="icon_section"><i class="fa fa-exclamation"></i></div>'+
		'<div class="content_section">'+
		'<div class="msg_box_title">Error</div>'+
		'<div class="msg_box_text">Error al actualizar</div>'+
		'</div></div>'
		).show(200).delay(2500).hide(200);
}
//Inicio validacion inicio de secion
function limpiar_incio_sesion()
{
	jQuery(''+err+'txt_correo_inicar_sesion').html('');
	jQuery(''+err+'txt_password_iniciar_sesion').html('');
	jQuery('#'+'txt_correo_inicar_sesion').val('');
	jQuery('#'+'txt_password_iniciar_sesion').val('');
}
function verificar_preregistro()
{
    var v1=0;
    v1=validar_nombre('txt_correo_inicar_sesion');
    v2=validar_nombre('txt_password_iniciar_sesion');
    v2=validar_nombre('email');
    v2=validar_nombre('email1');

    if (v1===false || v2===false ) 
        {alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');return false;}
    else{return true;}
}

function validar_nombre(campo)
{

	if (campo==='txt_correo_inicar_sesion') 
	{
		txt_correo_inicar_sesion = document.getElementById(campo).value;
		if(txt_correo_inicar_sesion == null || txt_correo_inicar_sesion.length == 0 || /^\s+$/.test(txt_correo_inicar_sesion))
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback border1"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery('#txt_password_iniciar_sesion').html('<div class="invalid-feedback border1"><i class="ion-close"></i>. </div>');
			jQuery('#txt_password_iniciar_sesion .invalid-feedback ').css('display','block');
				jQuery(''+err+campo+' .invalid-feedback ').css('display','block');

			return false; 
			//jQuery(this).val('');
		}
		else 
		{
			if(!(/\S+@\S+\.\S+/.test(txt_correo_inicar_sesion)))
			{

				jQuery(''+err+campo+'').html('<div class="invalid-feedback border1"><i class="ion-close"></i> Formato de correo incorrecto!</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
				jQuery('#txt_password_iniciar_sesion  ').html('<div class="invalid-feedback border1"><i class="ion-close"></i>. </div>');
			jQuery('#txt_password_iniciar_sesion .invalid-feedback ').css('display','block');
				return false; 
			}
			else 
			{
				jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
				return true; 
			}
		}
	}

	if (campo==='txt_password_iniciar_sesion')
	{
		txt_password_iniciar_sesion = document.getElementById(campo).value;
		if( txt_password_iniciar_sesion == null || txt_password_iniciar_sesion.length == 0 || /^\s+$/.test(txt_password_iniciar_sesion) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback border1"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback ').css('display','block');

			jQuery('#txt_correo_inicar_sesion').html('<div class="invalid-feedback border1"><i class="ion-close"></i> .</div>');
			jQuery('#txt_correo_inicar_sesion .invalid-feedback').css('display','block');
			return false; 
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}

}
//termino inicio de sesion

//FORM PERFILES
function limpiar_nombre_perfil()
{
	jQuery(''+err+'editar_nombre').html('');
	jQuery('#'+'editar_nombre').val('');
}
function verificar_nombre_perfil()
{
    var v1=0;
    v1=validar_nombre_perfil('editar_nombre');
    if (v1===false ) 
    	{
    		alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');
    		return false;
    	}
    else{return true;}
}

function validar_nombre_perfil(campo)
{
	var texto=jQuery('#editar_nombre').val();
	primera = texto.split(' ')[0];
	jQuery('#nombre_1').text(primera);
	if (campo==='editar_nombre')
	{
		editar_nombre = document.getElementById(campo).value;
		if( editar_nombre == null || editar_nombre.length == 0 || /^\s+$/.test(editar_nombre) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}

}

//VALIDAR PERFIL CORREOS
function limpiar_correo_perfil()
{
	jQuery(''+err+'editar_correo').html('');
	jQuery(''+err+'edidar_correo_verificar').html('');
	jQuery('#'+'editar_correo').val('');
	jQuery('#'+'edidar_correo_verificar').val('');
}
function verificar_correo_perfil()
{
    var correo_perfil=jQuery('#editar_correo').val();
	var correo_perfil1=jQuery('#edidar_correo_verificar').val();
    v1=validar_correo_perfil('editar_correo');
    v2=validar_correo_perfil('edidar_correo_verificar');
    if (v1===false || v2===false) 
    {
    	alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');
    	return false;
    }
    else if (correo_perfil!=correo_perfil1) 
    {
    	alert('Los correos proporcionados no coinciden');
    	return false;
    }

    else
    {
    	return true;
    }
}

function validar_correo_perfil(campo)
{
	if (campo==='editar_correo') 
	{
		editar_correo = document.getElementById(campo).value;
		if(editar_correo == null || editar_correo.length == 0 || /^\s+$/.test(editar_correo))
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
			//jQuery(this).val('');
		}
		else 
		{
			if(!(/\S+@\S+\.\S+/.test(editar_correo)))
			{

				jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Formato de correo incorrecto!</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
				return false; 
			}
			else 
			{
				jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
				return true; 
			}
		}
	}

	if (campo==='edidar_correo_verificar') 
	{
		edidar_correo_verificar = document.getElementById(campo).value;
		if(edidar_correo_verificar == null || edidar_correo_verificar.length == 0 || /^\s+$/.test(edidar_correo_verificar))
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
			//jQuery(this).val('');
		}
		else 
		{
			if(!(/\S+@\S+\.\S+/.test(edidar_correo_verificar)))
			{

				jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Formato de correo incorrecto!</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
				return false; 
			}
			else 
			{
				jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
				return true; 
			}
		}
	}
}

//VALIDAR CONTRASEÑA PERFILES
function limpiar_password_perfil()
{
	jQuery(''+err+'editar_password').html('');
	jQuery(''+err+'edidar_password_verificar').html('');
	jQuery('#'+'editar_password').val('');
	jQuery('#'+'edidar_password_verificar').val('');
}
function verificar_password_perfil()
{
    var password_perfil=jQuery('#editar_password').val();
	var password_perfil1=jQuery('#edidar_password_verificar').val();
    v1=validar_password_perfil('editar_password');
    v2=validar_password_perfil('edidar_password_verificar');
    if (v1===false || v2===false) 
    {
    	alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');
    	return false;
    }
    else if (password_perfil!=password_perfil1) 
    {
    	alert('Las contraseñas proporcionados no coinciden');
    	return false;
    }

    else
    {
    	return true;
    }
}

function validar_password_perfil(campo)
{
	if (campo==='editar_password')
	{
		editar_password = document.getElementById(campo).value;
		if( editar_password == null || editar_password.length == 0 || /^\s+$/.test(editar_password) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		else if (editar_password.length<6) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Tu contraseña debe de tener minimo 6 caracteres.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false;
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}

	if (campo==='edidar_password_verificar')
	{
		edidar_password_verificar = document.getElementById(campo).value;
		if( edidar_password_verificar == null || edidar_password_verificar.length == 0 || /^\s+$/.test(edidar_password_verificar) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}

		else if (edidar_password_verificar.length<6) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Tu contraseña debe de tener minimo 6 caracteres.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false;
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}
}

//VALIDAR OBTENER NUBES
function limpiar_participacion()
{
	jQuery(''+err+'select_cadena').html('');
	jQuery(''+err+'monto_compra').html('');
	jQuery(''+err+'select_fecha').html('');
	jQuery(''+err+'numero_ticket').html('');
	jQuery('#'+'select_cadena').val('');
	jQuery('#'+'monto_compra').val('');
	jQuery('#'+'select_fecha').val('');
	jQuery('#'+'numero_ticket').val('');
}
function verificar_participacion()
{
    v1=validar_participacion('select_cadena');
    v2=validar_participacion('monto_compra');
    v3=validar_participacion('select_fecha');
    v4=validar_participacion('numero_ticket');
    if (v1===false || v2===false || v3===false || v4===false) 
    {
    	alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');
    	return false;
    }

    else
    {
    	return true;
    }
}

function validar_participacion(campo)
{

	if (campo==='select_cadena')
	{
		select_cadena = document.getElementById(campo).value;
		if( select_cadena == null || select_cadena.length == 0 || /^\s+$/.test(select_cadena) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}
	if (campo==='numero_ticket')
	{
		numero_ticket = document.getElementById(campo).value;
		if( numero_ticket == null || numero_ticket.length == 0 || /^\s+$/.test(numero_ticket) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		else
		{
				jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
				jQuery(''+err+campo+' .valid-feedback').css('display','none');
				return true; 
			
			
		}
	}
	if (campo==='monto_compra')
	{
		monto_compra = document.getElementById(campo).value;
		if( monto_compra == null || monto_compra.length == 0 || /^\s+$/.test(monto_compra) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		else if (monto_compra<180) 
			{
				jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> El monto minimo es: $180.00.</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
				return false; 
			}
		else
		{
				jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
				jQuery(''+err+campo+' .valid-feedback').css('display','none');
				return true; 
			
			
		}
	}
	if (campo==='select_fecha')
	{
		select_fecha = document.getElementById(campo).value;
		if( select_fecha == null || select_fecha.length == 0 || /^\s+$/.test(select_fecha) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}

	if (campo==='file_participar')
	{
		file_participar = document.getElementById(campo).value;
		if( file_participar == null || file_participar.length == 0 || /^\s+$/.test(file_participar) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}
}

//VALIDAR CORREO PARA RECUPERAR CONTRASEÑA

function limpiar_recuperar_passw()
{
	jQuery(''+err+'recuperar_correo').html('');
	
	jQuery('#'+'recuperar_correo').val('');
	
}
function verificar_recuperar_passw()
{
    v1=validar_recuperar_passw('recuperar_correo');
    
    if (v1===false) 
    {
    	alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');
    	return false;
    }

    else
    {
    	return true;
    }
}

function validar_recuperar_passw(campo)
{
	if (campo==='recuperar_correo') 
	{
		recuperar_correo = document.getElementById(campo).value;
		if(recuperar_correo == null || recuperar_correo.length == 0 || /^\s+$/.test(recuperar_correo))
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
			//jQuery(this).val('');
		}
		else 
		{
			if(!(/\S+@\S+\.\S+/.test(recuperar_correo)))
			{

				jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Formato de correo incorrecto!</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
				return false; 
			}
			else 
			{
				jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
				return true; 
			}
		}
	}
}



//VALIDAR CORREO PARA RECUPERAR CONTRASEÑA

//VALIDAR CONTRASEÑAS
function limpiar_password_recuperar()
{
	limpiar_recuperar_passw();
	jQuery(''+err+'recuperar_password').html('');
	jQuery(''+err+'recuperar_password1').html('');
	jQuery(''+err+'codigo_verificacion').html('');
	jQuery('#'+'recuperar_password').val('');
	jQuery('#'+'recuperar_password1').val('');
	jQuery('#'+'codigo_verificacion').val('');
}
function verificar_password_recuperar()
{
    var password_perfil=jQuery('#recuperar_password').val();
	var password_perfil1=jQuery('#recuperar_password1').val();
    v1=validar_password('recuperar_password');
    v2=validar_password('recuperar_password1');
    v3=validar_recuperar_codigo('codigo_verificacion');
    if (v1===false || v2===false || v3===false) 
    {
    	alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');
    	return false;
    }
    else if (password_perfil!=password_perfil1) 
    {
    	alert('Las contraseñas proporcionados no coinciden');
    	return false;
    }

    else
    {
    	return true;
    }
}

function validar_password(campo)
{
	if (campo==='recuperar_password')
	{
		recuperar_password = document.getElementById(campo).value;
		if( recuperar_password == null || recuperar_password.length == 0 || /^\s+$/.test(recuperar_password) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		else if (recuperar_password.length<6) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Tu contraseña debe de tener minimo 6 caracteres.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false;
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i>Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}
	if (campo==='recuperar_password1')
	{
		recuperar_password1 = document.getElementById(campo).value;
		if( recuperar_password1 == null || recuperar_password1.length == 0 || /^\s+$/.test(recuperar_password1) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		else if (recuperar_password1.length<6) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Tu contraseña debe de tener minimo 6 caracteres.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false;
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i>Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}
}

function validar_recuperar_codigo(campo)
{
	if (campo==='codigo_verificacion')
	{
		codigo_verificacion = document.getElementById(campo).value;
		if( codigo_verificacion == null || codigo_verificacion.length == 0 || /^\s+$/.test(codigo_verificacion) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}
}

//VALIDAR REGISTRO DE USUARIO
function limpiar_terminos()
{
	jQuery('#'+'gridCheck').prop("checked", false);
}
function limpiar_registro()
{
	jQuery(''+err+'nombre').html('');
	jQuery(''+err+'email').html('');
	jQuery(''+err+'email1').html('');
	jQuery(''+err+'pwd').html('');
	jQuery(''+err+'cpwd').html('');
	jQuery(''+err+'captcha_input').html('');
	jQuery('#'+'nombre').val('');
	jQuery('#'+'email').val('');
	jQuery('#'+'email1').val('');
	jQuery('#'+'pwd').val('');
	jQuery('#'+'cpwd').val('');
	jQuery('#'+'captcha_input').val('');
	jQuery('#nombre_2').text('');
}
function verificar_registro()
{
    var password=jQuery('#pwd').val();
	var password1=jQuery('#cpwd').val();
	var correo=jQuery('#email').val();
	var correo1=jQuery('#email1').val();
    v1=validar_registro('nombre');
    v2=validar_registro('email');
    v3=validar_registro('email1');
    v4=validar_registro('pwd');
    v5=validar_registro('cpwd');
    v6=validar_registro('captcha_input');
    if (v1===false || v2===false || v3===false|| v4===false || v5===false || v6===false) 
    {
    	alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');
    	return false;
    }
    else if (correo!=correo1) 
    {
    	alert('Los correos proporcionados no coinciden');
    	return false;
    }
    else if (password!=password1) 
    {
    	alert('Las contraseñas proporcionados no coinciden');
    	return false;
    }

    else
    {
    	return true;
    }
}

function validar_registro(campo)
{
	var texto=jQuery('#nombre').val();
	primera = texto.split(' ')[0];
	jQuery('#nombre_2').text(primera);
	if (campo==='pwd')
	{
		pwd = document.getElementById(campo).value;
		if( pwd == null || pwd.length == 0 || /^\s+$/.test(pwd) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		else if (pwd.length<6) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Tu contraseña debe de tener minimo 6 caracteres.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false;
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i>Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}
	if (campo==='cpwd')
	{
		cpwd = document.getElementById(campo).value;
		if( cpwd == null || cpwd.length == 0 || /^\s+$/.test(cpwd) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		else if (cpwd.length<6) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Tu contraseña debe de tener minimo 6 caracteres.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false;
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i>Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}
	if (campo==='nombre')
	{
		nombre = document.getElementById(campo).value;
		if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) 
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
			jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
		}
		
		else
		{
			jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
			return true; 
		}
	}

	if (campo==='email') 
	{
		email = document.getElementById(campo).value;
		if(email == null || email.length == 0 || /^\s+$/.test(email))
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
			//jQuery(this).val('');
		}
		else 
		{
			if(!(/\S+@\S+\.\S+/.test(email)))
			{

				jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Formato de correo incorrecto!</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
				return false; 
			}
			else 
			{
				jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
				return true; 
			}
		}
	}
	if (campo==='email1') 
	{
		email1 = document.getElementById(campo).value;
		if(email1 == null || email1.length == 0 || /^\s+$/.test(email1))
		{
			jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
			return false; 
			//jQuery(this).val('');
		}
		else 
		{
			if(!(/\S+@\S+\.\S+/.test(email1)))
			{

				jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Formato de correo incorrecto!</div>');
				jQuery(''+err+campo+' .invalid-feedback').css('display','block');
				return false; 
			}
			else 
			{
				jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
			jQuery(''+err+campo+' .valid-feedback').css('display','none');
				return true; 
			}
		}
	}

	// if (campo==='captcha_input')
	// {
	// 	captcha_input = document.getElementById(campo).value;
	// 	if( captcha_input == null || captcha_input.length == 0 || /^\s+$/.test(captcha_input) ) 
	// 	{
	// 		jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
	// 		jQuery(''+err+campo+' .invalid-feedback').css('display','block');
	// 		return false; 
	// 	}
		
	// 	else
	// 	{
	// 		jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
	// 		jQuery(''+err+campo+' .valid-feedback').css('display','none');
	// 		return true; 
	// 	}
	// }
}
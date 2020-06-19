jQuery('#registro_correo').on('click',function(){
	
	
	 var condiciones = jQuery("#gridCheck").is(":checked");
	if (condiciones) 
	{
		jQuery('#modal_1').modal('toggle'); 
		//cargarcaptcha();
		limpiar_terminos();
		jQuery('#form_registro_usuario')[0].reset();
		jQuery('#modal_registro').modal({
			show:true,
			backdrop:'static'
		});
	}
	else
	{
		jQuery('#err_modal').html('<div class="alert alert-danger" role="alert">Para continuar debes aceptar los terminos y condiciones, asi como el aviso de privacidad.</div>').show(200).delay(2500).hide(200);
	}
});

jQuery('#registro_usuario').on('click',function()
{
        //
        
        jQuery('#modal_1').modal({
            show:true,
            backdrop:'static'
        });
    });

//abrir modal recuperar contraseña
jQuery('#btn_recuperar_modal').on('click',function()
{
	jQuery('#modal_recuperar').modal(
	{
		show:true,
		backdrop:'static'
	});
});

jQuery('#btn_registro_usuario_preregistro').on('click',function()
{
	if (verificar_registro()==true)
	{
		if (submitUserForm()==true) 
		{
			start_loading();
		var correo1= jQuery('#email').val();
		var password1= jQuery('#cpwd').val();
		jQuery.ajax({
			url: "php/usuarios/create_usuario.php",
			type: "POST",
			data: {
				"nombre": jQuery("#nombre").val(),
				"correo":  jQuery("#email").val(),
				"password": jQuery("#cpwd").val(),
				"login_method": 1,
				"facebook_id": "",
			}
		})
		.done(function(data, textStatus, jqXHR) {
			console.log("HTTP Request Succeeded: " + jqXHR.status);
			console.log(data);
			var obj = JSON.parse(data);
			if (obj['internal_code']== 0){
				iniciar_sesion_preregistro(correo1,password1);
				alert(obj['message']);
			}
			else{
				alert(obj['message']);
				stop_loading();
			}

		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			console.log("HTTP Request Failed");
			stop_loading();
		})
		.always(function() {
			/* ... */
		});
	}
	}
});

jQuery( "#btn_iniciar_sesion" ).click(function() 
{
	iniciar_sesion();
});

function iniciar_sesion_preregistro(correo,password)
{
	jQuery.ajax({
		url: "php/validar_credencial.php",
		type: "POST",
		data: {
			"username": correo,
			"password": password,}
		}).done(function(data, textStatus, jqXHR) 
		{
			console.log(data);
			var obj= JSON.parse(data);

			if (obj["internal_code"]==0) 
			{
				stop_loading();
				jQuery("#formA").append('<input type="hidden" name="uuid" value="'+obj["response_object"]["uuid"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="login_method" value="'+obj["response_object"]["login_method"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="facebook_id" value="'+obj["response_object"]["facebook_id"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="mail_address" value="'+obj["response_object"]["mail_address"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="name" value="'+obj["response_object"]["name"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="registration_date" value="'+obj["response_object"]["registration_date"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="credits_balance" value="'+obj["response_object"]["credits_balance"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="purchased_credits" value="'+obj["response_object"]["purchased_credits"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="used_credits" value="'+obj["response_object"]["used_credits"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="total_pictures" value="'+obj["response_object"]["total_pictures"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="has_rewards" value="'+obj["response_object"]["has_rewards"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="is_enabled" value="'+obj["response_object"]["is_enabled"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="short_name" value="'+obj["response_object"]["short_name"]+'" />');
				jQuery("#formA").submit();
				limpiar_registro();
			}
			else  
			{
				alert(obj['message']);
				stop_loading();
			}
		})
		.fail(function(jqXHR, textStatus, errorThrown) 
		{
			console.log("HTTP Request Failed");
			stop_loading();
		})
		.always(function() 
		{
			/* ... */
		});
	}

function iniciar_sesion()
{
	var correo= jQuery('#txt_correo_inicar_sesion').val();
	var password= jQuery('#txt_password_iniciar_sesion').val();

	if (verificar_preregistro()==true) 
	{
		start_loading();
		jQuery.ajax({
		url: "php/validar_credencial.php",
		type: "POST",
		data: {
			"username": correo,
			"password": password,}
		}).done(function(data, textStatus, jqXHR) 
		{
			console.log(data);
			var obj= JSON.parse(data);

			if (obj["internal_code"]==0) 
			{
				stop_loading();
				jQuery("#formA").append('<input type="hidden" name="uuid" value="'+obj["response_object"]["uuid"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="login_method" value="'+obj["response_object"]["login_method"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="facebook_id" value="'+obj["response_object"]["facebook_id"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="mail_address" value="'+obj["response_object"]["mail_address"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="name" value="'+obj["response_object"]["name"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="registration_date" value="'+obj["response_object"]["registration_date"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="credits_balance" value="'+obj["response_object"]["credits_balance"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="purchased_credits" value="'+obj["response_object"]["purchased_credits"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="used_credits" value="'+obj["response_object"]["used_credits"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="total_pictures" value="'+obj["response_object"]["total_pictures"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="has_rewards" value="'+obj["response_object"]["has_rewards"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="is_enabled" value="'+obj["response_object"]["is_enabled"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="short_name" value="'+obj["response_object"]["short_name"]+'" />');
				jQuery("#formA").submit();
				limpiar_incio_sesion();

			}
			else  
			{
				alert(obj['message']);
				stop_loading();
			}
		})
		.fail(function(jqXHR, textStatus, errorThrown) 
		{
			console.log("HTTP Request Failed");
			stop_loading();
		})
		.always(function() 
		{
			/* ... */
		});
	}
	
}

function iniciar_sesion_prueba()
{
	var correo= jQuery('#txt_correo_inicar_sesion').val();
	var password= jQuery('#txt_password_iniciar_sesion').val();
	jQuery("#formA").append('<input type="hidden" name="id" value="'+correo+'" />');
	jQuery("#formA").append('<input type="hidden" name="correo" value="'+password+'" />');
	jQuery("#formA").append('<input type="hidden" name="password" value="'+correo+'" />');
	jQuery("#formA").submit();
}

//RECUPERAR CONTRASEÑAbtn_enviar_codigo
jQuery( "#btn_enviar_codigo" ).click(function() 
{
	enviar_codigo();
});

jQuery( "#btn_recuperar_password" ).click(function() 
{
	recuperar_contraseña();
});

function enviar_codigo()
{
	if (verificar_recuperar_passw()==true) 
	{
		start_loading();
		var recuperar_correo= jQuery('#recuperar_correo').val();
		
		jQuery.ajax({
			url: "php/usuarios/create_codigoseguridad.php",
			type: "GET",
			data: {
				"username":  recuperar_correo,
			}
		})
		.done(function(data, textStatus, jqXHR) {
			console.log("HTTP Request Succeeded: " + jqXHR.status);
			console.log(data);
			var obj = JSON.parse(data);
			if (obj['internal_code']== 0)
			{
				jQuery("#id_code").append('<input type="hidden" name="id_code_uu" id="id_code_uu" value="'+obj["response_object"]+'"/>');
				alert(obj['message']);
				stop_loading();
			}
			else if (obj['internal_code']== 3){

				alert('No es posible cambiar tu contraseña, ya que estas registrado por medio de facebook');
				stop_loading();
			}
			else{
				alert(obj['message']);
				stop_loading();
			}

		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			console.log("HTTP Request Failed");
			stop_loading();
		})
		.always(function() {
			/* ... */
		});
	}
}

function recuperar_contraseña()
{
	if (verificar_password_recuperar()==true) 
	{
		start_loading();
		var codigo_verificacion= jQuery('#codigo_verificacion').val();
		var id_code_uu= jQuery('#id_code_uu').val();
		var recuperar_password= jQuery('#recuperar_password').val();
		var recuperar_correo= jQuery('#recuperar_correo').val();
		jQuery.ajax({
			url: "php/usuarios/cambiar_password_code.php",
			type: "POST",
			data: {
				"uuid":  id_code_uu,
				"security_code":  codigo_verificacion,
				"new_password":  recuperar_password,
			}
		})
		.done(function(data, textStatus, jqXHR) {
			console.log("HTTP Request Succeeded: " + jqXHR.status);
			console.log(data);
			var obj = JSON.parse(data);
			if (obj['internal_code']== 0){
				iniciar_sesion_preregistro(recuperar_correo,recuperar_password);
				alert(obj['message']);
				stop_loading();
			}
			else{
				alert(obj['message']);
				stop_loading();
			}

		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			console.log("HTTP Request Failed");
			stop_loading();
		})
		.always(function() {
			/* ... */
		});
	}
}

jQuery('#btn_preregistro_facebook').on('click',function(){
	
	
	 var condiciones = jQuery("#gridCheck").is(":checked");
	if (condiciones) 
	{
		logIn();
	}
	else
	{
		jQuery('#err_modal').html('<div class="alert alert-danger" role="alert">Para continuar debes aceptar los terminos y condiciones, asi como el aviso de privacidad.</div>').show(200).delay(2500).hide(200);
	}
});



function preregistro_facebook(id,correo,nombre)
{
	jQuery.ajax({
			url: "php/usuarios/create_usuario.php",
			type: "POST",
			data: {
				"nombre": nombre,
				"correo":  correo,
				"password": "",
				"login_method": 2,
				"facebook_id": id,
			}
		})
		.done(function(data, textStatus, jqXHR) {
			console.log("HTTP Request Succeeded: " + jqXHR.status);
			console.log(data);
			var obj = JSON.parse(data);
			if (obj['internal_code']== 0){
				alert(obj['message']);
				iniciar_sesion_facebook(id);
			}
			else{
				alert(obj['message']);
				stop_loading();
			}

		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			console.log("HTTP Request Failed");
			stop_loading();
		})
		.always(function() {
			/* ... */
		});
}

function iniciar_sesion_facebook(id)
{
	jQuery.ajax({
		url: "php/validar_facebook.php",
		type: "GET",
		data: {
			"facebook_id": id,}
		}).done(function(data, textStatus, jqXHR) 
		{
			console.log(data);
			var obj= JSON.parse(data);

			if (obj["internal_code"]==0) 
			{
				stop_loading();
				jQuery("#formA").append('<input type="hidden" name="uuid" value="'+obj["response_object"]["uuid"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="login_method" value="'+obj["response_object"]["login_method"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="facebook_id" value="'+obj["response_object"]["facebook_id"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="mail_address" value="'+obj["response_object"]["mail_address"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="name" value="'+obj["response_object"]["name"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="registration_date" value="'+obj["response_object"]["registration_date"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="credits_balance" value="'+obj["response_object"]["credits_balance"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="purchased_credits" value="'+obj["response_object"]["purchased_credits"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="used_credits" value="'+obj["response_object"]["used_credits"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="total_pictures" value="'+obj["response_object"]["total_pictures"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="has_rewards" value="'+obj["response_object"]["has_rewards"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="is_enabled" value="'+obj["response_object"]["is_enabled"]+'" />');
				jQuery("#formA").append('<input type="hidden" name="short_name" value="'+obj["response_object"]["short_name"]+'" />');
				jQuery("#formA").submit();

			}
			else  
			{
				alert(obj['message']);
				stop_loading();
			}
		})
		.fail(function(jqXHR, textStatus, errorThrown) 
		{
			console.log("HTTP Request Failed");
			stop_loading();
		})
		.always(function() 
		{
			/* ... */
		});
}

jQuery( "#btn_iniciar_sesion_facebook" ).click(function() 
{
	logIn1();
});

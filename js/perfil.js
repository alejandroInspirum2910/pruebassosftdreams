jQuery('#btn_editar_perfil_nombre').on('click',function()
{
	actualizar_nombre_perfil();
});
function actualizar_nombre_perfil() 
{

	if (verificar_nombre_perfil()==true) 
	{
		start_loading();
		var editar_nombre= jQuery('#editar_nombre').val();
		
		jQuery.ajax({
			url: "php/perfiles/update_nombre.php",
			type: "POST",
			data: {
				"new_name":  editar_nombre,
			}
		})
		.done(function(data, textStatus, jqXHR) {
			console.log("HTTP Request Succeeded: " + jqXHR.status);
			console.log(data);
			var obj = JSON.parse(data);
			if (obj['internal_code']== 0){
				limpiar_nombre_perfil();
				alert(obj['message']);
				stop_loading();

				jQuery("#editar_nombre").val(obj['response_object']['name']);
				jQuery('#nombre_1').text(obj['response_object']['short_name']);
				
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
	else
	{
		var campo_error='perfil_error';
		error(campo_error)
	}
	
}

//ACTUALIZAR CORREOS DE PERFILES

jQuery('#btn_editar_perfil_correo').on('click',function()
{
	actualizar_correo_perfil();
});
function actualizar_correo_perfil() 
{

	if (verificar_correo_perfil()==true) 
	{
		start_loading();
		var editar_correo= jQuery('#editar_correo').val();
		
		jQuery.ajax({
			url: "php/perfiles/update_correo.php",
			type: "POST",
			data: {
				"new_mail_address":  editar_correo,
			}
		})
		.done(function(data, textStatus, jqXHR) {
			console.log("HTTP Request Succeeded: " + jqXHR.status);
			console.log(data);
			var obj = JSON.parse(data);
			if (obj['internal_code']== 0){
				limpiar_correo_perfil();
				alert(obj['message']);
				stop_loading();
				jQuery("#editar_correo").val(obj['response_object']['mail_address']);
				jQuery("#edidar_correo_verificar").val(obj['response_object']['mail_address']);
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
	else
	{
		var campo_error='perfil_error';
		error(campo_error)
	}
	
}

//ACTUALIZAR CONTRASEÑA PERFILES
jQuery('#btn_editar_perfil_password').on('click',function()
{
	actualizar_password_perfil();
});
function actualizar_password_perfil() 
{

	if (verificar_password_perfil()==true) 
	{
		start_loading();
		var editar_password= jQuery('#editar_password').val();
		
		jQuery.ajax({
			url: "php/perfiles/update_password.php",
			type: "POST",
			data: {
				"new_password":  editar_password,
			}
		})
		.done(function(data, textStatus, jqXHR) {
			console.log("HTTP Request Succeeded: " + jqXHR.status);
			console.log(data);
			var obj = JSON.parse(data);
			if (obj['internal_code']== 0){
				limpiar_password_perfil();
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
	else
	{
		var campo_error='perfil_error';
		error(campo_error)
	}
	
}


jQuery('#btn_modal_elimnar_perfil').on('click',function()
{

	jQuery('#modal_eliminar_cuenta').modal({
		show:true,
		backdrop:'static'
	});
});


jQuery('#btn_eliminar_perfil').on('click',function()
{
	eliminar_perfil();

});

function eliminar_perfil()
{
	var condiciones = jQuery("#check_eliminar_cuenta").is(":checked");
	if (condiciones) 
	{
		start_loading();
		
		jQuery.ajax({
			url: "php/perfiles/eliminar_cuenta.php",
			type: "POST",
			data: {
				
			}
		})
		.done(function(data, textStatus, jqXHR) {
			console.log("HTTP Request Succeeded: " + jqXHR.status);
			console.log(data);
			var obj = JSON.parse(data);
			if (obj['internal_code']== 0){
				
				alert(obj['message']);
				cerra_sesion();
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

	else
	{
		alert('Tienes que seleccionar el check box para eliminar tu perfil');
	}
}

function cerra_sesion()
{
	jQuery.ajax({
			url: "php/logout.php",
			type: "POST",
			data: {
				
			}
		})
		.done(function(data, textStatus, jqXHR) {

			stop_loading();
			location.href='index.php';
		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			console.log("HTTP Request Failed");
			stop_loading();
		})
		.always(function() {
			/* ... */
		});
}
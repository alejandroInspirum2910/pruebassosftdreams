
function llenar_nube()
{
  jQuery.ajax({
      url: "php/usuarios/users_summary.php",
      type: "GET",
      data: {
        "media_id":  "1",
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      console.log(data);
      var obj = JSON.parse(data);
      if (obj['internal_code']== 0)
      {
         
        //alert(obj['message']);
        
        jQuery('.titulo-nube').text(obj['response_object']['credits_balance']);
        jQuery('#valor_nube').text(obj['response_object']['credits_balance']);
      }
      else{
        alert(obj['message']);
        
      }

    })
    .fail(function(jqXHR, textStatus, errorThrown) {
      console.log("HTTP Request Failed");
      
    })
    .always(function() {
      /* ... */
    });
}
function resumen_usuario_perfil()
{

  jQuery.ajax({
      url: "php/usuarios/users_summary.php",
      type: "GET",
      data: {
        "media_id":  "1",
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      console.log(data);
      var obj = JSON.parse(data);
      if (obj['internal_code']== 0)
      {
         //alert(obj['response_object']['login_method']);
         if (obj['response_object']['login_method']==2) 
         {
          jQuery('#mi_perfil').hide();
          jQuery('.titulo-nube').text(obj['response_object']['credits_balance']);
          jQuery('#valor_nube').text(obj['response_object']['credits_balance']);
         }
         else
        {
          jQuery('#mi_perfil').show();
          jQuery('#nombre_1').text(obj['response_object']['short_name']);
          jQuery('#editar_nombre').val(obj['response_object']['name']);
        jQuery('#editar_correo').val(obj['response_object']['mail_address']);
        jQuery('#edidar_correo_verificar').val(obj['response_object']['mail_address']);
        jQuery('.titulo-nube').text(obj['response_object']['credits_balance']);
        jQuery('#valor_nube').text(obj['response_object']['credits_balance']);
        }
        
      }
      else{
        alert(obj['message']);
        
      }

    })
    .fail(function(jqXHR, textStatus, errorThrown) {
      console.log("HTTP Request Failed");
      
    })
    .always(function() {
      /* ... */
    });
}
// jQuery(document).ready(function () {
//   subirfoto();


// });

//validar extencion

function cargar_fecha()
          {
            var date = new Date();
          var day = date.getDate();
           
          var month = ((date.getMonth() + 1) < 10 ? '0' : '') + (date.getMonth() + 1);
          
          var year = date.getFullYear();

          var div='';

          fecha_fomateada= (year + '-' + month + '-' + day);
          //div+='';


          //jQuery("#date_picker").html(div);
          // document.getElementById("select_fecha").setAttribute("max", fecha_fomateada);
          // document.getElementById("select_fecha").setAttribute("value", fecha_fomateada);
          // console.log('sss'+fecha_fomateada);

          let fecha1 = new Date('2020-06-15');
      let fecha2 = new Date(fecha_fomateada);

      let resta = fecha2.getTime() - fecha1.getTime();
      
      var minDat= Math.round(resta/ (1000*60*60*24));
      console.log(Math.round(resta/ (1000*60*60*24)))
      console.log('-'+minDat+'D');

      jQuery( "#select_fecha" ).val(fecha_fomateada);
      jQuery( "#select_fecha" ).datepicker(
      { 
        monthNames: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],

        dayNamesMin: [ "D", "L", "M", "M", "J", "V", "S" ],
        dateFormat: "yy-mm-dd",
        currentText: "Now",
        constrainInput: false,
        defaultDate: +7,
        buttonText: "Choose",
        autoSize: true,
        minDate: '-'+minDat+'D',
        maxDate: '+0D',
      }
      );
          }

jQuery('#file_participar1').load(function() {
        alert($(this).height());
        alert($(this).width());
    });
  
function validar_img(campo)
{
  var fileSize = jQuery('#'+campo+'')[0].files[0].size;
  var archivo = jQuery('#'+campo+'').val();
  
  var extensiones = archivo.substring(archivo.lastIndexOf("."));

  if (fileSize > 20000000) 
  {
    alert('El archivo no debe de superar los 20 MB');
    return false;
  }
  

  if(extensiones != ".jpg" && extensiones != ".png" && extensiones != ".jpeg" && extensiones != ".JPEG"&& extensiones != ".JPG"&& extensiones != ".PNG")
  {
    alert("El archivo de tipo " + extensiones + ". No es válido"+" Tipos de imagenes validas: .png, .jpg o .jpeg");
    return false;
  }
  else 
  {
    return true;
  }
}
//Cargar vistas de participar

jQuery('#obtener_nubes').on('click',function()
{
  obtenernubes();
});

jQuery('#participar').on('click',function()
{
  subirfoto();
});

function subirfoto()
{
  jQuery('#main').load('./subirfoto.html');
  jQuery('#main2').html('');
}
function obtenernubes()
{
  jQuery('#main2').load('./obtenernubes.html');
  jQuery('#main').html('');
}

function readFile(input) 
{
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      jQuery('#preview_img').html('<div class="owl-item" style="width: 235px;"><div class="gallery-item">'+
        '<div class="gallery-icon landscape" id="imagen_participante_preview"></div></div></div>'
        +'<a  class="cws_button small" id="btn_subir_foto_participante" style="margin-top: 10px;" onclick="subir_foto_ticket();" >SUBIR FOTO</a>');
      jQuery('#imagen_participante_preview').html('<img width="1024" height="1024" src="'+e.target.result+'" class="attachment-large preview-img" id="img_participante" >')

    }

    reader.readAsDataURL(input.files[0]);
  }
}

function readFile2(input) 
{
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {    
      jQuery('#preview_img1').html('<div class="owl-item" style="width: 235px;"><div class="gallery-item">'+
        '<div class="gallery-icon landscape" id="imagen_participante_preview1" ></div></div></div><br>'
        +'<a  class="cws_button small" id="btn_subir_foto_participante1" style="margin-top: 10px;" onclick="subir_foto();">SUBIR FOTO</a>');
      jQuery('#imagen_participante_preview1').html('<img width="1024" height="1024" src="'+e.target.result+'" class="attachment-large preview-img" id="img_participante1" >')

    }

    reader.readAsDataURL(input.files[0]);
  }
}

function limpiar_foto_participar1()
{

  jQuery('#file_participar1').val(null); 
    jQuery('#preview_img1').html(''); 
    jQuery('#file_name1').html('');
    jQuery('#preview_img1').html('');
}

function limpiar_foto_participar()
{
  jQuery('#select_cadena').val("");
  jQuery('#numero_ticket').val('');
  //jQuery('#select_fecha').val("");
 
  jQuery('#monto_compra').val('');

  //get_combo_cadena();
  cargar_fecha();

  jQuery('#file_participar').val(null); 
  jQuery('#preview_img').html(''); 
  jQuery('#file_name').html('');
  jQuery('#preview_img').html('');
}

jQuery('#file_participar').on('change',function()
{
  //jQuery('#select_cadena').val(jQuery(this).find('option:0').val());
  //jQuery('#form_participa')[0].reset();

  var campo='file_participar';
  if (validar_img(campo)==true) 
  {
    readFile(this);
    var filename = jQuery(this).val().split('\\').pop();
    jQuery('#file_name').html(filename);
  }
  else
  {
    jQuery('#file_participar').val(null); 
    jQuery('#preview_img').html(''); 
    jQuery('#file_name').html('');
  }
});

jQuery('#file_participar1').on('change',function()
{
  var campo='file_participar1';
  if (validar_img(campo)==true) 
  {
    readFile2(this);
    var filename = jQuery(this).val().split('\\').pop();
    jQuery('#file_name1').html(filename);
  }
  else
  {
    limpiar_foto_participar1();
  }
});

//CONEXION CON BACK
// jQuery('#btn_subir_foto_participante').on('click',function()
// {
//   create_obtener_nubes();
// });

function create_obtener_nubes()
{
  if (verificar_participacion()==true) 
  {
    var form = new FormData();
  form.append("file", jQuery("#file_participar")[0].files[0]); 
  //var form = new FormData(jQuery("#form_foto")[0]); 
  jQuery.ajax({
    url: "php/participar/upload_foto_participar.php",
    type: "POST",
    data: form,
    cache: false,
    contentType: false,
    processData: false
  })
  .done(function(data, textStatus, jqXHR) 
  {
    console.log("HTTP Request Succeeded: " + jqXHR.status);
    console.log(data);
    var obj = JSON.parse(data);
    if (obj['internal_code']== 0)
    {
      alert(obj['message']);

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
}

function subir_foto_ticket()
{

  if(verificar_participacion()==true)
  {
    start_loading();
    var form = new FormData();
    form.append("file", jQuery("#file_participar")[0].files[0]);
    //var form = new FormData(jQuery("#form_foto")[0]); 
    jQuery.ajax({
      url: "php/participar/upload_foto.php",
      type: "POST",
      data: form,
      cache: false,
      contentType: false,
      processData: false
    })
    .done(function(data, textStatus, jqXHR) 
    {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      console.log(data);
      var obj = JSON.parse(data);
      if (obj['internal_code']== 0)
      {
        create_ticket(obj['response_object']['media_id']);
      }
      else
      {
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

function create_ticket(media_id)
{
 
  var store_id= jQuery('#select_cadena').val();
  var ticket_number= jQuery('#numero_ticket').val();
  var ticket_date= jQuery('#select_fecha').val();
  var ticket_amount= jQuery('#monto_compra').val();

  jQuery.ajax({
      url: "php/participar/create_ticket.php",
      type: "POST",
      data: {
        "media_id":  media_id,
        "store_id":  store_id,
        "ticket_number":  ticket_number,
        "ticket_date":  ticket_date,
        "ticket_amount":  ticket_amount,
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      console.log(data);
      var obj = JSON.parse(data);
      if (obj['internal_code']== 0){
         limpiar_foto_participar();
        alert(obj['message']);
        stop_loading();
        jQuery('.titulo-nube').text(obj['response_object']['credits_balance']);
        jQuery('#valor_nube').text(obj['response_object']['credits_balance']);      
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

function subir_foto()
{
  var valor_nube=jQuery('#valor_nube').text();
  //alert(valor_nube);

  
  if(valor_nube>=1)
  {
    start_loading();
    var form = new FormData();
    form.append("file", jQuery("#file_participar1")[0].files[0]);

  //var form = new FormData(jQuery("#form_foto")[0]); 
  jQuery.ajax({
    url: "php/participar/upload_foto.php",
    type: "POST",
    data: form,
    cache: false,
    contentType: false,
    processData: false
  })
  .done(function(data, textStatus, jqXHR) 
  {
    console.log("HTTP Request Succeeded: " + jqXHR.status);
    console.log(data);
    var obj = JSON.parse(data);
    if (obj['internal_code']== 0)
    {
      //alert(obj['message']);
      subir_foto_participacion(obj['response_object']['media_id']);
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
  alert('No tienes nubes suficientes para subir la foto');
  limpiar_foto_participar1();
}
}

function subir_foto_participacion(media_id)
{
  jQuery.ajax({
      url: "php/participar/upload_foto_mediaid.php",
      type: "POST",
      data: {
        "full_media_id":  media_id,
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      console.log(data);
      var obj = JSON.parse(data);
      if (obj['internal_code']== 0){
         limpiar_foto_participar1();
        alert(obj['message']);
        stop_loading();
        jQuery('.titulo-nube').text(obj['response_object']['credits_balance']); 
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

function get_combo_cadena(text_select,html_contendor)
{
  jQuery.ajax({
      url: "php/participar/get_combos.php",
      type: "GET",
      data: {
        "catalogue_id":  "2",
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      console.log(data);
      var obj = JSON.parse(data);
      if (obj['internal_code']== 0)
      {
        var contenedor_select =' <option value="" selected="selected" >'+text_select+'</option>';
        //alert('1');
          for(var i=0; i<obj['response_object']['values'].length;i++)
          {

            contenedor_select += ' <option value="'+obj['response_object']['values'][i]['id']+'" >'+obj['response_object']['values'][i]['value']+'</option>';
            //onsole.log(contenedor_select);
          }
        
        jQuery('#'+html_contendor+'').html(contenedor_select);
      }
      else{
        alert(obj['message']);
        
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

function get_combo_fecha(text_select,html_contendor)
{
  alert('1');
  jQuery.ajax({
      url: "php/participar//tickets_dates.php",
      type: "GET",
      data: {
        "combo":  "1",
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      console.log(data);
      var obj = JSON.parse(data);
      if (obj['internal_code']== 0)
      {
        var contenedor_select =' <option value="" selected >'+text_select+'</option>';
        
          for(var i=0; i<obj['response_object'].length;i++)
          {

            contenedor_select += ' <option value="'+obj['response_object'][i]['date_id']+'" >'+obj['response_object'][i]['display_date']+'</option>';
            //onsole.log(contenedor_select);
          }
        
        jQuery('#'+html_contendor+'').html(contenedor_select);
      }
      else{
        alert(obj['message']);
        //stop_loading();
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

jQuery("#select_cadena").each(function(){
  var text_select='Selecciona una opcion..';
  var html_contendor='select_cadena';
  get_combo_cadena(text_select,html_contendor);
});

// jQuery("#select_fecha").each(function(){
//   var text_select='Selecciona una opcion..';
//   var html_contendor='select_fecha';
//   get_combo_fecha(text_select,html_contendor);
// });
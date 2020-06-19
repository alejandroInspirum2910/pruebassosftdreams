jQuery(document).ready(function()
{
  llenar_nube();
  fotos_diarias('1');
  cargar_titulo_galeria('1','Ganador Premios Diarios');
  
});


jQuery("#select_galeria").each(function(){
  var text_select='...';
  var html_contendor='select_galeria';
  get_combo_galeria(text_select,html_contendor);

  
});

function cargar_titulo_galeria(id,texto)
{
	//alert(id+texto);
	jQuery('#titulo_galeria').text('');

	if (id=='1') 
	{
		jQuery('#titulo_galeria').text(texto);
    
	}
  else if (id=='2') 
  {
    jQuery('#titulo_galeria').text(texto);
  }
	else
	{
		jQuery('#titulo_galeria').text(texto);
	}
	
}

function fotos_diarias(tipo_image)
{
  var tipo_imagen= jQuery('#select_galeria option:selected').text();
  id='2';
 
  cargar_titulo_galeria(id,tipo_imagen);

  start_loading();
	jQuery('#itemContainer').html('');
	if (tipo_image==null) 
	{
		//alert(tipo_image);
		var tipo_imagen= jQuery('#select_galeria').val();

	}

	else
	{
		var tipo_imagen=tipo_image;
	}
	
	jQuery.ajax({
      url: "php/galerias/mis_fotos.php",
      type: "GET",
      data: {
        "tipo":  tipo_imagen,
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      
      var obj = JSON.parse(data);
      console.log(obj["response_object"]['gallery'].length);
      if (obj['internal_code']== 0)
      {
        contenedor_select='';
        if (obj['response_object']['mode']!=0) 
        {
          jQuery('.holder').css('display','block');
        for(var i =0; i<obj["response_object"]['gallery'].length;i++)
        {
          
        	contenedor_select +='<article class="item " data-custom-type="all gd">'
        	 +"<div class='media_part'>"
             +"<div class='pic'><img src='"+obj["response_object"]['gallery'][i]['low_res_url']+"' data-at2x='"+obj["response_object"]['low_res_url']+"' alt />"
             +"<div class='hover-effect'></div>"
             +"<div class='links_popup'>"
             +"<div class='link_cont'>"
             +"<div class='link'>"
             +"<a class='fancy' href='"+obj["response_object"]['gallery'][i]['full_res_url']+"' data-fancybox-group='cws-portfolio-gallery-564ee111237c6'><i class='fa fa-camera'></i></a>"
        	 +"</div>"
             +"</div>"
             +"</div>"
             +"</div>"
             +"</div>"
             +'<div class="tituloimg"> <a id="ver_perfil" class="tituloimg" onclick="ver_perfil_galeria('+"'"+obj['response_object']['gallery'][i]['uuid']+"',"+"'"+obj['response_object']['gallery'][i]['title']+"'"+');">'+obj['response_object']['gallery'][i]['title']+'</a></div>'
             +"<div class='separate_part'>"
             +"<div class='separate separateimg'></div>"
             +"</div>"
             +"<div class='desc_part'>"
             +'<div class="categories centrar">'
             +"<p>"+obj["response_object"]['gallery'][i]['description']+"</p>"
             +"</div>"
             +"</div>"
             +"</article>";

          //contenedor_select += ' <option value="'+obt["response_object"][i]["uuid"]+'" >'+obt["response_object"][i]["valor"]+'</option>';

        }
        jQuery('#itemContainer').html(contenedor_select);

        paginacion();
        stop_loading();
      }
      else
      {
        jQuery('.holder').css('display','none');
        contenedor_select='<div class="error-galeria">'+
                    '<h2>'+obj["response_object"]['general_message'];+'</h2>'
                '</div>';
        jQuery('#itemContainer').html(contenedor_select);
        console.log(contenedor_select);
        stop_loading();
      }
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


function get_combo_galeria(text_select,html_contendor)
{
  
  jQuery.ajax({
      url: "php/participar/get_combos.php",
      type: "GET",
      data: {
        "catalogue_id":  "1",
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      //console.log(data);

      var obj = JSON.parse(data);
      console.log(obj['response_object']['values'].length);
      if (obj['internal_code']== 0)
      {
              var contenedor_select ='';
              for(var i=0; i<obj['response_object']['values'].length;i++)
              {
                if (obj['response_object']['values'][i]['id']==1)
                 {
                  //contenedor_select += ' <option value="'+obj['response_object']['values'][i]['id']+'" selected="selected">'+obj['response_object']['values'][i]['value']+'</option>';
                  //console.log('Combo');
                 }
                contenedor_select += ' <option value="'+obj['response_object']['values'][i]['id']+'" >'+obj['response_object']['values'][i]['value']+'</option>';
                console.log(contenedor_select);
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

function ver_perfil_galeria(id,nombre)
{

  start_loading();
  jQuery.ajax({
      url: "php/galerias/ver_galeria_usuario.php",
      type: "GET",
      data: {
        "tipo":  id,
      }
    })
    .done(function(data, textStatus, jqXHR) {
      console.log("HTTP Request Succeeded: " + jqXHR.status);
      
      var obj = JSON.parse(data);
      console.log(obj["response_object"]['gallery'].length);
      if (obj['internal_code']== 0)
      {
        contenedor_select='';
        if (obj['response_object']['mode']!=0) 
        {

        jQuery('.holder').css('display','block');
        for(var i =0; i<obj["response_object"]['gallery'].length;i++)
        {
          contenedor_select +='<article class="item " data-custom-type="all gd"> '
           +"<div class='media_part'>"
             +"<div class='pic'><img src='"+obj["response_object"]['gallery'][i]['low_res_url']+"' data-at2x='"+obj["response_object"]['low_res_url']+"' alt />"
             +"<div class='hover-effect'></div>"
             +"<div class='links_popup'>"
             +"<div class='link_cont'>"
             +"<div class='link'>"
             +"<a class='fancy' href='"+obj["response_object"]['gallery'][i]['full_res_url']+"' data-fancybox-group='cws-portfolio-gallery-564ee111237c6'><i class='fa fa-camera'></i></a>"
           +"</div>"
             +"</div>"
             +"</div>"
             +"</div>"
             +"</div>"
             +'<div class="tituloimg"> <a id="ver_perfil" class="tituloimg" onclick="ver_perfil_galeria('+"'"+obj['response_object']['gallery'][i]['uuid']+"',"+"'"+obj['response_object']['gallery'][i]['title']+"'"+');">'+obj['response_object']['gallery'][i]['title']+'</a></div>'
             +"<div class='separate_part'>"
             +"<div class='separate separateimg'></div>"
             +"</div>"
             +"<div class='desc_part'>"
             +'<div class="categories centrar">'
             +"<p>"+obj["response_object"]['gallery'][i]['description']+"</p>"
             +"</div>"
             +"</div>"
             +"</article>";
             
          //contenedor_select += ' <option value="'+obt["response_object"][i]["uuid"]+'" >'+obt["response_object"][i]["valor"]+'</option>';

        }
        //alert(id+nombre);
        id='3'
        titulo=""+"Galeria "+nombre+"";
        //console.log(titulo);
        cargar_titulo_galeria(id,titulo);
        jQuery('#itemContainer').html(contenedor_select);

        paginacion();
        stop_loading();
      }
      else

      {
        jQuery('.holder').css('display','none');
        contenedor_select='<div class="error-galeria">'+
                    '<h2>'+obj["response_object"]['general_message'];+'</h2>'
                '</div>';
       
        jQuery('#itemContainer').html(contenedor_select);
        stop_loading();
      }
        
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
var err='#err';
// jQuery('#email').on('change', function () {
//     if(!validateEmail(jQuery(this).val())){
//         jQuery('#erremail').html('<span style="color: red;"><i class="ion-close"></i> Correo Invalido.</span>');

//         //jQuery(this).val('');
//     }else {
//         jQuery('#erremail').html('');
//     }
// });

// jQuery('#email1').on('change', function () {
//     if(!validateEmail(jQuery(this).val())){
//         jQuery('#erremail1').html('<span style="color: red;"><i class="ion-close"></i> Correo Invalido.</span>');

//         //jQuery(this).val('');
//     }else {
//         jQuery('#erremail1').html('');
//     }
// });

// function verificar_preregistro()
// {
//     var v1=0;
//     v1=validar_nombre('nombre');

//     if (v1===false) 
//         {alert('Debe de llenar los campos requeridos ¡VUELVA A INTENTARLO!');return false;}
//     else{return true;}
// }

// function validar_nombre(campo)
// {
//     if (campo='nombre') 
//     {
//         if(jQuery('#'+campo+'').val().length>0){
//             jQuery(''+err+campo+'').html('<div class="valid-feedback"><i class="ion-close"></i> Correcto</div>');
//             jQuery(''+err+campo+' .valid-feedback').css('display','block');
//             return false; 
//         //jQuery(this).val('');
//     }else {
//         jQuery(''+err+campo+'').html('<div class="invalid-feedback"><i class="ion-close"></i> Campo necesario.</div>');
//         jQuery(''+err+campo+' .invalid-feedback').css('display','block');
//         return false; 
//     }
// }

// }

// //password verification
// jQuery('#cpwd').on('change', function () {
//     if(jQuery(this).val() != jQuery('#pwd').val() ){
//         jQuery('#errPwd').html('<span style="color: red;"><i class="ion-close"></i> Las contraseñas no coinciden.</span>');
//         //jQuery(this).val('');
//     }else {
//         jQuery('#errPwd').html('');
//     }
// });

// //Email verification
// jQuery('#email1').on('change', function () {
//     if(jQuery(this).val() != jQuery('#email').val() ){
//         jQuery('#erremail2').html('<span style="color: red;"><i class="ion-close"></i> Los correos no coinciden.</span>');
//         jQuery(this).val('');
//     }else {
//         jQuery('#erremail2').html('');
//     }
// });


// //email validation
// function validateEmail(email) {
//     var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
//     return re.test(email);
// }



//generate captcha
function generateCaptcha(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
    return result;
}
function cargarcaptcha()
{
    jQuery('.invalid-feedback').css('display','none');
    jQuery('.valid-feedback').css('display','none');
    //default captcha
    jQuery('.dynamic-code').text(generateCaptcha(5, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'));
    jQuery('.captcha-reload').on('click', function () {
    jQuery('.dynamic-code').text(generateCaptcha(5, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'));
});
}
//check captcha
jQuery('#captcha_input').on('change', function () {
    if(jQuery(this).val() != jQuery('.dynamic-code').text()){
        jQuery('#errcaptcha_input').html('<span style="color: red;"><i class="ion-close"></i> Captecha not matched.</span>');
        //jQuery(this).val('');
    }else {
        jQuery('#errcaptcha_input').html('');
    }
});

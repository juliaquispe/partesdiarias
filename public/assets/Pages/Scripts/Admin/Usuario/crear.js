

$(document).ready(function () {
    const reglas = {
        re_password: {
            equalTo: "#password"
        }
    };
    const mensajes = {
        re_password:
        {
            equalTo: 'Las contraseñas no coinciden'
        }
    };
    PartesDiarias.ValidacionGeneral('form-general',reglas,mensajes);
    $('#password').on('change', function(){   // si se agrega contenido a password se activa esta funcion y el campo repassword se vuelve obligatorio
        const valor = $(this).val(); 
        if(valor != ''){
            $('#re_password').prop('required', true);
        }else{
            $('#re_password').prop('required', false);
        }
    });
});
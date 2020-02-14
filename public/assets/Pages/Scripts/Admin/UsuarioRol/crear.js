$('.usuariorol').on('change', function () {
    var data = {
        
        _token: $('input[name=_token]').val()
    };
    if ($(this).is(':checked')) {
        data.estado = 1
    } else {
        data.estado = 0
    }
    ajaxRequest('/admin/usuariorol', data);
});

function ajaxRequest (url, data) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (respuesta) {
            PartesDiarias.notificaciones(respuesta.respuesta, ' PartesDiarias', 'success');
        }
    });
}
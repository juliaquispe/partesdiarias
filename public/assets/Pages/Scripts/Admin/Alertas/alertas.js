$(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function () { //#apunta al id de la tabla y . apunta a la clase de la tabla
        event.preventDefault();
        const form = $(this);
        swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                ajaxRequest(form);
            }
        });
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (respuesta) {
                if (respuesta.mensaje == "ok") {
                    form.parents('tr').remove();
                    PartesDiarias.notificaciones('El registro fue eliminado correctamente', 'PartesDiarias', 'success');
                } else {
                    PartesDiarias.notificaciones('El registro que desea eliminar tiene dependencias ', 'PartesDiarias', 'error');
                }
            },
            error: function () {

            }
        });
    }
});
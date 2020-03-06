$(document).ready(function () {
    $('#uni-table').on('submit', '.form-eliminar', function(event){
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
                ajaxRequest(form.serialize(), form.attr('action'), 'eliminarCampus', form);
            }
        });
    });

    function ajaxRequest(data, url, funcion) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (respuesta) {
                if (funcion == 'eliminarCampus') {
                    if (respuesta.mensaje == "ok") {
                        window.location="../../../admin/uacj/index";
                        Equivalencias.notificaciones('El registro fue eliminado correctamente', 'Equivalencias', 'success');
                    } else {
                        Equivalencias.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Equivalencias', 'error');
                    }
                } 
            },
            error: function () {

            }
        });
    }
});

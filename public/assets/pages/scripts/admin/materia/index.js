$(document).ready(function () {
    $('#materia-table').on('submit', '.form-eliminar', function(event){
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
                ajaxRequest(form.serialize(), form.attr('action'), 'eliminarMateria', form);
            }
        });
    });

    function ajaxRequest(data, url, funcion, form = false) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (respuesta) {
                if (funcion == 'eliminarMateria') {
                    if (respuesta.mensaje == "ok") {
                        form.parents('tr').remove();
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
    
    $('#modal-editar').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id') 
        var nombre = button.data('nombre') 
        var carrera_id = button.data('carrera_id') 
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #nombre').val(nombre);        
        modal.find('.modal-body #carrera_id').val(carrera_id);
    });

});

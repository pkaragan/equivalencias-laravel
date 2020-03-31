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
    
});

var datatable_materias= function(table){
    $(document).on("click",".equivalencia",function(){
        var tr = $(this).closest('tr');
        var id = tr.attr('id');
        var clave = document.getElementById(id).children[1].innerHTML;
        var nombre = document.getElementById(id).children[2].innerHTML;

        console.log(clave);
    });    

    $(document).on("click",".editar",function(){
        var tr = $(this).closest('tr');
        var id = tr.attr('id');
        var clave = document.getElementById(id).children[1].innerHTML;
        var nombre = document.getElementById(id).children[2].innerHTML;

        console.log(id, clave, nombre);


        var modal = $('#modal-editar')
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #nombre').val(nombre);        
        modal.find('.modal-body #clave').val(clave);

    });    

    $(document).on("click",".eliminar",function(){
        var tr = $(this).closest('tr');
        var id = tr.attr('id');
        var clave = document.getElementById(id).children[1].innerHTML;
        var nombre = document.getElementById(id).children[2].innerHTML;

        console.log(id, clave, nombre);

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
    });   
    
}
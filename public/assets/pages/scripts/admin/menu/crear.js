$(document).ready(function () {
    Biblioteca.validacionGeneral('form-general');
    $('#icono').on('change', function () {
        $('#mostrar-icono').removeClass().addClass('fa fa-fw ' + $(this).val());
    });
});
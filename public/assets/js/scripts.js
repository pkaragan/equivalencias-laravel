/* Boton Borrar Campos De Formulario*/
$(document).ready(function () {
    //Cerrar Las Alertas Automaticamente
    $('.alert[data-auto-dismiss]').each(function (index, element) {
        const $element = $(element),
            timeout = $element.data('auto-dismiss') || 5000;
        setTimeout(function () {
            $element.alert('close');
        }, timeout);
    });
    //TOOLTIPS
    $('body').tooltip({
        trigger: 'hover',
        selector: '.tooltipsC',
        placement: 'top',
        html: true,
        container: 'body'
    });    
    $('ul.nav.nav-pills.nav-sidebar.flex-column').find('li.active').parents('li').addClass('active');
    $('a.nav-link').find('a.active').parents('a').addClass('active');

    document.getElementById("school-icon").style.fontSize='.8rem';
    
});
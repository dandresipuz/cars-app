$(function () {
    $('#departamento').on('change', onSelectDepartamentoChange);
});

function onSelectDepartamentoChange() {
    var departamento_id = $(this).val();

    if (!departamento_id) {
        $('#city').html('<option value="">Seleccionar ciudad...</option>');
        return;
    }

    $.get('/departamento/' + departamento_id + '/cities', function (data) {
        var html_select = '<option value="">Seleccionar ciudad...</option>';
        for (var i = 0; i < data.length; ++i) {
            html_select += '<option value="' + data[i].id + '">' + data[i].nombre + '</option>';
        }
        $('#city').html(html_select);
    });
}

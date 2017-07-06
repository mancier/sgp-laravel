$(document).ready(function () {
    $('#edit').on('click', function () {
        $.ajax({
        type: "GET",
        url: $('#edit').val()+"/editCliente",
        formData: {_token: $('#edit').data('token')},
        dataType: "json",
        success: function (response) {
            $('#adicionar-cliente').modal();
            for (var x = 0; x < response.length; x++) {
             $('nome').html(response[x].nome);
                
            }
        }
    });  
    })
});
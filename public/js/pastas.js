'use strict';
$(document).ready(function(){ 

    var $fileupload = $("#fileupload");
    
    $fileupload.fileupload({
        type: "GET",
        url: '/upload',
        dataType: 'json',
        maxFileSize: 999000,
        formData: { _token: $fileupload.data('token')},
        success: function (e, data) {
            alert("Upload Concluído");
        },

        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        },

        error: function(e) {
         window('Ocorreu uma falha durante o upload!\nEntre em contato com o administrador');
        },

        done: function(e){
            window.alert("Upload Concluído!");
            $('#progress .progress-bar').css(
                'width',
                0 + '%'
            );
        }
    });

    //Cliente - Pesquisa
    $('#cliente').on('blur', function(e, clientes){
        e.preventDefault();

        $("#cliente").val()

        var options = "";
        $.ajax({
            type: "GET",
            url: $("#cliente").val() + "/pesquisaCliente",
            dataType: "json",
            formData: {_token: $('cliente').data('token')},
            success: function(cliente) {
                $('.processo_opcao').remove();
                cliente.forEach(function(element) {
                    element.forEach(function(processo) {
                        $('<option value="'+ processo['id'] +'"class="processo_opcao">'+  processo['nome_processo']+' - '+ processo['numero_processo'] + '</option>').appendTo("#processo");
                    }, this);
                }, this);
            },
            error: function (clientes) {
                window.alert("Ocorreu um erro durante a pesquisa!");
            } 
        });
    });

    //Processo - Pesquisa
    $('#processo').on('blur',function (e) {
        e.preventDefault();
        
        var processo = $("#processo").val();
        var tabela = $('#items_processo');
        
        $.ajax({
            type: "GET",
            url: processo + "/pesquisaProcesso",
            dataType: "json",
            formData: {_token: $('processo').data('token'), processoId: $('#processo_data').data('processoId')},
            success: function (response) {
                $(".arquivos").remove();
                    response.forEach(function (arquivos){
                       arquivos.forEach(function(x){
                            $('#items_processo').append('<li class="list-group-item arquivos">'+x['nome']+'</li>');
                    });
                });
            }
        });
    });

})
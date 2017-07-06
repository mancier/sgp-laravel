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
        }
    });

    //Cliente - Pesquisa
    $('#cliente').on('blur', function(e, clientes){
        e.preventDefault();

        $("#cliente").val()

        var options = "";
        console.log("Iniciando... \n");
        $.ajax({
            type: "GET",
            url: $("#cliente").val() + "/pesquisaCliente",
            dataType: "json",
            formData: {_token: $('cliente').data('token')},
            success: function(cliente) {
                $('.processo_opcao').remove();

                console.log(cliente.length);
                console.log("For => Inicio\n");
                cliente.forEach(function(element) {
                    element.forEach(function(processo) {
                        $('<option value="'+ processo['id'] +'"class="processo_opcao">'+  processo['nome_processo']+' - '+ processo['numero_processo'] + '</option>').appendTo("#processo");
                        console.log('<option value="'+processo.id+'">'+processo.nome_processo+'</option>/n');
                    }, this);
                }, this);
                console.log("For => Finalizado\n");
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
        
        $.ajax({
            type: "GET",
            url: processo + "/pesquisaProcesso",
            dataType: "json",
            formData: {_token: $('processo').data('token'), processoId: $('#processo_data').data('processoId')},
            success: function (response) {
                $("#processo_data").remove();
                response.forEach(function(x) {
                    $('<div id="processo_data" value="'+processo+'"></div>').appendTo('#app');
                }, this);
            }
        });
    });

})
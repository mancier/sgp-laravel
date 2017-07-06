$('document').ready( function ()
{ 
     $('#telefone').mask('(xx) xxxx-xxxx', {'translation': {x: {pattern: /[0-9]/}}});
     $('#celular').mask('(xx) xxxxx-xxxx', {'translation': {x: {pattern: /[0-9]/}}});
     $('#documento').mask('xxx.xxx.xxx-xx', {'translation': {x: {pattern: /[0-9]/}}});
     $('#rg').mask('xx.xxx.xxx-xx', {'translation': {x: {pattern: /[0-9]/}}});
     $('#cep').mask('xxxxx-xxx', {'translation': {x: {pattern: /[0-9]/}}});
     $('#valor_causa').mask('###.###.###.##x,xx', {'translation': {x: {pattern: /[0-9]/}}, 'reverse': true});     

     function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#municipio").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("...");
                        $("#municipio").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#municipio").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
});
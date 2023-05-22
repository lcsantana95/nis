jQuery('form#nis-form-1').on('submit', function(){
    var dados = jQuery('form#nis-form-1').serialize();

    if (dados.indexOf("full-name=") !== -1) {
        var nome = decodeURIComponent(dados.split("full-name=")[1]);
        nome = nome.trim();
        
        if (nome.length > 2 && nome.charAt(0) === nome.charAt(0).toUpperCase()) {

            jQuery.ajax({
                type: 'POST',
                url: '/controller/cadastro-nis.php',
                data: { dados: dados },
                success: function(data){
                    var result = $.parseJSON(data);
                    // Se tiver salvado no Banco de Dados
                        swal({html: "Você foi cadastrado no NIS: " + result.nis, type: "success"});
                }
            });
        } else {
            swal({html: "Nome inválido. O nome deve ter mais de 3 letras e começar com letra maiúscula!", type: "error"});
        }
    }

    return false;
});


jQuery('form#nis-form-2').on('submit', function(){
    var dados = jQuery('form#nis-form-2').serialize();

    if (dados.indexOf("nis-number=") !== -1) {
        var nisNumber = decodeURIComponent(dados.split("nis-number=")[1]);
        nisNumber = nisNumber.trim();

        if (nisNumber.length === 11 && /^\d+$/.test(nisNumber)) {

            jQuery.ajax({
                type: 'POST',
                url: '/controller/consulta-nis.php',
                data: { dados: dados },
                success: function(data){
                    var result = $.parseJSON(data);
                    // Se tiver salvado no Banco de Dados
                    if (result.nome) {
                        swal({html: "NIS encontrado, seu nome é: " + result.nome, type: "success"});
                    } else {
                        swal({html: "Cidadão não encontrado", type: "info"});
                    }
                }
            });
        } else {
            swal({html: "Número de NIS inválido. Deve conter exatamente 11 dígitos!", type: "error"});
        }
    }

    return false;
});
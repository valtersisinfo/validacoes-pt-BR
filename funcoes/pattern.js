$(document).ready(function()
{
  $("#cpf").mask("000.000.000-00", {'translation': {0: {pattern: /[0-9*]/}}});
  $("#cnpj").mask("00.000.000/0000-00", {'translation': {0: {pattern: /[0-9*]/}}});
  $("#telefone").mask("(00)0000-0000", {'translation': {0: {pattern: /[0-9*]/}}});
  $("#celular").mask("(00)00000-0000", {'translation': {0: {pattern: /[0-9*]/}}});
  $("#cep").mask("00000-000", {'translation': {0: {pattern: /[0-9*]/}}});

  $("#cpf").on("keyup", function()
  {
    // Obtem o CPF e remove os . e os -
    var cpf = $(this).val();
    while (cpf.indexOf(".") != -1) cpf = cpf.replace(".", '');
    while (cpf.indexOf("-") != -1) cpf = cpf.replace("-", '');
    var valido = true;
    if (cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999" ||
        cpf == "" ||
        cpf.length != 11) valido = false;
    else {
      var soma;
      var resto;
      soma = 0;
      for (i=1; i<=9; i++) soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
      resto = (soma * 10) % 11;
      if ((resto == 10) || (resto == 11))  resto = 0;
      if (resto != parseInt(cpf.substring(9, 10)) ) valido = false;
      soma = 0;
      for (i = 1; i <= 10; i++) soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
      resto = (soma * 10) % 11;
      if ((resto == 10) || (resto == 11))  resto = 0;
      if (resto != parseInt(cpf.substring(10, 11) ) ) valido = false;
    }
    if (valido) {
      $(this).addClass("is-valid");
      $(this).removeClass("is-invalid");
    }
    else{
      $(this).removeClass("is-valid");
      $(this).addClass("is-invalid");
    }
  });

  $("#cnpj").on("keyup", function()
  {
    var cnpj = $(this).val();
    while (cnpj.indexOf(".") != -1) cnpj = cnpj.replace(".", '');
    while (cnpj.indexOf("/") != -1) cnpj = cnpj.replace("/", '');
    while (cnpj.indexOf("-") != -1) cnpj = cnpj.replace("-", '');
    var valido = true;
    if (cnpj == "00000000000000" ||
      cnpj == "11111111111111" ||
      cnpj == "22222222222222" ||
      cnpj == "33333333333333" ||
      cnpj == "44444444444444" ||
      cnpj == "55555555555555" ||
      cnpj == "66666666666666" ||
      cnpj == "77777777777777" ||
      cnpj == "88888888888888" ||
      cnpj == "99999999999999" ||
      cnpj == "" ||
      cnpj.length != 14) valido = false;
    else {
      tamanho = cnpj.length - 2;
      numeros = cnpj.substring(0,tamanho);
      digitos = cnpj.substring(tamanho);
      soma = 0;
      pos = tamanho - 7;
      for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2) pos = 9;
      }
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(0)) valido = false;
      tamanho = tamanho + 1;
      numeros = cnpj.substring(0,tamanho);
      soma = 0;
      pos = tamanho - 7;
      for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2) pos = 9;
      }
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(1)) valido = false;
    }
    if (valido) {
      $(this).addClass("is-valid");
      $(this).removeClass("is-invalid");
    }
    else{
      $(this).removeClass("is-valid");
      $(this).addClass("is-invalid");
    }
  });

  $("#cep").on("keyup", function()
  {
    cep = cnpj = $(this).val();
    while (cep.indexOf("-") != -1) cep = cep.replace("-", '');
    valido = true;
    if (cep == "" || cep.length != 8) valido = false;
    else
    {
      $.ajax({
        url: "https://viacep.com.br/ws/"+ cep + "/json/",
        type: "GET",
        dataType: "json",
        success: function(data)
        {
          $("#pais").val(data.erro == undefined ? "Brasil" : "");
          $("#estado").val(data.erro == undefined ? data.uf : "");
          $("#cidade").val(data.erro == undefined ? data.localidade : "");
          $("#bairro").val(data.erro == undefined ? data.bairro : "");
          $("#complemento").val(data.erro == undefined ? data.complemento : "");
          $("#unidade").val(data.erro == undefined ? data.unidade : "");
          $("#logradouro").val(data.erro == undefined ? data.logradouro : "");
          $("#gia").val(data.erro == undefined ? data.gia : "");
          $("#ibge").val(data.erro == undefined ? data.ibge : "");
        }
      });
    }
  });

  var data = new Date();

  var dia = data.getDate() < 10 ? "0" + data.getDate() : data.getDate();
  var mes = data.getMonth() < 10 ? "0" + data.getMonth() : data.getMonth();
  var ano = data.getFullYear();

  var primeiroDiaDoAno = new Date(data.getFullYear(),0,1);
  var milissegundosNoDia = 86400000;
  var semana = Math.ceil((((data - primeiroDiaDoAno) / milissegundosNoDia) + primeiroDiaDoAno.getDay()+1)/7);

  var horas = data.getHours() < 10 ? "0" + data.getHours() : data.getHours();
  var minutos = data.getMinutes() < 10 ? "0" + data.getMinutes() : data.getMinutes();
  var segundos = data.getSeconds() < 10 ? "0" + data.getSeconds() : data.getSeconds();

  $("#mes").val(ano + "-" + (parseInt(mes) + 1));
  $("#semana").val(ano + "-W" + semana);
  $("#datahora").val(ano + "-" + mes + "-" + dia + "T" + horas + ":" + minutos);
  $("#data").val(ano + "-" + mes + "-" + dia);
  $("#hora").val(horas + ":" + minutos);

  $("#input").on("keyup", function(event){
    $("#enviar").trigger("click");
  });

  // Função para chamar submit sem atualizar a página
  $("#enviar").on("click", function(event){
    event.preventDefault();
    for (var i = 0; i < $('form input').length; i++) {
      if (!$('input').get(i).checkValidity())
      {
        $($('input').get(i)).addClass("is-invalid");
        $($('span').get(i)).addClass("is-invalid");
        $('.is-invalid').focus();
        $($('span').get(i)).html($('input')[i].validationMessage);
        return;
      }
      else
      {
        $('input, span').removeClass("is-invalid");
        $('input, span').html("");
      }
    }/**/
  });

});



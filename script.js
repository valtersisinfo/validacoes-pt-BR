$(document).ready(function() {

  // Configurando máximo e mínimo do campo Data de Nascimento
  var hoje = new Date(); // Hoje
  var passado = new Date(); // Passado
  passado.setFullYear(hoje.getFullYear() - 122); // Idade da Jeanne Calment - Pessoa mais velha do mundo
  $("#iDataNascimento").attr("min", passado.getFullYear() + "-" + (passado.getMonth() + 1) + "-" + passado.getDate());
  $("#iDataNascimento").attr("max", hoje.getFullYear() + "-" + (hoje.getMonth() + 1) + "-" + hoje.getDate());

  $("#iDataNascimento").on("change", function()
  {
    var digitado = $(this).val();
    if (digitado != "")
    {
      var aniversario = new Date(digitado.split("-")[0], digitado.split("-")[1] - 1, digitado.split("-")[2]);
      var idade = hoje.getFullYear() - aniversario.getFullYear();

      if (hoje.getMonth() + 1 <= aniversario.getMonth() + 1 && hoje.getDate() < aniversario.getDate()) {
        idade--;
      }
      $("#iIdade").val(idade);
    }
  });

  // Mascara do CPF
  $("#iCpf").mask("000.000.000-00", {"translation": {0: {pattern: /[0-9]/}}});

  // Validação do CPF
  $("#iCpf").on("keyup", function() {
    // Recebe o CPF
    var cpf = $(this).val();
    // Elimina os pontos e os traços
    while (cpf.indexOf(".") != -1) cpf = cpf.replace(".", "");
    while (cpf.indexOf("-") != -1) cpf = cpf.replace("-", "");
    // Valida se o CPF possui 11 dígitos
    var valido = cpf.length == 11;
    // Se tiver 11 dígitos é feito a validação do CPF
    if (valido) {
      for (var i = 0; i <= 9; i++) {
        var invalido = "";
        for (var j = 0; j < 11; j++) invalido += String(i);
        if (cpf == invalido) valido = false;
      }
      if (valido) {
        var soma = 0;
        var resto;
        for (var k = 1; k <= 9 ; k++) soma = soma + parseInt(cpf.substring(k - 1, k)) * (11 - k);
        resto = (soma * 10) % 11;
        if ((resto == 10) || (resto == 11)) resto = 0;
        if (resto != parseInt(cpf.substring(9, 10)) ) valido = false;
        if (valido) {
          soma = 0;
          for (l = 1; l <= 10; l++) soma = soma + parseInt(cpf.substring(l - 1, l)) * (12 - l);
          resto = (soma * 10) % 11;
          if ((resto == 10) || (resto == 11))  resto = 0;
          if (resto != parseInt(cpf.substring(10, 11))) valido = false;
        }
      }
    }
    // Parte responsável por enviar resultado para o HTML
    if (valido) {
      $(this).addClass("is-valid");
      $(this).removeClass("is-invalid");
    } else {
      $(this).removeClass("is-valid");
      $(this).addClass("is-invalid");
    }
  });

  // Máscara do CNPJ
  $("#iCnpj").mask("00.000.000/0000-00", {"translation": {0: {pattern: /[0-9]/}}});

  // Validação do CNPJ
  $("#iCnpj").on("keyup", function() {
    // Recebe o CNPJ
    var cnpj = $(this).val();
    // Elimina os pontos, as barras e os traços
    while (cnpj.indexOf(".") != -1) cnpj = cnpj.replace(".", "");
    while (cnpj.indexOf("/") != -1) cnpj = cnpj.replace("/", "");
    while (cnpj.indexOf("-") != -1) cnpj = cnpj.replace("-", "");
    // Valida se o CNPJ possui 14 dígitos
    var valido = cnpj.length == 14;
    // Se tiver 14 dígitos é feito a validação do CNPJ
    if (valido) {
      for (var i = 0; i <= 9; i++) {
        var invalido = "";
        for (var j = 0; j < 14; j++) invalido += String(i);
        if (cnpj == invalido) valido = false;
      }
      if (valido) {
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
        if (valido) {
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
      }
    }
    // Parte responsável por enviar resultado para o HTML
    if (valido) {
      $(this).addClass("is-valid");
      $(this).removeClass("is-invalid");
    }
    else {
      $(this).removeClass("is-valid");
      $(this).addClass("is-invalid");
    }
  });

  // Máscara do Telefone
  $("#iTelefone").mask("(00) 0000-0000", {"translation": {0: {pattern: /[0-9]/}}});

  // Máscara do Celular
  $("#iCelular").mask("(00) 00000-0000", {"translation": {0: {pattern: /[0-9]/}}});

  // Criar máscara no evento focus que serve para Celular e/ou Fixo
  $("#iTelefoneX").on("focus", function() {
    $(this).mask("(00) 0000-0000Z", {"translation": {0: {pattern: /[0-9*]/}, "Z": {pattern: /[0-9*]/,optional: true}}});
  });

  // Evento para alterar máscara ao deixar o input e arrumar celuar e ou telefone fixo
  $("#iTelefoneX").on("blur", function() {
    if ($(this).val().length <= 14) $(this).mask("(00) 0000-0000", {"translation": {0: {pattern: /[0-9]/}}});
    else $(this).mask("(00) 00000-0000", {"translation": {0: {pattern: /[0-9]/}}});
  });


  $("#iCep").mask("00000-000", {"translation": {0: {pattern: /[0-9*]/}}});

  $("#iCep").on("keyup", function() {
    // Recebe o CEP
    var cep = $(this).val();
    // Elimina os traços
    while (cep.indexOf("-") != -1) cep = cep.replace("-", "");
    // Valida se o CEP possui 8 dígitos
    var valido = cep.length == 8;
    if (valido)
    {
      for (var i = 0; i <= 9; i++) {
        var invalido = "";
        for (var j = 0; j < 8; j++) invalido += String(i);
        if (cep == invalido) valido = false;
      }
      if (valido) {
        $.ajax({
          url: "https://viacep.com.br/ws/"+ cep + "/json/",
          type: "GET",
          dataType: "json",
          success: function(data) {
            if (data.erro == undefined) {
              $("#iPais").val("Brasil");
              $("#sEstado option[value='"+data.uf+"']").prop("selected", true);
              $("#iEstado").val(data.uf);
              $("#iCidade").val(data.localidade);
              $("#iBairro").val(data.bairro);
              $("#iComplemento").val(data.complemento);
              $("#iUnidade").val(data.unidade);
              $("#iLogradouro").val(data.logradouro);
              $("#iGia").val(data.gia);
              $("#iIbge").val(data.ibge);
              $("#iCep").removeClass("is-invalid");
              $("#iCep").addClass("is-valid");
            } else {
              $("#iCep").removeClass("is-valid");
              $("#iCep").addClass("is-invalid");
              $("#sEstado option:nth-child(1)").prop("selected", true);
              $(".viacep").val("");
            }
          }
        });
      } else {
        $(this).removeClass("is-valid");
        $(this).addClass("is-invalid");
      }
    }
  });

  // Máscara do Estado com 2 dígitos
  $("#iEstado").mask("SS", {"translation": {"S": {pattern: /[A-z]/}}});

  // Passa tudo o que for digitado para MAIÚSCULO
  $("#iEstado").on("keyup", function() {
    $(this).val($(this).val().toUpperCase());
  });

  // Para configurar os dados com a data de hoje
  var data = new Date();
  var dia = data.getDate() < 10 ? "0" + data.getDate() : data.getDate();
  var mes = parseInt(data.getMonth()) + 1 < 10 ? "0" + (parseInt(data.getMonth()) + 1) : (parseInt(data.getMonth()) + 1);
  var ano = data.getFullYear();

  var primeiroDiaDoAno = new Date(data.getFullYear(),0,1);
  var milissegundosNoDia = 86400000;
  var semana = Math.ceil((((data - primeiroDiaDoAno) / milissegundosNoDia) + primeiroDiaDoAno.getDay()+1)/7);

  var horas = data.getHours() < 10 ? "0" + data.getHours() : data.getHours();
  var minutos = data.getMinutes() < 10 ? "0" + data.getMinutes() : data.getMinutes();
  var segundos = data.getSeconds() < 10 ? "0" + data.getSeconds() : data.getSeconds();

  $("#iMes").val(ano + "-" + mes);
  $("#iSemana").val(ano + "-W" + semana);
  $("#iDataHora").val(ano + "-" + mes + "-" + dia + "T" + horas + ":" + minutos);
  $("#iData").val(ano + "-" + mes + "-" + dia);
  $("#iHora").val(horas + ":" + minutos);

  // Atualizar nota no label
  $("#iClassificar").on("change", function()
  {
    $("#sClassificar").html($(this).val());
  });

  // Atualizar cor no label
  $("#iCor").on("change", function()
  {
    $("#sCor").html($(this).val());
  });


  $("body").on("keyup", "input.numero", function(e) {
    if (e.key == "-" ||
      e.key == "+" ||
      e.key == "." ||
      e.key == "," ||
      $.isNumeric(e.key) ||
      e.key == " " ||
      e.key == "Tab" ||
      e.key == "CapsLock" ||
      e.key == "Shift" ||
      e.key == "Enter" ||
      e.key == "Backspace" ||
      e.key == "Delete" ||
      e.key == "PageDown" ||
      e.key == "PageUp" ||
      e.key == "ArrowRight" ||
      e.key == "ArrowLeft" ||
      e.key == "ArrowUp" ||
      e.key == "ArrowDown" ||
      e.key == "End" ||
      e.key == "Home" ||
      e.key == "Control") {
      if (e.key == " ") $(this).val($(this).val().replace(e.key, ""));

      var VArray = [], VString = "";

      if ($(this).attr("class").indexOf("inteiro") != "-1") {
        $(this).val($(this).val().replace(".", ""));
        $(this).val($(this).val().replace(",", ""));
      } else {
        $(this).val($(this).val().replace(",", "."));
        // Verifica se existe mais de um .
        if (e.key == "." || e.key == ",") {
          VArray = $(this).val().split(".");
          if (VArray.length > 2) {
            for (var i = VArray.length - 1; i >= 1; i--)
              VString = VArray[i] + VString;
            VString = VArray[0] + "." + VString;
            $(this).val(VString);
          }
        }
      }

      if ($(this).attr("negativo") == "false" && parseFloat($(this).val()) < 0)
        $(this).val(parseFloat($(this).val()) * (-1));
      else if (e.key == "-" || e.key == "+") {
        $(this).val($(this).val().replace("+", ""));
        VArray = $(this).val().split("-");

        if ($(this).val().indexOf("-") != -1)
        {
          VString = "";
          for (var j = VArray.length - 1; j >= 0; j--)
            VString = VArray[j] + VString;
          var VSinal = $(this).val().indexOf("-") == 0 ? "-" : "";
          VString = VSinal + VString;
          $(this).val(VString);
        }
      }
    }
    else
    {
      $(this).val($(this).val().replace(e.key, ""));
    }
  });

  $("body").on("focusout", "input.numero", function()
  {
    if ($(this).attr("decimal") != undefined)
      $(this).val((Math.floor($(this).val() * Math.pow(10, $(this).attr("decimal"))) / Math.pow(10, $(this).attr("decimal"))).toFixed($(this).attr("decimal")));
  });

  // Função para chamar submit sem atualizar a página se estiver tudo OKAY
  $("#bEnviar").on("click", function(event){
    var valido = true;
    for (var i = 0; i < $("form input").length; i++)
      if (!$("input").get(i).checkValidity()) valido = false;
    if (valido) event.preventDefault();
  });

});



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Metas requeridos -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Validações em português(Brasil)</title>
  <!-- JQuery 3.3.1.min -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <!-- jquery.mask 1.14.15.min -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <!-- Bootstrap CSS 4.1.3.min -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Popper JS 1.14.3.min -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- Bootstrap JS 4.1.3.min -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Para complementar os pattern -->
  <script src="script.js" type="text/javascript" charset="utf-8" async defer></script>
  <!-- Para complementar o css dos pattern -->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xs-4 mx-auto">

        <div class="card border border-dark">
          <div class="card-header bg-danger text-white font-weight-bold text-center p-1">
            Validações em português
          </div>
          <div class="card-body p-1">
            <form class="form-group was-validated text-sm-right container-fluid mb-0">
              <!-- Pattern/Required para nomes ou apenas letras A-z À-ú -->
              <div class="row mb-1">
                <label id="lNome" for="iNome" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Nome:</label>
                <div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-8">
                  <input id="iNome" class="form-control form-control-sm form-check-input mt-0" type="text" pattern="[A-zÀ-ú\s]+$" required title="Digite o nome completo!">
                </div>
              </div>

              <!-- Pattern/Required para data de nascimento -->
              <div class="row mb-1">
                <label id="lDataNascimento" for="iDataNascimento" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Data de Nascimento:</label>
                <div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-8">
                  <input id="iDataNascimento" class="form-control form-control-sm form-check-input mt-0" type="date" required title="Digite a data!">
                </div>
              </div>

              <!-- Pattern/Required para idade ou números inteiros -->
              <div class="row mb-1">
                <label id="lIdade" for="iIdade" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Idade:</label>
                <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                  <input id="iIdade" class="form-control form-control-sm form-check-input mt-0" type="number" min="0" max="200" step="1" pattern="[0-9^,^.^-^+]+$" required title="Digite sua idade!">
                </div>
              </div>

              <!-- Pattern/Required/Mask para CPF com JQuery Mask-->
              <div class="row mb-1">
                <label id="lCpf" for="iCpf" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">CPF:</label>
                <div class="col-6 col-sm-4 col-xl-3">
                  <input id="iCpf" class="form-control form-control-sm form-check-input mt-0" type="text" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required title="Digite o CPF no formato NNN.NNN.NNN-NN!">
                </div>
              </div>
              <!-- Pattern/Required/Mask para CNPJ com JQuery Mask-->
              <div class="row mb-1">
                <label id="lCnpj" for="iCnpj" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">CNPJ:</label>
                <div class="col-6 col-sm-5 col-xl-4">
                  <input id="iCnpj" class="form-control form-control-sm form-check-input mt-0" type="text" pattern="\d{2}\.\d{3}\.\d{3}/\d{4}.\d{2}" required title="Digite o CNPJ no formato NN.NNN.NNN/NNNN-NN!">
                </div>
              </div>
              <!-- Pattern/Required para Email -->
              <div class="row mb-1">
                <label id="lEmail" for="iEmail" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Email:</label>
                <div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-8">
                  <input id="iEmail" class="form-control form-control-sm form-check-input mt-0" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Digite o email!">
                </div>
              </div>
              <!-- Pattern/Required para senha - Mínimo de 1 letra minúscula, 1 letra maíuscula, 1 número e 6 caracteres -->
              <div class="row mb-1">
                <label id="lSenha" for="iSenha" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Senha:</label>
                <div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-8">
                  <input id="iSenha" class="form-control form-control-sm form-check-input mt-0" type="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W+)(?=^.{6,}$).*$" required title="Digite no mínimo uma letra minúscula, uma maiúscula, um número e um caracter especial, com no mínimo 6 caracteres!">
                </div>
              </div>
              <!-- Pattern/Required/Mask para telefone com 8 dígitos -->
              <div class="row mb-1">
                <label id="lTelefone" for="iTelefone" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Telefone:</label>
                <div class="col-6 col-sm-4 col-xl-3">
                  <input id="iTelefone" class="form-control form-control-sm form-check-input mt-0" type="tel" pattern="\(\d{2}\) \d{4}-\d{4}$" required title="Digite o telefone no formato (NN)NNNN-NNNN!">
                </div>
              </div>
              <!-- Pattern/Required/Mask para telefone com 9 dígitos -->
              <div class="row mb-1">
                <label id="lCelular" for="iCelular" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Celular:</label>
                <div class="col-6 col-sm-4 col-xl-3">
                  <input id="iCelular" class="form-control form-control-sm form-check-input mt-0" type="tel" pattern="\(\d{2}\) \d{5}-\d{4}$" required title="Digite o celular no formato (NN)NNNNNN-NNNN!">
                </div>
              </div>
              <!-- Pattern/Required/Mask para telefone com 9 ou 8 dígitos -->
              <div class="row mb-1">
                <label id="lTelefoneX" for="iTelefoneX" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Telefone ou Celular:</label>
                <div class="col-6 col-sm-4 col-xl-3">
                  <input id="iTelefoneX" class="form-control form-control-sm form-check-input mt-0" type="tel" pattern="\(\d{2}\) \d{4,5}-\d{4,5}$" required title="Digite o celular no formato (nn)nnnnn-nnnn ou (nn)nnnn-nnnn!">
                </div>
              </div>
              <!-- Pattern/Required para CEP -->
              <div class="row mb-1">
                <label id="lCep" for="iCep" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Cep:</label>
                <div class="col-6 col-sm-3 col-xl-2">
                  <input id="iCep" class="form-control form-control-sm form-check-input mt-0" type="text" pattern="\d{5}-\d{3}" required title="Digite o número do CEP no formato NNNNN-NNN!">
                </div>
              </div>
              <!-- Pattern/Required para país -->
              <div class="row mb-1">
                <label id="lPais" for="iPais" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">País:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <input id="iPais" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[A-zÀ-ú \s]+$" required title="Digite o nome do País!">
                </div>
              </div>
              <!-- Required para estado -->
              <div class="row mb-1">
                <label id="lEstado" for="sEstado" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Escolher Estado:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <select id="sEstado" class="form-control form-control-sm form-check-input mt-0 pl-1" required title="Escolha um estado!">
                    <option value="" selected disabled></option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>
              <!-- Pattern/Required/Mask para estado -->
              <div class="row mb-1">
                <label id="lEstado" for="iEstado" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Digitar Estado:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <input id="iEstado" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[A-Z]{2}" required title="Digite as siglas do estado no formato LL!">
                </div>
              </div>
              <!-- Pattern/Required para cidade -->
              <div class="row mb-1">
                <label id="lCidade" for="iCidade" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Cidade:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <input id="iCidade" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[A-zÀ-ú \p{P} \s]+$" required title="Digite o nome da cidade!">
                </div>
              </div>
              <!-- Pattern/Required para bairro -->
              <div class="row mb-1">
                <label id="lBairro" for="iBairro" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Bairro:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <input id="iBairro" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[A-zÀ-ú0-9 \p{P} \s]+$" required title="Digite o nome do bairro!">
                </div>
              </div>
              <!-- Pattern para complemento -->
              <div class="row mb-1">
                <label id="lComplemento" for="iComplemento" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Complemento:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <input id="iComplemento" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[A-zÀ-ú0-9 \p{P} \s]+$" title="Digite o complemento!">
                </div>
              </div>
              <!-- Pattern para unidade -->
              <div class="row mb-1">
                <label id="lUnidade" for="iUnidade" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Unidade:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <input id="iUnidade" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[A-zÀ-ú0-9 \p{P} \s]+$" title="Digite a unidade!">
                </div>
              </div>
              <!-- Pattern/Required para logradouro -->
              <div class="row mb-1">
                <label id="lLogradouro" for="iLogradouro" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Logradouro:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <input id="iLogradouro" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[A-zÀ-ú0-9 \p{P} \s]+$" required title="Digite o logradouro!">
                </div>
              </div>
              <!-- Pattern para unidade -->
              <div class="row mb-1">
                <label id="lNumero" for="iNumero" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Número:</label>
                <div class="col-6 col-sm-2 col-xl-2">
                  <input id="iNumero" class="form-control form-control-sm form-check-input mt-0" type="text" pattern="[0-9^,^.^-^+]+$" title="Digite o número!">
                </div>
              </div>
              <!-- Pattern para GIA -->
              <div class="row mb-1">
                <label id="lGia" for="iGia" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">GIA:</label>
                <div class="col-6 col-sm-2 col-xl-2">
                  <input id="iGia" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[0-9^,^.^-^+]+$" title="Digite o GIA!">
                </div>
              </div>
              <!-- Pattern para IBGE -->
              <div class="row mb-1">
                <label id="lIbge" for="iIbge" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">IBGE:</label>
                <div class="col-6 col-sm-3 col-xl-2">
                  <input id="iIbge" class="form-control form-control-sm form-check-input viacep mt-0" type="text" pattern="[0-9^,^.^-^+]+$" title="Digite o código do IBGE!">
                </div>
              </div>
              <!-- Pattern/Required para URL -->
              <div class="row mb-1">
                <label id="lUrl" for="iUrl" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">URL:</label>
                <div class="col-6 col-sm-5 col-md-7 col-xl-8">
                  <input id="iUrl" class="form-control form-control-sm form-check-input mt-0" type="text" pattern="<?php
                    $pattern = '((https?|ftp)://)?'; // SCHEME
                    $pattern .= '([a-z0-9+!*(),;?&=$_.-]+(:[a-z0-9+!*(),;?&=$_.-]+)?@)?'; // User and Pass
                    $pattern .= '([a-z0-9\-\.]*)\.(([a-z]{2,4})|([0-9]{1,3}\.([0-9]{1,3})\.([0-9]{1,3})))'; // Host or IP
                    $pattern .= '(:[0-9]{2,5})?'; // Port
                    $pattern .= '(/([a-z0-9+$_%-]\.?)+)*/?'; // Path
                    $pattern .= '(\?[a-z+&\$_.-][a-z0-9;:@&%=+/$_.-]*)?'; // GET Query
                    $pattern .= '(#[a-z_.-][a-z0-9+$%_.-]*)?'; // Anchor
                    echo $pattern;
                  ?>" required title="Digite uma URL válida!">
                </div>
              </div>
              <!-- Required para Busca -->
              <div class="row mb-1">
                <label id="lBusca" for="iBusca" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Busca:</label>
                <div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-8">
                  <input id="iBusca" name="q" class="form-control form-control-sm form-check-input mt-0" type="search" required title="Digite o que deseja procurar!">
                </div>
              </div>
               <!-- Inputs que não precisam de pattern -->
              <!-- Required para Mês -->
              <div class="row mb-1">
                <label id="lMes" for="iMes" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Mês:</label>
                <div class="col-6 col-sm-6 col-xl-5">
                  <input id="iMes" class="form-control form-control-sm form-check-input mt-0" type="month" required title="Digite o mês!">
                </div>
              </div>

              <!-- Required para Semana -->
              <div class="row mb-1">
                <label id="lSemana" for="iSemana" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Semana:</label>
                <div class="col-6 col-sm-6 col-xl-5">
                  <input id="iSemana" class="form-control form-control-sm form-check-input mt-0" type="week" required title="Digite a semana!">
                </div>
              </div>

              <!-- Required para Data e Hora -->
              <div class="row mb-1">
                <label id="lDataHora" for="iDataHora" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Data e hora:</label>
                <div class="col-6 col-sm-6 col-xl-5">
                  <input id="iDataHora" class="form-control form-control-sm form-check-input mt-0" type="datetime-local" required title="Digite a data e a hora!">
                </div>
              </div>

              <!-- Required para Data -->
              <div class="row mb-1">
                <label id="lData" for="iData" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Data:</label>
                <div class="col-6 col-sm-5 col-xl-4">
                  <input id="iData" class="form-control form-control-sm form-check-input mt-0" type="date" required title="Digite a data!">
                </div>
              </div>

              <!-- Required para Hora -->
              <div class="row mb-1">
                <label id="lHora" for="iHora" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Hora:</label>
                <div class="col-6 col-sm-3 col-xl-2">
                  <input id="iHora" class="form-control form-control-sm form-check-input mt-0" type="time" required title="Digite a hora!">
                </div>
              </div>

              <!-- Input sem Required e Pattern-->
              <!-- input[type="range"] -->
              <div class="row mb-1">
                <label id="lClassificar" for="iClassificar" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Classificar (<span id="sClassificar">9</span>):</label>
                <div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-8">
                  <input id="iClassificar" class="form-control form-control-sm form-check-input form-control-range mt-0" type="range" min="0" max="10" value="9" title="Escolha uma nota!">
                </div>
              </div>

              <!-- input[type="color"] -->
              <div class="row mb-1">
                <label id="lCor" for="iCor" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Cor: (<span id="sCor">#000000</span>)</label>
                <div class="col-6 col-sm-6 col-md-7 col-lg-7 col-xl-8">
                  <input id="iCor" class="form-control form-control-sm form-check-input mt-0 px-1 py-0" type="color" title="Escolha uma cor!">
                </div>
              </div>

              <!-- Pattern/Required para números inteiros -->
              <div class="row mb-1">
                <label id="lInteiro" for="iInteiro" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Inteiro:</label>
                <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                  <input id="iInteiro" class="form-control form-control-sm form-check-input mt-0 numero inteiro" type="text" negativo="true" pattern="[0-9-]+" required title="Digite um número inteiro!">
                </div>
              </div>

              <!-- Pattern/Required para números positivos -->
              <div class="row mb-1">
                <label id="lPositivo" for="iPositivo" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Positivo:</label>
                <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                  <input id="iPositivo" class="form-control form-control-sm form-check-input mt-0 numero inteiro" type="text" negativo="false" pattern="[0-9]+$" min="0" required title="Digite um número positivo!">
                </div>
              </div>

              <div class="row mb-1">
                <label id="lDecimal2" for="iDecimal2" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Decimal (2):</label>
                <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                  <input id="iDecimal2" class="form-control form-control-sm form-check-input mt-0 numero real" decimal="2" type="text" negativo="true" pattern="[0-9+--,.]+$" min="0" required title="Digite um decimal com duas casas!">
                </div>
              </div>

              <div class="row mb-1">
                <label id="lDecimal3" for="iDecimal3" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Decimal (3):</label>
                <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                  <input id="iDecimal3" class="form-control form-control-sm form-check-input mt-0 numero real" decimal="3" type="text" negativo="true" pattern="[0-9+--,.]+$" min="0" required title="Digite um decimal com três casas!">
                </div>
              </div>

              <div class="row mb-1">
                <label id="lDecimalN" for="iDecimalN" class="col-form-label col-form-label-sm col-6 col-sm-6 col-md-5 col-lg-5 col-xl-4">Decimal (&infin;):</label>
                <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                  <input id="iDecimalN" class="form-control form-control-sm form-check-input mt-0 numero real" type="text" negativo="true" pattern="[0-9+--,.]+$" min="0" required title="Digite um número que contenha decimais!">
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-12 px-2">
                  <button id="bEnviar" class="btn btn-sm btn-outline-dark btn-block" type="submit">Enviar</button>
                </div>
              </div>

            </form>
          </div>
          <div class="card-footer bg-warning font-weight-bold text-center p-0">
            <small>Feito por <span class="font-italic">Valter Junior</span></small>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Validações em português(Brasil)</title>
  <script src="biblioteca/jquery-3.3.1.min.js"></script>
  <script src="biblioteca/jquery.mask.js"></script>
  <script src="funcoes/pattern.js"></script>
  <link rel="stylesheet" href="pattern.css">
</head>
<body>
  <form>
    <!-- Pattern para apenas letras A-z À-ú -->
    <p>Nome: <input id="nome" type="text" pattern="[A-zÀ-ú\s]+$" required title="Digite o nome completo"><span></span></p>
    <!-- Pattern para número inteiros -->
    <p>Idade: <input id="idade" type="number" min="0" max="200" step="1" pattern="[0-200^,^.^-^+]" required title="Digite a idade"><span></span></p>
    <!-- Pattern para CPF -->
    <p>CPF: <input id="cpf" type="text" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required title="Digite o CPF no formato nnn.nnn.nnn-nn"><span></span></p>
    <!-- Pattern para CNPJ -->
    <p>CNPJ: <input id="cnpj" type="text" pattern="\d{2}\.\d{3}\.\d{3}/\d{4}.\d{2}" required title="Digite o CNPJ no formato nn.nnn.nnn/nnnn-nn"><span></span></p>
    <!-- Pattern para email -->
    <p>Email: <input id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Digite o e-mail"><span></span></p>
    <!-- Pattern para senha -->
    <p>Senha: <input id="senha" type="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W+)(?=^.{6,}$).*$" required title="Digite no mínimo uma letra minúscula, uma maiúscula, um número e um caracter especial, com no mínimo 6 caracteres"><span></span></p>
    <!-- Pattern para telefone com 8 dígitos -->
    <p>Telefone: <input id="telefone" type="tel" pattern="\(\d{2}\)\d{4}-\d{4}$" required title="Digite o telefone no formato (nn)nnnn-nnnn"><span></span></p>
    <!-- Pattern para telefone com 8 ou 9 dígitos -->
    <p>Celular: <input id="celular"type="tel" pattern="\(\d{2}\)\d{4,5}-\d{4}$" required title="Digite o celular no formato (nn)nnnnn-nnnn ou (nn)nnnn-nnnn"><span></span></p>
    <!-- Pattern para CEP -->
    <p>CEP: <input id="cep" type="text" pattern="\d{5}-\d{3}" required title="Digite o CEP no formato nnnnn-nnn"><span></span></p>
    <!-- Pattern para país -->
    <p>País: <input id="pais" type="text" pattern="[A-zÀ-ú \s]+$" required title="Digite o país"><span></span></p>
    <!-- Pattern para estado -->
    <p>Estado: <input id="estado" type="text" pattern="[A-Z]{2}" required title="Digite o estado"><span></span></p>
    <!-- Pattern para cidade -->
    <p>Cidade: <input id="cidade" type="text" pattern="[A-z À-ú\p{P}\s]+$" required title="Digite a cidade"><span></span></p>
    <!-- Pattern para bairro -->
    <p>Bairro: <input id="bairro" type="text" pattern="[A-zÀ-ú \p{P} \s]+$" required title="Digite o bairro"><span></span></p>
    <!-- Pattern para complemento -->
    <p>Complemento: <input id="complemento" type="text" pattern="[A-zÀ-ú \p{P} \s]+$" required title="Digite o complemento"><span></span></p>
    <!-- Pattern para unidade -->
    <p>Unidade: <input id="unidade" type="text" pattern="[A-zÀ-ú0-9 \p{P} \s]+$" required title="Digite o complemento"><span></span></p>
    <!-- Pattern para rua -->
    <p>Logradouro: <input id="logradouro" type="text" pattern="[A-zÀ-ú \p{P} \s]+$" required title="Digite o logradouro"><span></span></p>
    <!-- Pattern para número inteiros -->
    <p>Número: <input id="numero" type="number" step="1" pattern="[0-9^,^.^-^+]$" required title="Digite o número"><span></span></p>
    <!-- Pattern para número inteiros -->
    <p>GIA: <input id="gia" type="number" step="1" pattern="[0-9^,^.^-^+]$" required title="Digite o GIA"><span></span></p>
    <!-- Pattern para número inteiros -->
    <p>IBGE: <input id="ibge" type="number" step="1" pattern="[0-9^,^.^-^+]$" required title="Digite o IBGE"><span></span></p>
    <!-- Pattern para URL -->
    <p>URL: <input id="url" type="link" pattern=
    <?php
      $pattern = '((https?|ftp)://)?'; // SCHEME
      $pattern .= '([a-z0-9+!*(),;?&=$_.-]+(:[a-z0-9+!*(),;?&=$_.-]+)?@)?'; // User and Pass
      $pattern .= '([a-z0-9\-\.]*)\.(([a-z]{2,4})|([0-9]{1,3}\.([0-9]{1,3})\.([0-9]{1,3})))'; // Host or IP
      $pattern .= '(:[0-9]{2,5})?'; // Port
      $pattern .= '(/([a-z0-9+$_%-]\.?)+)*/?'; // Path
      $pattern .= '(\?[a-z+&\$_.-][a-z0-9;:@&%=+/$_.-]*)?'; // GET Query
      $pattern .= '(#[a-z_.-][a-z0-9+$%_.-]*)?'; // Anchor
      echo $pattern;
    ?> required title="Digite a URL"><span></span></p>
    <!-- Inputs que não precisam de pattern -->
    <!-- Pattern para procurar -->
    <p>Procurar: <input id="procurar" type="search" required title="O que deseja procurar?"><span></span></p>
    <!-- Input[type="month"] -->
    <p>Mês: <input id="mes" type="month" required title="Digite o mês"><span></span></p>
    <!-- Input[type="week"] -->
    <p>Semana: <input id="semana" type="week" required title="Digite a semana"><span></span></p>
    <!-- Input[type="datetime-loca"] -->
    <p>Data e hora: <input id="datahora" type="datetime-local" required title="Digite a data e hora"><span></span></p>
    <!-- Input[type="date"] -->
    <p>Data: <input id="data" type="date" required title="Digite a data" max=<?php
      echo date("Y-m-d");
    ?>><span></span></p>
    <!-- Input[type="time"] -->
    <p>Hora: <input id="hora" type="time" title="Digite a hora"><span></span></p>
    <!-- Input[type="range"] -->
    <p>Classificar: <input id="classificar" type="range" min="0" max="10"><span></span></p>
    <!-- Input[type="color"] -->
    <p>Cor: <input id="cor" type="color" min="0" max="10"><span></span></p>
    <button id="enviar" type="submit">Enviar</button><span></span></p>
  </form>
</body>
</html>
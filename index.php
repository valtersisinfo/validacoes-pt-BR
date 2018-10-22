<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Validações em português(Brasil)</title>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="biblioteca/jquery.mask.js"></script>
  <script src="biblioteca/pattern.js"></script>
</head>
<body>
  <form>
    <!-- Pattern para apenas letras A-z À-ú -->
    Nome: <input id="nome" type="text" pattern="[A-zÀ-ú\s]+$" required title="Digite o nome completo"><br>
    <!-- Pattern para número inteiros -->
    Idade: <input id="idade" type="number" min="0" max="200" step="1" pattern="[0-200^,^.^-^+]" required title="Digite a idade"><br>
    <!-- Pattern para CPF -->
    CPF: <input id="cpf" type="text" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required title="Digite o CPF no formato nnn.nnn.nnn-nn"><br>
    <!-- Pattern para CNPJ -->
    CNPJ: <input id="cnpj" type="text" pattern="\d{2}\.\d{3}\.\d{3}/\d{4}.\d{2}" required title="Digite o CNPJ no formato nn.nnn.nnn/nnnn-nn"><br>
    <!-- Pattern para email -->
    Email: <input id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Digite o e-mail"><br>
    <!-- Pattern para senha -->
    Senha: <input id="senha" type="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W+)(?=^.{6,}$).*$" required title="Digite no mínimo uma letra minúscula, uma maiúscula, um número e um caracter especial, com no mínimo 6 caracteres"><br>
    <!-- Pattern para telefone com 8 dígitos -->
    Telefone: <input id="telefone" type="tel" pattern="\(\d{2}\)\d{4}-\d{4}$" required title="Digite o telefone no formato (nn)nnnn-nnnn"><br>
    <!-- Pattern para telefone com 8 ou 9 dígitos -->
    Celular: <input id="celular"type="tel" pattern="\(\d{2}\)\d{4,5}-\d{4}$" required title="Digite o celular no formato (nn)nnnnn-nnnn ou (nn)nnnn-nnnn"><br>
    <!-- Pattern para CEP -->
    CEP: <input id="cep" type="text" pattern="\d{5}-\d{3}" required title="Digite o CEP no formato nnnnn-nnn"><br>
    <!-- Pattern para país -->
    País: <input id="pais" type="text" pattern="[A-zÀ-ú\s]+$" required title="Digite o país"><br>
    <!-- Pattern para estado -->
    Estado: <input id="estado" type="text" pattern="[A-Z]{2}" required title="Digite o estado"><br>
    <!-- Pattern para cidade -->
    Cidade: <input id="cidade" type="text" pattern="[A-zÀ-ú[:punct:]\s]+$" required title="Digite a cidade"><br>
    <!-- Pattern para bairro -->
    Bairro: <input id="bairro" type="text" pattern="[A-zÀ-ú[:punct:]\s]+$" required title="Digite o bairro"><br>
    <!-- Pattern para complemento -->
    Complemento: <input id="complemento" type="text" pattern="[A-zÀ-ú[:punct:]\s]+$" required title="Digite o complemento"><br>
    <!-- Pattern para unidade -->
    Unidade: <input id="unidade" type="text" pattern="[A-zÀ-ú[:punct:]\s]+$" required title="Digite o complemento"><br>
    <!-- Pattern para rua -->
    Logradouro: <input id="logradouro" type="text" pattern="[A-zÀ-ú[:punct:]\s]+$" required title="Digite o logradouro"><br>
    <!-- Pattern para número inteiros -->
    Número: <input id="numero" type="number" step="1" pattern="[0-9^,^.^-^+]$" required title="Digite o número"><br>
    <!-- Pattern para número inteiros -->
    GIA: <input id="gia" type="number" step="1" pattern="[0-9^,^.^-^+]$" required title="Digite o GIA"><br>
    <!-- Pattern para número inteiros -->
    IBGE: <input id="ibge" type="number" step="1" pattern="[0-9^,^.^-^+]$" required title="Digite o IBGE"><br>
    <!-- Pattern para URL -->
    URL: <input id="url" type="link" pattern=
    <?php
      $pattern = '((https?|ftp)://)?'; // SCHEME
      $pattern .= '([a-z0-9+!*(),;?&=$_.-]+(:[a-z0-9+!*(),;?&=$_.-]+)?@)?'; // User and Pass
      $pattern .= '([a-z0-9\-\.]*)\.(([a-z]{2,4})|([0-9]{1,3}\.([0-9]{1,3})\.([0-9]{1,3})))'; // Host or IP
      $pattern .= '(:[0-9]{2,5})?'; // Port
      $pattern .= '(/([a-z0-9+$_%-]\.?)+)*/?'; // Path
      $pattern .= '(\?[a-z+&\$_.-][a-z0-9;:@&%=+/$_.-]*)?'; // GET Query
      $pattern .= '(#[a-z_.-][a-z0-9+$%_.-]*)?'; // Anchor
      echo $pattern;
    ?> required title="Digite a URL"><br>
    <!-- Inputs que não precisam de pattern -->
    <!-- Pattern para procurar -->
    Procurar: <input id="procurar" type="search" required title="O que deseja procurar?"><br>
    <!-- Input[type="month"] -->
    Mês: <input id="mes" type="month" required title="Digite o mês"><br>
    <!-- Input[type="week"] -->
    Semana: <input id="semana" type="week" required title="Digite a semana"><br>
    <!-- Input[type="datetime-loca"] -->
    Data e hora: <input id="datahora" type="datetime-local" required title="Digite a data e hora"><br>
    <!-- Input[type="date"] -->
    Data: <input id="data" type="date" required title="Digite a data" max=<?php
      echo date("Y-m-d");
    ?>><br>
    <!-- Input[type="time"] -->
    Hora: <input id="hora" type="time" title="Digite a hora"><br>
    <!-- Input[type="range"] -->
    Classificar: <input id="classificar" type="range" min="0" max="10"><br>
    <!-- Input[type="color"] -->
    Cor: <input id="cor" type="color" min="0" max="10"><br>
    <button id="Enviar" type="submit">Enviar</button>
  </form>
</body>
</html>
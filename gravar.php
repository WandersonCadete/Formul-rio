<?php

$nome = $_GET["nome"];
$email = $_GET["email"];

if (isset($_GET['nome'])){  
    $linha= $_GET['nome'];
}
$dados_cliente["nome"] = $_GET ["nome"];
$dados_cliente["genero"] = $_GET ["genero"];
$dados_cliente["data_nascimento"] = $_GET ["data_nascimento"];
$dados_cliente["telefone"] = $_GET ["telefone"];
$dados_cliente["email"] = $_GET ["email"];

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "<p style='text-align: center; background-color: blue; font-size: 16px; color: white;'>O e-mail $email é válido! Seus dados foram recebidos com sucesso!</p>";
    echo "<p style='text-align: center; background-color: blue; font-size: 16px; color: white;'>Agradecemos por disponibilizar suas informações!</p>";
} else {
    echo "<p style='text-align: center; background-color: red; font-size: 20px;'>OPS, o e-mail $email não é válido. Por favor, preencher novamente o campo e-mail.</p>";
    return;
}

$linha=json_encode($dados_cliente).chr(10).chr(13);
$arq=fopen("dados_cliente.txt", "a"); 
$bits=fwrite($arq, $linha.PHP_EOL);
$arq=fclose($arq);

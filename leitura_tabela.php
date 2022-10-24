<?php

if ($arq = fopen("dados_cliente.txt", "r")){
}

echo "<table border=\"1\" width=\"400px\">";
echo "<td>Nome</td>";
echo "<td>Gênero</td>";
echo "<td>Data de Nascimento</td>";
echo "<td>Telefone</td>";
echo "<td>E-mail</td>";

while(! feof($arq)) 
{

  echo "<tr>";
  $linha = fgets($arq, 250);
  $dados_cliente = json_decode($linha, true);
  $dados_cliente = explode("#", $linha, true);
  echo "<td>".$dados_cliente[0]."</td>";
  echo "<td>".$dados_cliente[1]."</td>";
  echo "<td>".$dados_cliente[2]."</td>";
  echo "<td>".$dados_cliente[3]."</td>";
  echo "<td>".$dados_cliente[4]."</td>";
  echo "</tr>";
}

echo "<\table>";

?>

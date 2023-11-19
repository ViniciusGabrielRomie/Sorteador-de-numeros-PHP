<?php

echo "Digite quantos numeros voce precisa gerar:";
$numero_termos=fgets(STDIN);

for ($i=1;$i<=$numero_termos;$i++){
  $numeroAleatorio=random_int(1,99);
  $numeros = str_pad($numeroAleatorio,2,'0',STR_PAD_LEFT);
  echo "numero ".$i."=". $numeros. "\n";
}

?>
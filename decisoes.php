<?php
$idade = 18 ;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais de 18 anos ";
echo "ou a pertir de 16 anos acompanhado. \n";

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
 } else {
    echo "Você só tem $idade e não pode entrar";
    echo PHP_EOL . "É uma pena";
 }    


echo PHP_EOL;
echo "Adeus";


// Operador ternário
// $idade = 15;
// $mensagem = $idade < 18 ? ‘Você é menor de idade’ : ‘Você é maior de idade’;
// echo $mensagem;
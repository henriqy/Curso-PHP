<?php

$idade = 17;
$numeroDePessoas = 1;

echo "Voce so pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18){
    echo "Voce tem $idade anos. Pode entrar sozinho";

}else if($idade >= 16 && $numeroDePessoas > 1){
    echo "Voce tem $idaade anos. esta acompanhado(a) , entao pode entrar";

} else{
    echo "Voce so tem $idade anos. Voce nao pode entrar";
}

echo PHP_EOL;
echo "Adeus!";
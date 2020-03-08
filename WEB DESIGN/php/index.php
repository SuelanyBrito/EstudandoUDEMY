<?php 

$mensagem = 'HELLO';
$A = 2;
$B = 6;

#operacoes simples
$SOMA = $A * $B;
print $SOMA;

#condicionais
if ($B % 2 == 1){
    echo 'numero impar';
}
else{
    echo 'numero par';
}

#laços
$i = 0;
while($i < 10){
    echo $i;
    $i++;
}

do{
    echo $i;
    $i++;
}while($i < 20);

for($f = 0; $f<10; $f++){
    echo $f
}

$lista = [0,1,2,3,4,5];
foreach($lista as $j){
    echo $j;
}

#ARRAY
$variavel = array(0,1,2,3,4,5);
$dicionario = array("A"=>"ABACAXI","B"=>"BOLA");
foreach($variavel as $v){
    echo $v;
}

echo $dicionario["A"];
echo $dicionario[1];




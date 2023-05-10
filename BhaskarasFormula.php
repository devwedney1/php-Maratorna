<?php

//readline para usario digita o valor;
$n1 = readline("Digite o valor a: ");
$n2 = readline("Digite o valor b: ");
$n3 = readline("Digite o valor c: ");

 //formula de delta;
 $delta = $n2**(2)-4*$n1*($n3);

if($delta < 0) {
    echo "Impossibilidade de Calcular";
} else {
    
    //funcao sqrt e para conta matematica de raiz;
    //Usando x1 e x2, pois a formula de Bhaskaras tem +-;
    $x1 = (-$n2 + sqrt($delta)) / (2*$n1);
    $x2 = (-$n2 - sqrt($delta)) / (2*$n1);
    
    // \n e para qubra de linha;
    echo "x1=$x1 and \nx2=$x2";

};
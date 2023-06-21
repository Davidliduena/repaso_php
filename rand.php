<?php

$valor = rand(1,5);


/*if ($valor == 1 || $valor == 3 || $valor == 5){
    echo " El numero $valor es impar";
}else{
    echo " El valor $valor es par";
        
}*/

//otra posible solucion

if($valor % 2 == 0){
    echo "el numero $valor es par";
}else{
    echo "el valor $valor es impar";
}

?>
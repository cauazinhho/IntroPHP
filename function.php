<?php
    $num1 = 0; //Instanciar uma variável
    $num2 = 0;

    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do método

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do método

    function dividir($num1, $num2){
        if ($num2 <= 0 ) {
            return "Impossível dividir por zero!";
        }else{
            return $num1/$num2;
        }
    }//fim do método

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do método
?>

<?php 
    echo somar(1, 15)."<br>". 
    echo subtrair(12, 15)."<br>".
    echo dividir(8, 65)."<br>".
    echo multiplicar(78, 65); 


?>
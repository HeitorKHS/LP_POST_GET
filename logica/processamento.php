<?php

    require "funcoesCalculo.php";

    if(!empty($_GET['inputNum1']) && !empty($_GET['inputNum2']))
    {   
        $num1 = $_GET['inputNum1'];
        $num2 = $_GET['inputNum2'];
        
        if($_GET['selectOperacoes'] == "adicao") $resultado = $num1 ." + ". $num2 ." = ". adicao($num1,$num2);
        else if($_GET['selectOperacoes'] == "subtracao") $resultado = $num1 ." - ". $num2 ." = ". subtracao($num1,$num2);
        else if($_GET['selectOperacoes'] == "multiplicacao") $resultado = $num1 ." * ". $num2 ." = ". multiplicacao($num1,$num2);
        else if($_GET['selectOperacoes'] == "divisao") $resultado = $num1 ." / ". $num2 ." = ". divisao($num1,$num2);
    }

    echo "RESULTADO: {$resultado}"; 

?>
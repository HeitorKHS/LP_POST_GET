<?php

    require "funcoesCalculo.php";

    if(!empty($_POST['inputTemp']))
    {
        $temp = $_POST['inputTemp'];

        if($_POST['selectTemp'] == "celcius") $resultado = celcius($temp);
        else if($_POST['selectTemp'] == "fahrenheit") $resultado = fahrenheit($temp);
    }

    echo "RESULTADO: {$resultado}";

?>
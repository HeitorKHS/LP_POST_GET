<?php

require "funcoesCalculo.php";

if(!empty($_GET['inputComprimento']))
{
    $comprimento = $_GET['inputComprimento'];

    if($_GET['selectComprimento'] == "centimetrosMetros") $resultado = metros($comprimento);
    else if($_GET['selectComprimento'] == "metrosCentimetros") $resultado = centimetros($comprimento);
    else if($_GET['selectComprimento'] == "metrosQuilometros") $resultado = quilometros($comprimento);
    else if($_GET['selectComprimento'] == "quilometrosMetros") $resultado = metrosQ($comprimento);
}

echo "RESULTADO: {$resultado}";

?>
<?php

    function adicao($num1, $num2)
    {
        return ($num1 + $num2);
    }

    function subtracao($num1, $num2)
    {
        return ($num1 - $num2);
    }

    function multiplicacao($num1, $num2)
    {
        return ($num1 * $num2);
    }

    function divisao($num1, $num2)
    {
        return ($num1 / $num2);
    }
    
    function celcius($temp)
    {
        return ((($temp/5)*9)+32);
    }

    function fahrenheit($temp)
    {
        return (($temp-32)*(5/9));
    }

    function centimetros($comprimento)
    {
        return $comprimento*100;
    }

    function metros($comprimento)
    {
        return $comprimento/100;
    }

    function metrosQ($comprimento)
    {
        return $comprimento*1000;
    }

    function quilometros($comprimento)
    {
        return $comprimento/1000;
    }
?>
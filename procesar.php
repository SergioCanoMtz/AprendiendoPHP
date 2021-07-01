<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $resultado = $num1 * $num2;

    //con comillas dobles lee las variables
    echo "<h1 style="display: inline">El resultado de la multiplicación es: $resultado</h1>";
?>
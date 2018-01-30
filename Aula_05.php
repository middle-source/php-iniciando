<?php

    $Nome = "Allan";
    echo $Nome . " mais alguma coisa";
    echo "<br />";
    $Nome .= " Treinamentos";
    echo $Nome;
    echo "<br />";

    /* ------------------------ */
    echo "---------------------- <br />";
    echo "<br />";

    $valorTotal = 0;
    $valorTotal += 100;
    $valorTotal += 25;
    $valorTotal *= .9;
    echo $valorTotal . "<br />";
    echo "<br />";

    /* Operadores Aritimeticos */
    echo "------------------ <br />";
    
    echo "<br />";
    $a = 10;
    $b = 5;

    echo $a + $b . "<br />";
    echo $a - $b . "<br />";
    echo $a * $b . "<br />";
    echo $a / $b . "<br />";    

    /* Comparação */
    echo "<br />";
    echo "-------------------------- <br />";
    echo "<br />";
    $a = 50;
    $b = 70;

    var_dump($a < $b);
    echo "<br />";
    var_dump($a > $b);
    echo "<br />";
    var_dump($a == $b);
    echo "<br />";
    var_dump($a === $b);
    echo "<br />";
    var_dump($a >= $b);
    echo "<br />";
    var_dump($a <= $b);
    echo "<br />";
    var_dump($a != $b);
    echo "<br />";
    var_dump($a !== $b);
    echo "<br />";


    /* Comparação */
    echo "<br />";
    echo "-------------------------- <br />";
    echo "<br />";
    /* Tipos Especias */
    echo "<br />";
    $a = 50;
    $b = 60;

    var_dump($a <=> $b);
    echo "<br />";

    $a = null;
    $b = null;
    $c = 10;

    // OPERADOR NOVO PHP 7
    echo $a ?? $b ?? $c;

    echo "<br />";
    // OPERADORES INCREMENTO E DECREMENTO
    echo "-----------------------------------";
    echo "<br />";

    $a = 10; 
    echo $a++ . "<br />"; // Incrementando Para o Proximo
    echo ++$a . "<br />"; // Incrementando na Hora

    echo $a-- . "<br />"; // Decrementando
    echo --$a . "<br />";

    echo "<br />";
    // Expresão Regular
    echo "-----------------------------------";
    echo "<br />";

    $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
    var_dump( $resultado );

?>
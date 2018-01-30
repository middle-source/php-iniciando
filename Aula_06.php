<?php

// STRINGS - INICIO 
 $Nome = "Allan";
 $Nome2 = 'Cristian';

    // INTERPOLAÇÃO DE VARIAVEIS
    echo "ABC $Nome";

 
    echo "<br />";
    // FUNÇÔES
    echo "<br />";
    $Nome = "allan cristian";
    var_dump(strtoupper($Nome)); echo "<br />"; // Todos os caracteres em maiusculas
    var_dump(strtolower($Nome)) ; echo "<br />"; // Todos os caracteres em minusculo
    var_dump(ucwords($Nome)); echo "<br />";  // Primeiro caracter em maiuscula 
    var_dump(ucfirst($Nome)); echo "<br />"; // Primeiro caracter maiusculo

    echo "<br />";
    // FUNÇÔES STR_REPLACE
    echo "<br />";

    $Empresa = "Selftech";
    $Empresa = str_replace("S", "s", $Empresa); // Alterar Caracter
    
    var_dump($Empresa); echo "<br />";

    echo "<br />";
    // STR_POS
    echo "<br />";

    $Frase = "A repetição é a mãe da retenção. ";

    $q = strpos($Frase, "mãe");
    $Texto = substr($Frase, 0, $q); 
    var_dump($Texto); echo "<br />"; // Ver até a palavra mãe

    $Palavra = "mãe";

    $Texto2 = substr($Frase, $q + strlen($Palavra), strlen($Frase)); echo "<br />"; // Ver até depois da palavra mãe
    var_dump($Texto2); echo "<br />"; // Após palavra mãe
?>
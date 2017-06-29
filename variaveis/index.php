<?php
    /*
     *Introdução ao PHP7
     *Tipos de Variáveis
    */

    //Array
    $frutas = array("Banana", "Abacaxi", "Laranja");

    //Contar quantos itens tem no array
    $countFrutas = count($frutas);
    
    //Exibir conteúdo do array
    for ($i = 0; $i <= $countFrutas-1; $i++) {
        echo $frutas[$i]."<br>";
    }

    //Ver o tipo de arquivo
    $arquivo = fopen("index.php", "r");

    /******************** GET *************************/

    //$nomeGet = $_GET['nomeGet'];

    //echo $nomeGet."<br>";

    /****************** INFORMAÇÕES DO SISTEMA **********************/

    $ip = $_SERVER['REMOTE_ADDR'];
    //echo $ip."<br>";

    /************************ FUNÇÕES *************************/
    function trataString($string) {
        return $stringTratada = ucwords(mb_strtolower($string));
    }

    $nome = "Davyson natanael sindeaux de Oliveira";
    echo $nome."<br>";

    $teste = trataString($nome);
    echo $teste."<br><br>";

    /************************* OPERADORES *************************/
    //Novos no PHP7
    //Spaceship
    $a = 55;
    $b = 55;

    var_dump($a <=> $b);
    
    //Null Colesse
    $c = NULL;
    $d = NULL;
    $e = 10;

    echo "<br><br>";
    echo $c ?? $d ?? $e;
    
    //
?>
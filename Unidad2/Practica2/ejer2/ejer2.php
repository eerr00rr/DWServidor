<?php
    $str = $_GET['str'];
    $str = str_replace(' ', '', mb_strtolower($str));

    $vocales = 'aeiouáéíóú';
    $sumaVocales = 0;

    preg_match_all('/[aeiouáéíóú]/u', $str, $matches);
    $sumaVocales = $sumaVocales + count($matches[0]);
    
    echo 'La cadena \'' . $str . '\' tiene ' . $sumaVocales . ' caracters vocales' . '<br>';
?>
<?php
    $str = 'Esto es uná cadenÁ';
    $cadena = mb_strtolower($str);
    $cadena = str_replace(' ', '', $cadena);

    $vocales = 'aeiouáéíóú';
    $sumaVocales = 0;

    for ($i=0; $i < mb_strlen($cadena); $i++) { 
        for ($j=0; $j < mb_strlen($vocales); $j++) { 
            if (mb_substr($cadena, $i, 1) == mb_substr($vocales, $j, 1)) {
                $sumaVocales++;
            }
        }
    }

    for ($i=0; $i < mb_strlen($cadena); $i++) {
        if (preg_match('/[aeiouáéíóú]/u', mb_substr($cadena, $i, 1))) {
            $sumaVocales++;
        }
    }
    preg_match_all('/[aeiouáéíóú]/u', $cadena, $matches);
    $sumaVocales = $sumaVocales + count($matches[0]);
    
    echo 'La cadena \'' . $str . '\' tiene ' . $sumaVocales . ' caracters vocales' . '<br>';
?>
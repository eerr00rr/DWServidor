<?php
    function cuentaVocales($str) {
        preg_match_all('/[aeiouáéíóú]/u', $str, $matches);
        $sumaVocales = count($matches[0]);;

        return $sumaVocales;
    } 
?>
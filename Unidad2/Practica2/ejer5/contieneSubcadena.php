<?php
    function contieneSubcadena($str, $sub) {
        return strpos(removeAccents(mb_strtolower($str)), removeAccents(mb_strtolower($sub)));
    }
    function removeAccents($str) {
        $acentos = array(
            'á' => 'a', 
            'í' => 'i', 
            'ú' => 'u', 
            'é' => 'e', 
            'ó' => 'a', 
        );

        return strtr($str, $acentos);
    }
?>
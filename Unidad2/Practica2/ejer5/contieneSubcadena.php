<?php
    function contieneSubcadena($str, $sub) {
        return strpos(mb_strtolower($str), mb_strtolower($sub), 0);
    }
?>
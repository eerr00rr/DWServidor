<?php
    $array = array('ASIR', 'DAM', 'DAW');
    $str = 'Los ciclos de informática son: ';
    foreach ($array as $index => $x) {
        $str .= $x;
        
        if ($index < count($array) - 1) $str .= ', ';
    }

    echo $str . '.';
?>
<?php
    $sumaFor=0;
    $sumaWhile=0;
    $sumaDoWhile=0;

    for ($i=1; $i <= 50; $i++) { 
        if ($i % 3 == 0) {
            $sumaFor += $i;
        }
    }

    $a = 1;
    while ($a <= 50) {
        $sumaWhile = ($a % 3 == 0) ? $sumaWhile += $a : $sumaWhile = $sumaWhile;
        $a++;
    }

    $b = 1;
    do {
        $sumaDoWhile = ($b % 3 == 0) ? $sumaDoWhile += $b : $sumaDoWhile = $sumaDoWhile;
        $b++;
    } while ($b <= 50);
    echo $sumaFor . '<br>';
    echo $sumaWhile . '<br>';
    echo $sumaDoWhile . '<br>';
?>
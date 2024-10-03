<?php
    include 'crearCookie.php';

    if (isset($_POST['bAceptar'])) {
        $array_frases = (isset($_COOKIE['cookie1'])) ? unserialize($_COOKIE['cookie1']) : [];

        $frase = (isset($_POST['frase'])) ? $_POST['frase'] : 'error'; 
        array_push($array_frases, $frase);

        $cookie1 = crearCookie('cookie1', serialize($array_frases));

        header("Location: ../view/introducida.php");
    }
?> 
    
    
<?php
    include 'crearSession.php';

    if (isset($_POST['bAceptar'])) {
        $array_frases = (isset($_SESSION['hello'])) ? unserialize($_SESSION['hello']) : [];

        $frase = (isset($_POST['frase'])) ? $_POST['frase'] : 'error'; 
        array_push($array_frases, $frase);

        crearSession($array_frases);

        header("Location: ../view/introducida.php");
    }
?> 
    
    
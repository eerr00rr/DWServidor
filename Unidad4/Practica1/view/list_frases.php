<?php
    include 'header.php';   
?>
<h1>Guardar frases en una cookie</h1>
<h2>Frases introducidas:</h2>
<?php
    $array_frases = (isset($_COOKIE['cookie1'])) ? unserialize($_COOKIE['cookie1']) : [];

    if (count($array_frases) > 0) {
        foreach ($array_frases as $frase) {
            echo($frase . "<br>");
        }
    } else {
        echo('Cookie no esta creado');
    }
    
?>
<br>
<a href="../index.php">Inicio</a>
<br>
<a href="../controller/reiniciar.php">Borrar cookies</a>
<?php
    include 'footer.php';   
?>
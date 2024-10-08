<?php
    session_start();
    include 'header.php';   
?>
<h1>Guardar frases en una cookie</h1>
<h2>Frases introducidas:</h2>
<?php
    $array_frases = (isset($_SESSION['hello'])) ? unserialize($_SESSION['hello']) : [];
    if (count($array_frases) > 0) {
        foreach ($array_frases as $frase) {
            echo($frase . "<br>");
        }
    } else {
        echo('Session no esta creado');
    }
    
?>
<br>
<a href="../index.php">Inicio</a>
<br>
<?php
    if (count($array_frases) > 0) {
        echo("<a href=\"../controller/reiniciar.php\">Borrar session</a>");
    }
?>

<?php
    include 'footer.php';   
?>
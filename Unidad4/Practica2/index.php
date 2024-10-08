<?php
    session_start();
    include 'view/header.php';
?>
<a href="view/form.php">introducir una frase</a><br>
<a href="view/list_frases.php">ver todas las frases</a><br>
<?php
    $cantidad_frases = (isset($_SESSION['hello'])) ? count(unserialize($_SESSION['hello'])) : 0;
    echo("$cantidad_frases frases introducidas");

    include 'view/footer.php';
?>
<?php
    include 'view/header.php';

?>
<a href="view/form.php">introducir una frase</a><br>
<a href="view/list_frases.php">ver todas las frases</a><br>
<?php
    $cantidad_frases = (isset($_COOKIE['cookie1'])) ? count(unserialize($_COOKIE['cookie1'])) : 0;
    echo("$cantidad_frases frases introducidas");

    include 'view/footer.php';
?>
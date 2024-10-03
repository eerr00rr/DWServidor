<?php
    include 'header.php';   
?>
<h1>Introducir una frase</h1>
<form action="../controller/controller.php" method="post">
    <label for="frase">Escribe una frase:</label>
    <input type="text" name="frase">
    <br>
    <input type="submit" name="bAceptar" value="Enviar">
</form>
<?php
    include 'footer.php';   
?>
<?php
    include 'view/header.php';

?>
    <a href="view/form.php">introducir una frase</a><br>
    <a href="view/list_frases.php">ver todas las frases</a>

<?php
    include 'view/footer.php';
    function crearCookie($nombre, $valor) {
        setcookie($nombre, $valor, time()+3600, '/');
    }

    function eliminarCookie($nombre) {
        if (isset($_COOKIE[$nombre])) {
            setcookie($nombre, '', time()-3500, '/');
        }
    }

    crearCookie('cooki1', 'valuelol');
?>
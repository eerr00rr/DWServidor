<?php
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, '', time() - 1, "/");
    }
    header("Location: ../index.php");
?>
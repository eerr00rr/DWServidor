<?php
    $str = '';
    for ($i=0; $i <= $_GET['x']; $i++) { 
        $str .= '*';
        echo $str . '<br>';    
    }
?>
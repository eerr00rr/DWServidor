<?php
    for ($i=1; $i <= $_GET['x']; $i++) { 
        for ($j=$i; $j < $_GET['x']; $j++) { 
            echo '&nbsp&nbsp';
        }
        for ($h=0; $h < (2 * $i - 1); $h++) { 
            echo '*';
        }
        echo '<br>';
    }
?>
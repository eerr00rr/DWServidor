<?php
    for ($i=1; $i <= 5; $i++) { 
        for ($j=$i; $j < 5; $j++) { 
            echo '&nbsp&nbsp';
        }
        for ($h=0; $h < (2 * $i - 1); $h++) { 
            echo '*';
        }
        echo '<br>';
    }
?>
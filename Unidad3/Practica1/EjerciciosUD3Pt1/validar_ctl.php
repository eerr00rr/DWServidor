<?php 
$validos=array('10000000A', '20000000B', '30000000C');
$DNI = $_POST['DNI'];
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
    $contador=0;
   foreach($validos as $DNI2){
    if($DNI==$DNI2){
        $contador++;
    }
   }
   if ($contador==0) {
    echo "DNI no válido <br><br>";
   } else {
    $url = 'menu.php?Nombre=' . urlencode($Nombre) . '&Apellidos=' . urlencode($Apellidos);
    header('Location: ' . $url);
    exit(); 
   }
   
?>
<a href="index.html">Volver</a>
<html>
<head>
<title>Tarea Ejercicio1 - Resultado Comision</title>
</head>
<body>
<?php 
$valor1 = $_POST['T1'];

if($valor1<=150) {
    $comision=0;
}elseif ($valor1<=400) {
    $comision=0.1*$valor1;
}elseif($valor1>400) {
    $comision=50+($valor1*0.09);
}


echo "La venta del monto: $valor1 soles genera la siguiente comisión: $comision soles" ;
?>
</body>
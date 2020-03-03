<html>
<head>
<title>Tarea Ejercicio 3</title>
</head>
<body>
<?php 
$valor1 = $_POST['T1'];

$n = 0;
do{
	$valor1 = floor($valor1 / 10);
	$n = $n + 1;
} while ($valor1 > 0);
echo " Tu numero tiene " . $n . " digitos";
		
?>
</body>
</html>
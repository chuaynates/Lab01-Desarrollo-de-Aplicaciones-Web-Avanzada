<html>
<head>
<title>Tarea Ejercicio 2</title>
</head>
<body>
<?php 
$valor1 = $_POST['T1'];

if ($valor1%2==0){
    echo "el número $valor1 es par";
}
elseif($valor1<0) {
	echo "Número nulo";
}else{
    echo "el número $valor1 es impar";}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Numero ao quadrado PHP</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Digite um número: <input type="text" name="numero"><br><br>
	 
   
    <input type="submit" name="submit" value="Calcular">
</form> <br><hr>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $numero = $_POST['numero'];
	$numeroquadrado = '';
	$numerofinal = '';
	$numerofinal2 = '';
	
    $numeroquadrado = pow($numero,2);
	
	echo "<br><strong>O numero ao quadrado é: " . $numeroquadrado;
	
	if ($numero > 7) {
	$numerofinal = ($numeroquadrado + 3);	
	echo "<br><strong>Resultado total caso for maior que 49:</strong> " . $numerofinal;
	} else {
	$numerofinal2 = ($numeroquadrado + 2);
	echo "<br><strong>Resultado total caso for menor que 49:</strong> " . $numerofinal2;
	}
    
	}
	?>
	
</body>
</html>
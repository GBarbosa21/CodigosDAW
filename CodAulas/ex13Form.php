<?php
$v1 = $_GET[val1];
$v2 = $_GET[val2];

$resul = $v1 + $v2;

?>


<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>3DAW</h1>
	
	<form action="ex13FSoma.php" method ="post">
	Valores: <input type="text" name="val1"> + <input type="text" name="val2">
	<br><br>
	<input type="submit" value="Somar">;
	
	</form>
	
	<?php
		$Somar = (int)$__POST['val1'] + (int)$__POST['val2'];
		echo "<br>Soma = " + $Somar;
	?>

</body>
</html>
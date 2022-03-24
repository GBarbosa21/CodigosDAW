
<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>3DAW</h1>
	
	<form action="ex13FSoma.php" method ="Get">
	Valores: <input type="text" name="val1"> <?php $v1 = $_GET["val1"];?>
	+ 
	<input type="text" name="val2"> <?php $v2 = $_GET["val2"];?>
	<br><br>
	<input type="submit" value="Somar">;
	<?php 
	$resul = $v1 + $v2;
	echo "<br>resultado: ";
	echo $resul;
	?>
	</form>

</body>
</html>
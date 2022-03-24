<?php
$v1 = "";
$v2 = "";
$resul = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$v1 = $_POST["val1"];
	$v2 = $_POST["val2"];
	$resul = $v1 + $v2;
	echo $resul;
}

	//$Somar = (int)$__POST['val1'] + (int)$__POST['val2'];

?>



<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>3DAW</h1>

</body>
</html>
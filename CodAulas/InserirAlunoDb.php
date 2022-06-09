<?php
	if ($_SERVER ["REQUEST_METHOD"] == "POST") {
		$matricula = $_POST["matricula"];
		$nome = $_POST ["nome"];
		$funcao = $_POST ["funcao"];
		$senha = $_POST ["senha"];
		$user = 'root';
		$pass = '';
		
		$conn = new PDO('mysql:host=localhost;dbname=3dawfaeterj', $user, $pass);
		$sql = "INSERT INTO `usuaruio` (`nome`,`matricula`,`funcao`,`senha')VALUES ('$nome','$funcao','$senha')";
		
		try {
			$resul = $conn->query($sql);
			//print_r($resul);
		}
		catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
		
?>

<html>
<head>
</head>

<body>
<h1>Incluir Aluno</h1>
<br>
<br>

<form action="ex19_inserirAluno.php" method="POST">
	Matricula: <input type="text" name="matricula" value=''> <br>
	Nome: <input type="text" name="nome" value=''> <br>
	Email: <input type="text" name="email" value=''> <br>
	Cpf: <input type="text" name="cpf" value=''> <br>
	<input type="submit" value="Enviar">
	</form>
</body>

</html>
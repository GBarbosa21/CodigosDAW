<?php
function validaMat() {
	
}

$conn = new PDO('mysql:host=localhost;dbname=faeterj3DawManha', $user, $pass);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$matricula = $_POST["matricula"];
	$nome = $_POST["nome"];
    $funcao = $_POST["funcao"];
	$senha = $_POST["senha"];
	$user = 'root';
	$pass = '';
	
	$sql = "INSERT INTO `Usuario`(`nome`,`matricula`,`funcao`,`senha`) VALUES ('$nome','$matricula','$funcao','$senha')";
	//print_r($sql);
	try {
		$result = $conn->query($sql);
//		print_r($result);
	}
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
		$matricula = $_GET["matricula"];
		$sql = SELECT * FROM `Usuario` WHERE `matricula` = $matricula;
		
		try {
			$result = $conn->query($sql);
			$linhaAluno = $result->fetch(PDO::FETCH_ASSOC);
			$nome = $linhaAluno["nome"];
			$funcao = $linhaAluno["funcao"];
			$senha = $linhaAluno ["senha"];
		}
		catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
		}
}
?>

<html>
	<head>
	</head>
	
	<body>
		<h1>Alterar Usuario</h1>
		<br>
		<br>
		
		<form action=ex_alterar25.php" method="GET">
		Matricula <input type="text" name="matricula" value='<php echo $matricula ?> disable'> <br>
		 nome: <input type=text name="nome" value='<php echo $nome ?>'> <br>
		função: <input type=text name="funcao" value='<php echo $funcao?>'> <br>
		senha: <input type=text name="senha" value='<php echo $senha ?>'> <br>
		
		<br><br>
		<input type="submit" value="Incluir">
		
	</body>
	
</html>
	
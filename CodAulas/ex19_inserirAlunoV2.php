<?php
	function validMat() {
		
	}
	if ($_SERVER ["REQUEST_METHOD"] == "POST") {
		$matricula = $_POST["matricula"];
		$nome = $_POST ["nome"];
		$email = $_POST ["email"];
		$cpf = $_POST ["cpf"];
		 
		if(!file_exists("Aluno.txt")) {
			$cabecalho = "matricula;nome;email;cpf \n";
			$arquivoAluno = fopen("Aluno.txt", "w");
			fwrite ($arquivoAluno, $cabecalho);
			fclose ($arquivoAluno);
		}
			$arquivoAluno = fopen("Aluno.txt", "a") or die("Arquivo com problemas");
			$linha = $matricula. ";" . $nome . ";" . $email . ";" . $cpf;
			fwrite ($arquivoAluno, $linha);
			fclose ($arquivoAluno);
	}
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
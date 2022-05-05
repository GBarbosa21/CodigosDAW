<?php
	function validMat() {
		
	}
	if ($_SERVER ["REQUEST_METHOD"] == "POST") {
		$matricula = $_POST["matricula"];
		$nome = $_POST ["nome"];
		$email = $_POST ["email"];
		$cpf = $_POST ["cpf"];
		
		
		$arquivoAluno = fopen("Aluno.txt", "w") or die("Arquivo com problemas");
		fclose($arquivoAluno);
		$cabecalho = "matricula;nome;email;cpf \n";
		$arquivoAlunow = fopen("Aluno.txt", "w") or die ("Arquivo com problemas");
		fwrite($arquivoAlunow, $cabecalho);
		$linha = "matricula;nome;email;cpf\n";
		$linha = $matricula. ";" . $nome . ";" . $email . ";" . $cpf;
		fwrite ($arquivoAlunow, $linha);
		fclose ($arquivoAlunow);
		
		$arquivoAlunoc = fopen("Aluno1.txt", "w") or die ("Arquivo com problemas");
		while (!feof($arquivoAlunoc)) {
		fwrite($arquivoAlunoc, $cabecalho);
		$linha = "matricula;nome;email;cpf\n";
		$linha = $matricula. ";" . $nome . ";" . $email . ";" . $cpf;
		fclose ($arquivoAlunoc);
		}
		
		
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
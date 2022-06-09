<html>
<head>

	<script>
		function enviaForm() {
			let mat = document.getElementById("matricula").value;
			var xhttp = new XMLHttpRequest();
			
			xhttp.onreadystatechange = function (){
				console.log("this.readyState: " + this.readyState)
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("resultado").innerHTML = xhttp.responseText;
				}
			};
			xhttp.open("GET", "ex26_IncluirUsuario.php", true);
			xhttp.send();
		}
		
	</script>

</head>
<body>
<h1>Incluir Usuario</h1>
<br>
<br>
<form action="ex26_IncluirUsuario.php" method="POST">
    Matricula: <input type=text name="matricula" id="matricula" value=''> <br>
    nome: <input type=text name="nome" value=''> <br>
    função: <input type=text name="funcao"> <br>
	senha: <input type=text name="senha"> <br>
    <br><br>
    <input type="submit" value="Incluir" onClick="enviaForm()";>
</form>
<br>
<div id="resultado"></div>
</body>
</html>
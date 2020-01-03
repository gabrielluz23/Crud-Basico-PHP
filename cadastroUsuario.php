<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<body style="background-color:#696969;color: white">

<div class="container" style=" margin-top: 200px;
                max-width: 400px;" >


	    <div style="text-align: right;">
	    	<a href="index.php" role="buton" class="btn btn-primary">Voltar </a>
	    </div>

	<form action="inserirUsuario.php" method="POST">
		<div class="form-group">
			<label>Nome de usuario</label>
			<input type="text" name="nomeUsuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="email" name="emailUsuario" class="form-control" required autocomplete="off" placeholder="Seu melhor email">
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input id="senha1" type="password" name="senhaUsuario" class="form-control" required autocomplete="off" placeholder="Sua senha">
		</div>
		<div class="form-group">
			<label>Confirmar Senha</label>
			<input id="senha2" type="password" name="confirmarSenhaUsuario" class="form-control" required autocomplete="off" placeholder="Digite a senha novamente" oninput="validaSenha(this)">
			
		</div>
		<div class="form-group">
			
			<label>Nivel de Acesso</label>
			<select name="nivelUsuario" class="form-control">
				<option value="1">
					Adiministrador
				</option >
				<option value="2">
					Funcionario
				</option>
				<option value="3">
					Conferente
				</option>
			</select>
		</div>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success">
				Cadastrar
			</button>

		</div>
	</form>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
	function validaSenha(input) {
       if(input.value != document.getElementById('senha1').value) {
	input.setCustomValidity('Repita a Senha Corretamente');
       }else {
       	input.setCustomValidity('');
       }
 }

</script>

</body>
</html>
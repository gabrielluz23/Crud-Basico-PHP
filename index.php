<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0,user-scalabre=no">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-color:#696969;color: white">
<?php 
  session_start();
    unset ($_SESSION['usuario']);
?>
<div class="container" style=" margin-top: 200px;
                max-width: 400px">


<form action="login.php" method="post" >
  <div class="form-group">
    <label " style="color: white">Email</label>
    <input type="name" class="form-control" placeholder="Email do Usuario"  autocomplete="off " name="emailUsuario" required>
   
  </div>
  <div class="form-group">
    <label style=" color: white">Senha</label>
    <input type="password" class="form-control" placeholder="Senha"  autocomplete="off" name="senhaUsuario" required>
  </div>
  <div class="text-right">
    <a  href="cadastroUsuario.php" role="button" class="btn  btn-primary " style="color: white">Cadastrar-se</a>
  <button type="submit" class="btn  btn-success ">Entrar</button>
  </div>
<div style="margin-top: 10px;">
Caso não tenha um Cadastro,clique em Cadastrar-se
</div>
  </div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
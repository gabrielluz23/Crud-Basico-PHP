<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Categorias</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-color:#696969;color: white">
<?php 
 session_start();
 $usuario = $_SESSION['usuario'];
  if( !isset($_SESSION['usuario'])==true ){
     unset($_SESSION['usuario']);
    header('Location: index.php');
  }
   include 'conexao.php';
  $sql = "SELECT nivel_usuario FROM usuario WHERE email_usuario = '$usuario'";
  $buscar = mysqli_query($conexao,$sql);
  $dados = mysqli_fetch_array($buscar);
  $nivel = $dados['nivel_usuario'];

  
 ?>
<div class="container" style="margin-top: 30px">
<div class="text-right" style="margin-top: 40px"> 
  <a href="menu.php" role="button" class="btn btn-sm btn-primary">
      Voltar</a>
</div>
<h3>Lista de Categorias</h3>
<br>
<table class="table">  
  <thead class="thead-dark">
    <tr>
      <th scope="col">Categoria</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>

      <?php

      $sql = "SELECT `id_categoria`, `categoria` FROM `categoria` ";
      $busca = mysqli_query($conexao,$sql);

     while($array = mysqli_fetch_array($busca)){
      $idCategoria = $array['id_categoria'];
      $nomeCategoria = $array['categoria'];
      ?>
  <tr>
      <td><?php echo $nomeCategoria ?></td>
<?php 
 if(($nivel == 1) || ($nivel == 2)){

 
 ?>

      <td><a class="btn btn-warning btn-sm" href="editar_categoria.php?id=<?php echo 
      $idCategoria ?>" role = "button">Editar</a> </td>
    <?php  } ?>
    <?php 
 if($nivel == 1){

 
 ?>

      <td><a class="btn btn-danger btn-sm" href="excluir_categoria.php?id=<?php echo 
      $idCategoria ?>" role = "button">Excluir</a> </td>
    <?php } ?>
  </tr>

    <?php } ?>
</table>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8786c39b09.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
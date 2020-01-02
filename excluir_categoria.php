<?php 
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
$excluir = mysqli_query($conexao,$sql);
 ?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="styles.css">

<div class="container centralizar ">
<center>
<h4>Categoria Excluida com sucesso!</h4>
</center>
<div style="padding-top: 20px">
	<center>
	<a href="listarCategorias.php" role="button" class="btn btn-sm btn-primary">Voltar </a>
</center>
	</div>
</div>
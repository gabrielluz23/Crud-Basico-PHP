<?php 

include 'conexao.php';
$id_categoria = $_POST['id'];
$nomeCategoria = $_POST['nomeCategoria'];
$sql = "UPDATE `categoria` SET `categoria`= '$nomeCategoria'WHERE id_categoria = $id_categoria";
$atualizar = mysqli_query ($conexao,$sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="styles.css">

<div class="container centralizar " >
<center>
<h4>Categoria atualizada com sucesso!</h4>
</center>
<div style="padding-top: 20px">
	<center>
	<a href="listarCategorias.php" role="button" class="btn btn-sm btn-primary">Voltar </a>
</center>
	</div>
</div>
<?php 

include 'conexao.php';


$nroProduto = $_POST['nroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroProduto,'$nomeProduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="styles.css">

<div class="container centralizar ">
<center>
<h4>Produto adicionado com sucesso!</h4>
</center>>
<div style="padding-top: 20px">
	<center>
	<a href="adicionarProduto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Item </a>
	<a href="listarProdutos.php" role="button" class="btn btn-sm btn-primary">Lista de itens</a>
</center>
	</div>
</div>
<?php 
include 'conexao.php';

$nomeFornecedor = $_POST['nomeFornecedor'];

$sql = "INSERT INTO `fornecedor`(`fornecedor`) VALUES ('$nomeFornecedor')";
$inserir = mysqli_query($conexao,$sql);


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="styles.css">

<div class="container centralizar ">
<center>
<h4>Fornecedor adicionado com sucesso!</h4>
</center>>
<div style="padding-top: 20px">
	<center>
	<a href="adicionarFornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Fornecedor </a>
	<a href="listarProdutos.php" role="button" class="btn btn-sm btn-primary">Lista de Fornecedor</a>
</center>
	</div>
</div>
<?php 
include 'conexao.php';
$id_fornecedor = $_POST['id'];
$nomeFornecedor = $_POST['nomeFornecedor'];
$sql = "UPDATE `fornecedor` SET `fornecedor` = '$nomeFornecedor' WHERE id_fornecedor = $id_fornecedor";
$atualizar = mysqli_query($conexao ,$sql);


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="styles.css">
<body style="background-color:#696969;color: white">
<div class="container centralizar " >
<center>
<h4>Fornecedor atualizado com sucesso!</h4>
</center>
<div style="padding-top: 20px">
	<center>
	<a href="listarFornecedores.php" role="button" class="btn btn-sm btn-primary">Voltar </a>
</center>
	</div>
</div>
</body>
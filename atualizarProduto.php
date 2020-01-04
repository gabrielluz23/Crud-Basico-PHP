<?php 
include 'conexao.php';
$id_estoque = $_POST['id'];
$nomeProduto = $_POST['nomeProduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];
$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeProduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id_estoque";
$atualizar = mysqli_query($conexao,$sql);
header('Location: atualizarProdutoTela.php');

?>

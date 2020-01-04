<?php 
include 'conexao.php';
$id_fornecedor = $_POST['id'];
$nomeFornecedor = $_POST['nomeFornecedor'];
$sql = "UPDATE `fornecedor` SET `fornecedor` = '$nomeFornecedor' WHERE id_fornecedor = $id_fornecedor";
$atualizar = mysqli_query($conexao ,$sql);
header('Location: atualizarFornecedorTela.php');


?>

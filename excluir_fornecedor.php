<?php 
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `fornecedor` WHERE id_fornecedor = $id";
$excluir = mysqli_query($conexao,$sql);
header('Location: excluir_fornecedorTela.php');
 
 ?>

<?php 
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$excluir = mysqli_query($conexao,$sql);
header('Location: excluir_produtoTela.php');
 ?>


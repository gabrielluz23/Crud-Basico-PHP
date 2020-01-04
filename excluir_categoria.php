<?php 
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
$excluir = mysqli_query($conexao,$sql);
header('Location: excluir_categoriaTela.php');
 
 ?>


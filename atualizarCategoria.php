<?php 

include 'conexao.php';
$id_categoria = $_POST['id'];
$nomeCategoria = $_POST['nomeCategoria'];
$sql = "UPDATE `categoria` SET `categoria`= '$nomeCategoria'WHERE id_categoria = $id_categoria";
$atualizar = mysqli_query ($conexao,$sql);
header('Location: atualizarCategoriaTela.php');

?>

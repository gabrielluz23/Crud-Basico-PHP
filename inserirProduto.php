<?php 

include 'conexao.php';


$nroProduto = $_POST['nroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroProduto,'$nomeProduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql); 

header('Location: inserirProdutoTela.php');
?>

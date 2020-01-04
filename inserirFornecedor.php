<?php 
include 'conexao.php';

$nomeFornecedor = $_POST['nomeFornecedor'];

$sql = "INSERT INTO `fornecedor`(`fornecedor`) VALUES ('$nomeFornecedor')";
$inserir = mysqli_query($conexao,$sql);

header('Location: inserirFornecedorTela.php');
?>

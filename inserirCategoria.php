<?php 

include 'conexao.php';
$categoria = $_POST['nomeCategoria'];



$sql = "INSERT INTO `categoria`( `categoria`) VALUES ('$categoria')";
$inserirCategoria = mysqli_query($conexao,$sql);


header('Location: inserirCategoriaTela.php');

?>


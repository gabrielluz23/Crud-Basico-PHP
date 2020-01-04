<?php  

include 'conexao.php';
include 'scripts/password.php';
$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = $_POST['senhaUsuario'];
$nivelUsuario = $_POST['nivelUsuario'];

$sqlVerificar = "SELECT email_usuario from usuario where email_usuario ='$emailUsuario' ";
$buscar = mysqli_query($conexao,$sqlVerificar);
$total = mysqli_num_rows($buscar);

if($total == 0){

$sql = "INSERT INTO `usuario`(`nome_usuario`, `email_usuario`, `senha_usuario`, `nivel_usuario`) VALUES ('$nomeUsuario','$emailUsuario',sha1('$senhaUsuario'),$nivelUsuario)";
$inserir = mysqli_query($conexao,$sql);
header('Location: inserirUsuarioTela.php');
}else{
header('Location: usuarioCadastrado.php');
}


?>

<?php  

include 'conexao.php';
include 'scripts/password.php';
$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = $_POST['senhaUsuario'];
$nivelUsuario = $_POST['nivelUsuario'];
$status = 'Ativo';

$sqlVerificar = "SELECT email_usuario from usuario where email_usuario ='$emailUsuario' ";
$buscar = mysqli_query($conexao,$sqlVerificar);
$total = mysqli_num_rows($buscar);

if($total == 0){

$sql = "INSERT INTO `usuario`(`nome_usuario`, `email_usuario`, `senha_usuario`, `nivel_usuario`,`Status`) VALUES ('$nomeUsuario','$emailUsuario',sha1('$senhaUsuario'),$nivelUsuario,'$status')";
$inserir = mysqli_query($conexao,$sql);

}else{
header('Location: usuarioCadastrado.php');
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="styles.css">

<div class="container centralizar ">
<center>
<h4>Usuario cadastrado com sucesso!</h4>
</center>
<div style="padding-top: 20px">
	<center>
	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar </a>
</center>
	</div>
</div>
<?php 
		session_start();
include 'conexao.php';
include 'scripts/password.php';
$usuario = $_POST['emailUsuario'];
$senhaUsuario = $_POST['senhaUsuario'];

$sql = "SELECT email_usuario,senha_usuario from usuario where email_usuario ='$usuario' ";
$buscar = mysqli_query($conexao,$sql);
$total = mysqli_num_rows($buscar);


$dados = mysqli_fetch_array ($buscar);
$senha = $dados['senha_usuario'];
$senhadecodificada = sha1($senhaUsuario);


if($total == 0){
	unset ($_SESSION['usuario']);
header('Location: erro.php');
}else {
	if($senhadecodificada==$senha){
		$_SESSION['usuario'] = $usuario;
		header('Location: menu.php');
	}
	else {
		unset ($_SESSION['usuario']);
		header('Location: senhaInvalida.php');
	}

}
?>
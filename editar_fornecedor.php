<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Fornecedor</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-color:#696969">
<div class="container centralizar " style="background-color:#696969;color: white">

	<h3>Cadastro de Fornecedor</h3>

  <form action="atualizarFornecedor.php" class="form" method="post" 	>
    <?php 
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `fornecedor` WHERE id_fornecedor = $id";
    $busca = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($busca);
     $id_fornecedor = $dados ['id_fornecedor'];
     $nomeFornecedor = $dados['fornecedor'];

    ?>
  <div class="form-group">

    <label >Nome do Fornecedor</label>
     <input type="" name="id" style="display: none;" value="<?php echo $id_fornecedor ?>">
    <input type="text" class="form-control" name="nomeFornecedor" value="<?php  echo $nomeFornecedor ?>" placeholder="Insira nome do fornecedor" required autocomplete="off">
 </div>
 <div class=text-right style=" margin">
      <a href="listarFornecedores.php" role="button" class="btn btn-sm btn-primary">
      Voltar</a>
  	  <button type="submit" class="btn btn-sm btn-primary">Atualizar</button>

    </div>

 
  </form>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
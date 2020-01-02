<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Fornecedores</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container" style="margin-top: 30px">
<div class="text-right" style="margin-top: 40px"> 
  <a href="menu.php" role="button" class="btn btn-sm btn-primary">
      Voltar</a>
</div>
<h3>Lista de Fornecedores</h3>
<br>
<table class="table">  
  <thead class="thead-dark">
    <tr>
      <th scope="col">Fornecedor</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>

      <?php
      include 'conexao.php';

      $sql = "SELECT * FROM `fornecedor`";
      $busca = mysqli_query($conexao,$sql);

     while($array = mysqli_fetch_array($busca)){
      $idFornecedor = $array['id_fornecedor'];
      $nomeFornecedor = $array['fornecedor'];
      ?>
  <tr>
      <td><?php echo $nomeFornecedor ?></td>
      <td><a class="btn btn-warning btn-sm" href="editar_fornecedor.php?id=<?php echo 
      $idFornecedor ?>" role = "button">Editar</a> </td>
      <td><a class="btn btn-danger btn-sm" href="excluir_fornecedor.php?id=<?php echo 
      $idFornecedor ?>" role = "button">Excluir</a> </td>
  </tr>

    <?php } ?>
</table>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8786c39b09.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
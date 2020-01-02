<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadaastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-color:#696969;color: white">

<div class="container centralizar " >

	<h3>Formulário de Cadastro</h3>

  <form action="inserirProduto.php" class="form" method="post" 	>
  <div class="form-group">

    <label >Numero do produto</label>

    <input type="number" class="form-control" name="nroProduto" placeholder="Insira Numero do produto" required autocomplete="off">

  </div>

	 <div class="form-group">

    <label>Nome do Produto</label>

    <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto" required autocomplete="off">

   </div>

  <div class="form-group">

    <label >Quantidade</label>

   	<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade de produtos" required autocomplete="off">

  </div>

  	<div class="form-group">

    	<label >Categoria</label>

   		<select class="form-control" name="categoria" >
     <?php 
        include 'conexao.php';
        $sql = "SELECT * FROM `categoria` order by categoria";
        $buscaCategoria = mysqli_query($conexao,$sql);
        while($array = mysqli_fetch_array($buscaCategoria)){
        $idCategoria = $array['id_categoria'];
        $categoria = $array['categoria'];


        ?>
        <option><?php  echo $categoria?></option>
    <?php } ?>
          </select>
  	</div>

  	<div class="form-group">

    	<label >Fornecedor</label>

   		<select class="form-control" name="fornecedor" >
        <?php 
        $sqlFornecedor = "SELECT * FROM `fornecedor` order by fornecedor";
        $buscaFornecedor = mysqli_query($conexao,$sqlFornecedor);
        while($fornecedor = mysqli_fetch_array($buscaFornecedor)){
        $idFornecedor = $fornecedor['id_fornecedor'];
        $fornecedor = $fornecedor['fornecedor'];


       ?>
       <option><?php  echo $fornecedor ?></option>
     	<?php }?>
      </select>

  	</div>

	  <div class=text-right>
      <a href="menu.php" role="button" class="btn btn-sm btn-primary">
      Voltar</a>
  	  <button type="submit" class="btn btn-sm btn-primary">Cadastrar</button>

    </div>

  </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
<?php 
include 'conexao.php';
 $id = $_GET['id'];
?>
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

  <form action="atualizarProduto.php?id=<?php  echo $id?>" class="form" method="post" 	>
  	<?php 
  	$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
  	$busca = mysqli_query($conexao,$sql);
		 $array = mysqli_fetch_array($busca);
          $id_estoque = $array['id_estoque'];
          $nroproduto = $array['nroproduto'];
          $nomeproduto = $array['nomeproduto'];
          $categoria = $array['categoria'];
          $quantidade = $array['quantidade'];
          $fornecedor = $array['fornecedor'];
      ?>
  <div class="form-group">

    <label >Numero do produto</label>
    <input type="" name="id" style="display: none;" value="<?php echo $id_estoque ?>">
    <input type="number" class="form-control" name="nroProduto" placeholder="Insira Numero do produto" value="<?php echo $nroproduto ?>" required autocomplete="off" disabled>

  </div>

	 <div class="form-group">

    <label>Nome do Produto</label>

    <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto" required value="<?php echo $nomeproduto ?>"   autocomplete="off">

   </div>

  <div class="form-group">

    <label >Quantidade</label>

   	<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade de produtos" value="<?php echo $quantidade ?>"  required autocomplete="off">

  </div>

  	<div class="form-group">

    	<label >Categoria</label>

   		<select class="form-control" name="categoria"  >
      <?php 
        $sql = "SELECT * FROM `categoria`";
        $buscaCategoria = mysqli_query($conexao,$sql);
        while($arrayCategoria = mysqli_fetch_array($buscaCategoria)){
        $idCategoria = $arrayCategoria['id_categoria'];
        $listaCategoria = $arrayCategoria['categoria'];

        ?>
        <option <?php if($categoria == $listaCategoria){echo ("selected");} ?> >
          <?php  echo $listaCategoria?></option>
       <?php } ?>
      </select>
  	</div>

  	<div class="form-group">

    	<label >Fornecedor</label>

   		<select class="form-control" name="fornecedor" >
 <?php 
        $sqlFornecedor = "SELECT * FROM `fornecedor` ";
        $buscaFornecedor = mysqli_query($conexao,$sqlFornecedor);
        while($arrayfornecedor = mysqli_fetch_array($buscaFornecedor)){
        $idFornecedor = $arrayfornecedor['id_fornecedor'];
        $listaFornecedor = $arrayfornecedor['fornecedor'];


       ?>
        <option <?php  if($fornecedor == $listaFornecedor){echo ("selected");} ?> > <?php  echo $listaFornecedor ?></option>
      <?php }?>
      </select>

  	</div>

	  <div class=text-right>
 <a href="listaProdutos.php" role="button" class="btn btn-sm btn-primary">
      Voltar</a>
  	  <button type="submit" class="btn btn-sm button">Atualizar</button>

    </div>
  </form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
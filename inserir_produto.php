<?php

include 'conexao.php';
$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

 $sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

 $inserir = mysqli_query($conexao, $sql);
?>
<link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <div class="container" style="width: 300px;">

    <h4>Produto Adicionado com sucesso!</h4>
  <div style="padding-top: 20px">
           <a> href= "index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo ìtem</a>
  </div>
  </div>
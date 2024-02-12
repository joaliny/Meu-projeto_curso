<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



</head>
<body>

   <div class="container" style="margin-top: 40px;">
     <h3>Lista de Produtos</h3>
 	  <table class="table">
      <thead>
       <tr>
          <th scope="col">Nro Produto</th>
          <th scope="col">Nome Produto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Ação</th>
      </tr>
     </thead>
      <tr>
     	<?php
     	  include 'conexao.php';
     	  $sql = "SELECT * FROM `estoque`";
     	  $busca = mysqli_query($conexao, $sql);

     	  while ($array = mysqli_fetch_array($busca)) {

     	  	$id_estoque = $array['id_estoque'];
     	  	$nroproduto = $array['nroproduto'];
     	  	$nomeproduto = $array['nomeproduto'];
     	  	$categoria = $array['categoria'];
     	  	$quantidade = $array['quantidade'];
     	  	$fornecedor = $array['fornecedor'];

     	?>
     <tr>
     	<td><?php echo $nroproduto ?></td> 

     	<td><?php echo $nomeproduto ?></td>

        <td><?php echo $categoria ?></td>  

        <td><?php echo $quantidade ?></td> 

        <td><?php echo $fornecedor ?></td>  
        
        <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo 
        $id_estoque ?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1 .8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"/></svg>&nbsp;Editar</a></td>

    </tr>
 
     	<?php  } ?>  

      </tr>
 
</table>
 	

 </div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
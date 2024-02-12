<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro </title>
	<link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


   <style type="text/css">
   	  #tamanhoContainer {
   	  	 width: 500px;
   	  }

     #botao{
 	   background-color: #FF1168;
 	  color: #ffffff;
 	
      }

   </style>

</head>
<body>
    
      <div class="container"  id="tamanhoContainer" style="margin-top: 40px">
      	<h4>Formulário de Cadastro</h4>
       <form  action= "inserir_produto.php" method="post" style="margin-top: 20px">
        <div class="mb-3">
          <label >Nro do Produto</label>
          <input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" autocomplete="off" required>
       </div>

        <div class="mb-3">
          <label >Nome do Produto</label>
          <input type="text" class="form-control"   name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
        </div>


        <div class="form-group">
           <label> Categoria </label>
          <select class="form-control" name="Categoria">
               <option>Perifericos</option>
               <option>Hardware</option>
               <option>software</option>
               <option>Celulares</option>
           </select>

        </div>

        <div class="mb-3">
          <label >Quantidade</label>
          <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
        </div>



        <div class="mb-3">
           <label>Fornecedor</label>
           <select class="form-control" name="fornecedor">
               <option>Fornecedor A</option> 
               <option>Fornecedor B</option>
               <option>Fornecedor C</option>
           </select>
        </div>

        <div style="text-align: right;">
           <button type="submit"  id="botao"class= "btn btn-sm">Cadastrar</button>
        </div>
      </form>
      
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>
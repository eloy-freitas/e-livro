<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastrar Produto</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/site.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<div class="divcabecalho col-xs-12 col-lg-12">
              <a href="admindex.php">
                    <div id="divlogo">
                          <img src="img/logo/Cultura.png" class="img-circle">
                   </div>
              </a>
            
               <a href="cadastrarproduto.php">
                    <div id="cadpro">
                          <img src="img/logo/cadpro.png" class="img-circle">
                </div>
              </a>
             	<a href="cadastrarproduto.php">
                    <div id="cadadm">
                          <img src="img/logo/cadadm.jpg" class="img-circle">
                </div>
              </a>
       	</div>
	</header>
    <main>
	<section>
    	<form  method="POST" enctype="multipart/form-data" action="cadastroprodutosql.php" >
            <div class="cadastro col-xs-12 col-lg-12">
                    <div class="row">
                         <div class="form-group col-md-4">
                           <label for="campo1">Nome</label>
                           <input type="text" class="form-control" id="nome" name="nome">
                         </div>
                         
                         <div class="form-group col-md-4">
                           <label for="campo2">Gênero</label>
                           <input type="text" class="form-control" id="categoria" name="genero">
                         </div>
                         
                         <div class="form-group col-md-4">
                           <label for="campo3">Descrição</label>
                           <input type="text" class="form-control" id="descricao" name="descricao">
                         </div>
                         
                         <div class="form-group col-md-4">
                           <label for="campo4">Autor</label>
                           <input type="text" class="form-control" id="autor" name="autor">
                         </div>
                         
                          <div class="form-group col-md-4">
                           <label for="campo3">Editora</label>
                           <input type="text" class="form-control" id="descricao" name="editora">
                         </div>
                         
                          <div class="form-group col-md-4">
                           <label for="campo3">Preço</label>
                           <input type="text" class="form-control" id="preco" name="preco">
                         </div>
                         <div class="form-group col-md-4">
                           <label for="campo3">Quantidade</label>
                           <input type="text" class="form-control" id="preco" name="quantidade">
                         </div>
                             <div class="form-group col-md-4">
                               <input type="file" name="file" >
                             </div>
                          <div class="form-group col-md-4">
                           <input class="btn btn-lg btn-primary btn-block" type="submit" value="Cadastrar" name="cadastrar">
                         </div>
      </form>        
    </section>
</main>
</body>
</html>
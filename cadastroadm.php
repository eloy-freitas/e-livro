<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastrar Administrador</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/site.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<div class="divcabecalho col-xs-12 col-lg-12">
              <a href="index.php">
                    <div id="divlogo">
                          <img src="img/logo/Cultura.png" class="img-circle">
                   </div>
              </a>
       	</div>
</header>
<main>
	<section>
    	<form method="POST" enctype="multipart/form-data" action="cadastroadmsql.php" >
            <div class="cadastro col-xs-12 col-lg-12">
                    <div class="row">
                         <div class="campo form-group col-md-4">
                           <label for="campo1">Nome</label>
                           <input type="text" class="form-control" id="campo1" name="nome">
                         </div>
                         
                         <div class="form-group col-md-4">
                           <label for="campo2">Senha</label>
                           <input type="password" class="form-control" id="campo3" name="senha">
                         </div>

                          <div class="form-group col-md-4">
                           <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
                         </div>
                        </div>
            </div>
    	</form>        
    </section>
</main>
</body>
</html>
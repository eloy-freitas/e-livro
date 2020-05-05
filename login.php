<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
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
	<form  method="POST" enctype="multipart/form-data" action="loginsql.php">
    	<div class="cadastro col-xs-12 col-lg-12" style="width:300px;">
        	<div class="row">
                <h2 class="form-signin-heading">Por favor faça o login</h2>
                <label for="inputEmail" class="sr-only form-group col-md-4">Nome do usuário</label>
                <input type="text" id="inputEmail" class="form-control" name="login" placeholder="Nome do usuário" required="" autofocus>
                <label for="inputPassword" class="sr-only form-group col-md-4" >Senha</label>
                <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required="">
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                <a class="@link-color" href="cadastrocliente.php">Clique aqui caso não possua um login</a>
                </div>
         </div>
      </form>
</body>
</html>
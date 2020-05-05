<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina inicial do Administrador</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/site.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
<form method="POST" enctype="multipart/form-data" action="pesquisasql.php">
		<div class="divcabecalho col-xs-12 col-lg-12">
          <a href="admindex.php">
                    <div id="divlogo">
                          <img src="img/logo/Cultura.png" class="img-circle">
                   </div>
              </a>

            
               <a href="cadastroproduto.php">
                    <div id="cadpro">
                       <img src="img/logo/cadpro.png" class="img-circle">
                	</div>
              </a>
       	  		<a href="cadastroadm.php">
                    <div id="cadadm">
                      <img src="img/logo/cadadm.jpg" class="img-circle">
                	</div>
              </a>
            <div class="pesquisa">
               <input type="text" name="pesquisa" id="textpesquisa">
               
             </div>
             <div class="pesquisa">
               		<input type="submit" value="Pesquisar" class="btpesquisa btn btn-primary ">
             </div>
              
       	</div>
        </form>
	</header>
    <main>
    	<section>
        	<?php
			include("indexsql.php");
			?>
        </section>
    </main>
</body>
</html>
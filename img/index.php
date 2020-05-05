<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>e-Commercz</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/site.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
    	 <form>
              <div class="divcabecalho col-xs-12 col-lg-12">
                    <a href="#">
                        <div id="divlogo">
                             <img src="img/logo/Cultura.png" class="img-circle">
                        </div>
                    </a>
						<a href='logoutsql.php'>
                			<div id='cadadm'>
                          		<img src='img/logo/logout.png' class='img-circle'>
                			</div>
              			</a>
						  <a href='login.php'>
               				<div id='login'>
               			 		<img src='img/logo/login.png' class='img-circle'>
                      
               		 		</div>
               			 </a>
                         
						  <a href='cadastrocliente.php'>
               				<div id='cadastrar'>
               			 		<img src='img/logo/cadastro.png' class='img-circle'>
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
    <footer>
    </footer>
</body>
</html>
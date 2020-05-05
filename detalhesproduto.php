<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Produto</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/site.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
    	<form>
              <div class="divcabecalho col-xs-12 col-lg-12">
                    <a href="index.php">
                        <div id="divlogo">
                             <img src="img/logo/Cultura.png" class="img-circle">
                        </div>
                    </a>
                   
               	
               <a href="login.php">
               		<div id="login">
               			 <img src="img/logo/login.png" class="img-circle">
                      
               		 </div>
                </a>
                
                <a href="cadastrocliente.php">
               		<div id="cadastrar">
               			 <img src="img/logo/cadastro.png" class="img-circle">
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
				$cod = $_POST['cod'];
				$conn = mysqli_connect('mysql.kasalimpa.com.br', 'kasalimpa01', 'find3sn3t', 'kasalimpa01') or die ("Problemas na conexão."); 
			
				
					
					$q = "SELECT imgpro FROM Produto WHERE codpro = $cod";		
					$result = mysqli_query($conn,$q);
					while ($row = mysqli_fetch_object($result)) 
					{
						echo "<img  src='$row->imgpro' style='width:300px;  height:400px;'>";
					}					
					echo "</div>	
					<div class='dadosproduto'>";
						$q = "SELECT nomepro FROM Produto WHERE codpro = $cod";		
						$result = mysqli_query($conn,$q);
						while ($row = mysqli_fetch_object($result))
						{
							echo $row->nomepro."<br/><br/>";
						}										

						$q = "SELECT descricaopro FROM Produto WHERE codpro = $cod";		
						$result = mysqli_query($conn,$q);
						while ($row = mysqli_fetch_object($result)) 
						{
							echo $row->descricaopro."<br/><br/>";
						}
						$q = "SELECT autorpro FROM Produto WHERE codpro = $cod";		
						$result = mysqli_query($conn,$q);
						while ($row = mysqli_fetch_object($result))
						{
							echo $row->autorpro."<br/><br/>";
						}										

						$q = "SELECT generopro FROM Produto WHERE codpro = $cod";		
						$result = mysqli_query($conn,$q);
						while ($row = mysqli_fetch_object($result)) 
						{
							echo $row->generopro."<br/><br/>";
						}
						$q = "SELECT editorapro FROM Produto WHERE codpro = $cod";		
						$result = mysqli_query($conn,$q);
						while ($row = mysqli_fetch_object($result)) 
						{
							echo $row->editorapro."<br/><br/>";
						}
						echo "<a class='btn btn-default' href='compra.php' role='button'>Comprar</a>";							
					echo"</div>
				</div>";
				
				?>	
            </section>
    	</main>
    </body>
</html>
    
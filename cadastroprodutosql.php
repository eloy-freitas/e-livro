<?php
$conn = mysqli_connect('mysql.kasalimpa.com.br', 'kasalimpa01', 'find3sn3t', 'kasalimpa01') or die ("Problemas na conexão."); 


if ($_POST['cadastrar']) 
{
	$nome = $_POST['nome'];

	$categoria = $_POST['genero'];

	$descricao = $_POST['descricao'];

	$autor = $_POST['autor'];

	$editora = $_POST['editora'];

	$preco = $_POST['preco'];
	
	$quantidade = $_POST['quantidade'];

	
	$foto = $_FILES['file']['name'];

	  	$caminho_imagem = "img/imglivro/" . $foto;   

	  	move_uploaded_file($_FILES['file']['tmp_name'], $caminho_imagem);  
			$q = "INSERT INTO Produto (nomepro,generopro,autorpro,precopro,descricaopro,editorapro,imgpro,qntpro)
VALUES ('".$nome."' , '".$categoria."', '".$autor."', '".$preco."' , '".$descricao."'  , '".$editora."' , '".$caminho_imagem."','".$quantidade."')";

	$sql = mysqli_query($conn,$q) or die ("Falha na querry");
	

	  if ($result==1)
		{
			 echo "<p>Dados inseridos<br>";
			 mysql_close($conn); 
			echo '<meta http-equiv="refresh" content="3;URL=admindex.php" />';
		}
		 else 
		{
			 "<p>Dados não inseridos<br>";
			 echo '<meta http-equiv="refresh" content="3;URL=cadastroproduto.php" />';
		}


	}

?>
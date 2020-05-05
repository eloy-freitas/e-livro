<?php
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$conn = mysqli_connect('mysql.kasalimpa.com.br', 'kasalimpa01', 'find3sn3t', 'kasalimpa01') or die ("Problemas na conexão."); 

$result = mysqli_query($conn,"SELECT * FROM Usuario WHERE nomeusu = '$login' AND senhausu = '$senha'");
$tipo = mysqli_query($conn,"SELECT tipousu FROM Usuario WHERE nomeusu = '$login' AND senhausu = '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
	
	mysqli_close($conn);
	while ($row = mysqli_fetch_object($tipo)) 
	{
		
		if($row->tipousu == 1)
		{
			echo "Logado com sucesso!";
			echo '<meta http-equiv="refresh" content="3;URL=admindex.php" />';
		}
		else
		{
			
			echo "Logado com sucesso!";
			echo '<meta http-equiv="refresh" content="3;URL=index.php" />';
		} 
	}	
	
}
else{
	echo "Usuário inválido";
	
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	echo '<meta http-equiv="refresh" content="3;URL=login.php" />';
	}



?>
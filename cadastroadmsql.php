<?php
$nome = $_POST['nome'];

$senha = md5($_POST['senha']);


$ligax = mysqli_connect('mysql.kasalimpa.com.br', 'kasalimpa01', 'find3sn3t');

if (!$ligax) {echo '<p> Erro: Falha na ligação.'; exit;}

 mysqli_select_db($ligax,'kasalimpa01');

$insere = "INSERT INTO Usuario (nomeusu,senhausu,tipousu)
VALUES ('$nome' , '$senha', 1 )";

$result = mysqli_query($ligax, $insere);

if ($result==1)
{
	 echo "<p>Dados inseridos<br>";
	 mysqli_close($ligax); 
echo '<meta http-equiv="refresh" content="3;URL=admindex.php" />';
}
 else 
 {
	 "<p>Dados não inseridos<br>";
	 echo '<meta http-equiv="refresh" content="3;URL=cadastroadm.php" />';
 }

?>
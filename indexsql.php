<?php
				$conn = mysqli_connect('mysql.kasalimpa.com.br', 'kasalimpa01', 'find3sn3t', 'kasalimpa01') or die ("Problemas na conexão."); 
				$q = "SELECT * FROM Produto";		
				$result = mysqli_query($conn,$q);		
				$total = mysqli_num_rows($result);
				if($total >= 1)
				{
					for ($i = 1; $i <= $total; $i++) 
					{
    					echo "<div class='produto'>";
							
							$q = "SELECT imgpro FROM Produto WHERE codpro = $i";		
							$result = mysqli_query($conn,$q);
							while ($row = mysqli_fetch_object($result)) 
							{
								echo "<img  src='$row->imgpro' style='width:150px; height:180px;'>";
								
								echo "<form  method='POST' enctype='multipart/form-data' action='detalhesproduto.php'>";			
										
										echo "<input class='btn btn-default' type='submit' role='button' value='Ver detalhes'>";							
										
										echo "<input class='btn btn-default' type='text' name='cod' style='display:none' role='button' value='".$i."'>";
										echo "</form>";
										
								
							}										
							
							echo "<div class='dadosproduto'>";
							
										$q = "SELECT nomepro FROM Produto WHERE codpro = $i";		
										$result = mysqli_query($conn,$q);
										while ($row = mysqli_fetch_object($result))
										{
											echo $row->nomepro."<br/><br/>";
										}										

										$q = "SELECT precopro FROM Produto WHERE codpro = $i";		
										$result = mysqli_query($conn,$q);
										while ($row = mysqli_fetch_object($result)) 
										{
											echo "R$".$row->precopro."<br/><br/>";
										}
										
										
										
						echo"</div>					
           				
					</div>";	
					}
				}
				
        		
 ?>
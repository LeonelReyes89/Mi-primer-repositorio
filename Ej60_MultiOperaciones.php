<!DOCTYPE html> <html lang="es"> 
<head>     
	<meta charset="UTF-8">     
	<title>Registro de productos
	</title> 
</head> 
<body>      
	<h2>REGISTRO DE TRES PRODUCTOS</h2>        
	<form method="POST" action="">      
		<?php        
			for ($i = 0; $i < 3; $i++) {         
				echo "Numero 1:";         
				echo "<input type='text' name='N1[]'>" . " ";              
				echo "Numero 2:";         
				echo "<input type='number' name='N2[]'>" . " ";                    
				echo "<br><br>";     
			}     
		?>          
		<button type="submit" name="guardar" value="guardar">     
		Guardar y calcular </button>          
		<?php        
		if (isset($_POST['guardar'])) {                 
			$N1 = $_POST['N1'];        
			$N2 = $_POST['N2'];                           
			$subtotales = array();         
			$iva = array();         
			$totales = array();                  
			for ($i = 0; $i < 3; $i++) {                        
				$Multiplicacion = $N1[$i]*$N2[$i];                       
				$Division[$i] = $N1[$i]/$N2[$i];                
				$Suma[$i] = $N1[$i] + $N2[$i];          }             
				echo "<h3>ARREGLO DE Multiplicacion</h3>";          
				for ($i = 0; $i < 3; $i++) {             
					echo $Multiplicacion[$i] . "<br>";         
				}                   
				echo "<h3>ARREGLO DE PRECIOS</h3>";          
				for ($i = 0; $i < 3; $i++) {             
					echo "$" . number_format($precios[$i], 2) . "<br>";         
				}                  
				echo "<h3>ARREGLO DE SUBTOTALES</h3>";          
				for ($i = 0; $i < 3; $i++) {             
					echo "$" . number_format($subtotales[$i], 2) . "<br>";         
				}              
				echo "<h3>ARREGLO DE IVA</h3>";          
				for ($i = 0; $i < 3; $i++) {             
					echo "$" . number_format($iva[$i], 2) . "<br>";         }               
					echo "<h3>ARREGLO DE TOTALES</h3>";          
					for ($i = 0; $i < 3; $i++) {             
						echo "$" . number_format($totales[$i], 2) . "<br>";         
					}      
				}      
				?>  
</body> 
</html> 
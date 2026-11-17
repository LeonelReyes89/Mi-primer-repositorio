<!DOCTYPE html> <html lang="es"> 
<head>     
	<meta charset="UTF-8">     
	<title>Arreglos de operaciones
	</title> 
</head> 
<body>      
	<h2>OPERACIONES</h2>        
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
			$Multiplicacion = array();         
			$Division = array();         
			$Suma = array();
			$Resta = array();             
			for ($i = 0; $i < 3; $i++) {                        
				$Multiplicacion[$i] = $N1[$i]*$N2[$i];                       
				$Division[$i] = $N1[$i]/$N2[$i];                
				$Suma[$i] = $N1[$i] + $N2[$i];
				$Resta[$i] = $N1[$i] - $N2[$i];          }             
				echo "<h3>ARREGLO DE MULTIPLICACION</h3>";          
				for ($i = 0; $i < 3; $i++) {             
					echo $Multiplicacion[$i] . "<br>";         
				}                   
				echo "<h3>ARREGLO DE DIVISION</h3>";          
				for ($i = 0; $i < 3; $i++) {             
					echo $Division[$i] . "<br>";         
				}                  
				echo "<h3>ARREGLO DE SUMA</h3>";          
				for ($i = 0; $i < 3; $i++) {             
					echo $Suma[$i] . "<br>";         
				}              
				echo "<h3>ARREGLO DE RESTA</h3>";          
				for ($i = 0; $i < 3; $i++) {             
					echo $Resta[$i] . "<br>";         }    
					}            
				?>  
</body> 
</html> 
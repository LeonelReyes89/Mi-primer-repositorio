<!DOCTYPE html>
<html>
<body>
<h2> Arreglo multidimensional de numeros </h2>
<?php
$Numeros=array();
$Valor=10;
echo "Impresion normal<br>";
for ($f=0;$f<4;$f++){
	for ($c=0;$c<4;$c++){
		$Numeros[$f][$c]=$Valor;
		$Valor+=2;
		echo $Numeros[$f][$c]," ";}
	echo "<br>";}
?>
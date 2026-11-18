<!DOCTYPE html>
<html>
<body>
<h2> Matrices </h2>
<?php
$Numeros=array();
$ValorA=100;
$ValorB=200;
echo "Matriz A<br>";
for ($f=0;$f<=2;$f++){
	for ($c=0;$c<=2;$c++){
		$NumerosA[$f][$c]=$ValorA;
		$ValorA+=10;
		echo $NumerosA[$f][$c]," ";}
	echo "<br>";}
echo "<br><br>";
echo "Matriz B<br>";
for ($f=0;$f<=2;$f++){
	for ($c=0;$c<=2;$c++){
		$NumerosB[$f][$c]=$ValorB;
		$ValorB+=10;
		echo $NumerosB[$f][$c]," ";}
	echo "<br>";}
echo "<br><br>";
echo "Matriz C<br>";
for ($f=0;$f<=2;$f++){
	for ($c=0;$c<=2;$c++){
		$NumerosC[$f][$c]=$NumerosA[$f][$c]+$NumerosB[$f][$c];
		echo $NumerosC[$f][$c]," ";}
	echo "<br>";}
?>
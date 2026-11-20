<!DOCTYPE html>
<html>
<body>
<h2> Matrices </h2>
<?php
$Numeros=array();
$ValorA=100;
$ValorB=200;
echo "Matriz A<br>";
echo "<table border='2'>
		<tr>";
for ($f=0;$f<=2;$f++){
	for ($c=0;$c<=2;$c++){
		$NumerosA[$f][$c]=$ValorA;
		$ValorA+=10;
		echo "<td>" . $NumerosA[$f][$c] . "</td>";}
	echo "</tr>";}
echo "</table><br><br>";
echo "Matriz B<br>";
echo "<table border='2'>
		<tr>";
for ($f=0;$f<=2;$f++){
	for ($c=0;$c<=2;$c++){
		$NumerosB[$f][$c]=$ValorB;
		$ValorB+=10;
		echo "<td>" . $NumerosB[$f][$c] . "</td>";}
	echo "</tr>";}
echo "</table><br><br>";
echo "Matriz C<br>";
echo "<table border='2'>
		<tr>";
for ($f=0;$f<=2;$f++){
	for ($c=0;$c<=2;$c++){
		$NumerosC[$f][$c]=$NumerosA[$f][$c]+$NumerosB[$f][$c];
		echo "<td>" . $NumerosC[$f][$c] . "</td>";}
	echo "</tr>";}
echo "</table>"
?>
</html>
</body>
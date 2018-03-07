<?php
/**
* Completez ce code source pour que le script affiche
*
*   $numX est le plus grand des trois nombres
*
*/
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

if(!isset($num1) || !isset($num2) || !isset($num3)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8888/conditions/exercice4.php?num1=4&num2=3&num3=12</strong>");
}

/*
* Completez le code ici
*/

if ($num1 > $num2 && $num1 > $num3) {
	echo $num1 . ' est le plus grand des trois';
}
elseif ($num2 > $num1 && $num2 > $num3) {
	echo $num2 . ' est le plus grand des trois';
}
else {
	echo $num3 . ' est le plus grand des trois';
}
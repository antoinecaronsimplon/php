<?php
/**
* Completez ce code source pour que le script affiche
*
*   $num1 est inferieur|superieur|egal a $num2
*
*/
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if(!isset($num1) || !isset($num2)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8888/conditions/exercice1.php?num1=4&num2=3</strong>");
}

/*
* Completez le code ici
*/

if ($num1 < $num2){
	echo ($num1 .' est plus petit '.$num2);
}
else if ($num1 > $num2){
	echo ($num1 . ' est plus grand ' . $num2);
}
else{
	echo ($num1 . ' est égal à ' . $num2);
}
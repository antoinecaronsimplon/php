<?php
/**
* Completez ce code source pour que le script affiche si un nombre est pair ou impair
*
*   $nombre est pair
*   OU
*   $nombre  est impair
*
*/
$nombre = $_GET['nombre'];
if(is_null($nombre)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8888/conditions/exercice3.php?nombre=4</strong>");
}
/*
* Completez le code ici
*
* AIDE :
* L'operateur modulo "%" permet de connaitre le reste d'une division
*/
if ($nombre % 2==0) {
	echo ('Le nombre est pair');
}
else {
	echo ('Le nombre est impair');
}


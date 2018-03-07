<?php
/**
* Completez ce code source pour que le script affiche
*
*   $chaine comporte plus de 10 caractères
*   OU
*   $chaine comporte moins de 10 caractères
*   OU
*   $chaine comporte exactement 10 caractères
*
*/
 $chaine = $_GET['chaine'];

if(!isset($chaine)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8888/conditions/exercice2.php?chaine=ceci est un test</strong>");
}

/*
* Completez le code ici
*/
$lengthChaine = strlen($chaine);

if ($lengthChaine > 10){
	echo ('La chaine comporte plus de 10 caractères');
}
elseif ($lengthChaine < 10) {
	echo ('La chaine comporte moins de 10 caractères');
}
else{
	echo ('La chaine comporte exactement 10 caractères');
}



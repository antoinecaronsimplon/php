<?php

/**
* Créer un script qui compte le nombre de voyelle
* dans la variable $sentence
*
* 
* indice on peut parcourir une chaine avec for
* strlen()
* in_array()
*/

$sentence = "La formation simplon c'est genial, on va devenir des pros";

// Boucle qui lit toute la variable $sentence
for ($i=0; $i < $sentence; $i++) {
    
    // return $sentence;
    // Indique si une valeur appartient à un tableau
    $voyelle = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");    
        if (in_array($voyelle)) {
            // Calcule la taille d'une chaîne
            $str = $sentence;
            echo strlen($str);
        }
}




// Calcule la taille d'une chaîne
// $str = $sentence;
// echo strlen($str);



// $voyelle = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
// if (in_array("Irix", $voyelle)) {
//     echo "Got Irix";
// }
// if (in_array("mac", $voyelle)) {
//     echo "Got mac";
// }
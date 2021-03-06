<?php
/**
 * @brief PHP POO exercice 1.
 * @author Hans Vanpee <hans@vanpee.fr>
 *
 * Objectif : compréhension de la programmation orienté objet et de la
 * syntaxe PHP pour la création de classes et d'objets.
 *
 * Mots clés : class, new, objet, instance, instanciation, attribut,
 * propriété, méthode
 *
 */

/*
 * La fonction ci-dessous affiche le nom complèt en combinant un prénom et un
 * nom.
 * Transformez cette application en utilisant des classes et des objets.
 */

/**
 * @brief Output full name from first name and last name.
 * @param[in] $firstName A string containing the first name.
 * @param[in] $lastName A string containing the last name.
 */
// function fullName($firstName, $lastName)
// {
//     echo "<p>".$firstName." ".$lastName."</p>";
// }

// $actors = [
//     [ 'firstName' => 'John',        'lastName' => 'Gielgud'],
//     [ 'firstName' => 'Laurence',    'lastName' => 'Olivier'],
//     [ 'firstName' => 'Vivien',      'lastName' => 'Leigh'],
// ];

// echo "<h1>Actors list</h1>";

// foreach ($actors as $actor) {
//     fullName($actor['firstName'], $actor['lastName']);
// }

// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:

class Actors{
    public $_firstName;
    public $_lastName;

    function fullName(){
       echo '<p>'.$this->_firstName.' '.$this->_lastName.'</p>';
    }
}

$character = [];
$character[] = new Actors;
$character[0] ->_firstName = 'John';
$character[0] ->_lastName = 'Gielgud';
$character[] = new Actors;
$character[1] ->_firstName = 'Laurence';
$character[1] ->_lastName = 'Olivier';
$character[] = new Actors;
$character[2] ->_firstName = 'Vivien';
$character[2] ->_lastName = 'Leigh';

foreach ($character as $actor){
    $actor->fullName();
}
?>


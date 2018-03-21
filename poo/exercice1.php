<?php

/**
* Créer des classes Dog et et Cat étendant Pet et implémentant l'interface Animal
* 
* Methode de Animal : 
*   - Cry() // Affiche le nom du crie de l'animal
*   - Run() // Affiche la vitesse a laquelle l'animal court
* Propriété de Animal :
*    - $speed
*    - $cryName
* 
* Methode de Pet
*   - Sleep() // Affiche le temps d'une sieste d'un animal
* Proprieté de Pet
*   - SleepTime
*
* Il faut passer les paramètres $sleepTime, $speed, $cryName dans le constructeur
* 
* 
* Créer ensuite 3 chats et 2 chiens, les mettres dans un tableau
* Parcourir le tableau et afficher soit le crie, la vitesse ou son temps de sieste.
*/

interface Animal{
    public $cryName;
    public $speed;

    public function Cry(){
        return $this->cryName.' '.;
    }
    public function Run(){
        return $this->speed.' '.;
    }
    public function construct($newscryName, $newspeed){
        $this->cryName = $newcryName;
        $this->speed = $newspeed;
    }
}

class Pet implements Animal{
    public $_dog;
    public $_cat;

    public function sleep(){

    }
    public function construct($news_dog, $new_cat){
        $this->_dog = $new_dog;
        $this->_cat = $new_cat;
    }
}

$SleepTime = [];
$SleepTime = new Animal;

foreach ($animals as $animal){
    $actor->fullName();
}
?>
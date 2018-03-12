<?php

/**
* Afficher le nombre pair de 1 à 20 avec :
* for
* do
* while
*/

for ($i=1; $i <= 20; $i++) { 
    if ($i%2 == 0){
        echo $i;
    }
}

$i = 1;
while($i <= 20){
    if ($i%2 == 0){
        echo $i;
    }
    $i++;
}

$i = 1;
do{
    if($i%2 == 0){
        echo $i;
    }
    $i++;
}while($i <= 20);
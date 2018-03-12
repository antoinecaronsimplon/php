<?php

/**
* Afficher le nombre de 1 à 10 avec :
* for
* do
* while
*/

for ($i=1; $i<=10; $i++){
    echo $i;
}

$i = 1;
while($i <= 10){
    echo $i;
    $i++;
}

$i = 1;
do{
    echo $i;
    $i++;
}while($i<=10);
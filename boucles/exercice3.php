<?php

/**
* Afficher les entiers du tableau $data
*/

$data = [4,3.2,'thomas','formation',5,3.14,8];

// foreach ($data as $valeur){
//         echo $valeur.'<br/>'."\n";
// }

foreach ($data as $data) {
    echo "is_int(";
    var_export($data);
    echo ")=";
    var_dump(is_int($data));
}


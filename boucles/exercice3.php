<?php

/**
* Afficher les entiers du tableau $data
*/

$data = [4,3.2,'thomas','formation',5,3.14,8];

foreach ($data as $value) {
    if (is_int($value)) {
        echo $value . '<br />';
    }
}
 
<?php
/**
 * Created by PhpStorm.
 * User: dbourdon
 * Date: 09/12/17
 * Time: 14:46
 */

$offre = array (

    array("name"=> "test", "price"=> 5),
    array("name"=> "test2", "price"=> 9)
);
foreach ($offre as $elem) {
 echo "test, my name is".$elem['name']."\n";
}


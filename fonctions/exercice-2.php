<?php

function average(array $tab) : ? float 
{
    $sum=0;
    foreach($tab as $number) {
        $sum+=$number;
    }
    if ($sum===0) {
        return null;
    }
    else {
        return $sum/count($tab);
    }
}

echo average([12, 15, 18, 9]); // doit afficher 13.5
echo "<br>";
echo average([12, 15, 18, 11, 14]); // doit afficher 14
var_dump(average([0, 0, 0, 0, 0]));
<?php

function getFirst(array $tab) : ? int
{
    if (count($tab) > 0) 
    {
        return $tab[0];
    }
    else 
    {
        return null;
    }
};

echo getFirst([13, 24, 45]);
echo "<br>";
var_dump(getFirst([]));
echo "<br>";
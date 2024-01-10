<?php

function isOdd(int $nb) : bool
{
    if ($nb %2 === 0) 
    {
        return true;
    }
    else if ($nb %2 !== 0)
    {
        return false;
    }
};

var_dump(isOdd(12));
echo "<br>";
var_dump(isOdd(29));
echo "<br>";
<?php

function array_random(array $array, &$n = 1)
{
    if ($n < 1 || $n > count($array)) {
        throw new OutOfBoundsException();
    }

    return ($n !== 1)
        ? array_values(array_intersect_key($array, array_flip(array_rand($array, $n))))
        : array($array[array_rand($array)]);
}

?>
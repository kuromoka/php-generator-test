<?php

function generator_func()
{
    $array = [1, 2, 3, 5, 8];
    for ($i = 0; $i < count($array); $i++) {
        yield $array[$i];
    }
    return "END";
}

$generator = generator_func();
foreach ($generator as $value) {
    echo "$value ";
}

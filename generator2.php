<?php

function generator_func($str, $count)
{
    for ($i = 0; $i < $count; $i++) {
        yield str_shuffle($str);
    }
    echo "END";
}

$generator = generator_func('advent', 5);
foreach ($generator as $value) {
    echo "$value ";
}

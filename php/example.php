<?php

function output()
{
    $group = [
        "testOne" => 1,
        "testTwo" => [ two => 2, ],
        "testThree" => [3,]
        "testFour" => FOUR,
    ]

    foreach ($group as $key => value) {
        echo '{$key}: {$value}'
    }

    return json_encode($group);
}

$test = output();
fwrite(STDOUT, $test);

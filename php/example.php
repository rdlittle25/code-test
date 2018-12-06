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
        echo '{$key}: {$value}\n'
    }

    $output = json_encode($group);
    if (($jsonError = json_last_error()) > 0)
}

try {
    $test = output();

    // Output to standard out.
    fwrite();
} catch (Exception $e) {
    error_log($e);
}

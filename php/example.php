<?php

try {
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
        if (($jsonError = json_last_error()) > 0) {
            throw new Exception('Invalid JSON Output');
        }
    }

    $test = output();

    // Output to standard out.
    fwrite();
} catch (Throwable $e) {
    $class = get_class($e);
    $msg = "{$class} ({$e->getCode()}): {$e->getMessage()} at {$e->getLine()}";
    error_log($msg, 0, 'php://stdout');
}

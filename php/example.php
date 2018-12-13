<?php

try {
    /**
     * Stricter error handling.
     */
    function errorHandler($severity, $message, $file, $line) {
        throw new ErrorException($message, 0, $severity, $file, $line);
    }
    set_error_handler("errorHandler");

    /**
     * Function to be corrected.
     */
    function output()
    {
        $group = [
            "testOne" => 1,
            "testTwo" => [ "two" => 2],
            "testThree" => [3],
            "testFour" => "FOUR",
        ];

        foreach ($group as $key => $value) {

			array_echo($key, $value);
        }

        $output = json_encode($group);
        if (($jsonError = json_last_error()) > 0) {
            throw new Exception('Invalid JSON Output');
        }
    }

	function array_echo($key, $value)
	{
		if(is_array($value))
		{
			echo "{$key}: \n";
		    foreach ($value as $subkey => $subvalue) 
			{
				array_echo($subkey, $subvalue);
		    }
		}
		else
		{
			echo "{$key}: {$value}\n"; 
		}
	}

    $test = output();

    // Output to standard out.
    fwrite(STDOUT, $test);
} catch (Throwable $e) {
    $class = get_class($e);
    $msg = "{$class}({$e->getCode()}): {$e->getMessage()} at ln:{$e->getLine()}";
    error_log($msg);
}

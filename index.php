<?php
/**
 * Dumps any variable to the log specified in error_log.
 * Var_export can not handle reference cycles/recursive arrays.
 * @param $variable mixed
 * @param bool $use_print_r Use print_r or var_export
 */
function dumppp($variable, $use_print_r = true)
{
    // Set php log file if not set or override it
    ini_set('error_log', '/src/log/php-error.log');
    // check if any errors out there and print it
    $lastError = error_get_last();
    function printError($variable, $use_print_r)
    {
        error_log($use_print_r ? var_export($variable, true) : print_r($variable, true), 0);
    }
    if (!is_null($lastError)) {
        printError($lastError, $use_print_r);
    }
    // dump variable
    printError($variable, $use_print_r);
}

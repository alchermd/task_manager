<?php

namespace App\Helpers;

/**
 * A simple logging class.
 */
class Logger
{
    /**
     * Logs the object to the screen and halts execution.
     *
     * @param $o - the object to be logged.
     */
    public function log($o)
    {
        echo '<pre>';
        var_dump($o);
        echo '</pre>';
        die();
    }
}

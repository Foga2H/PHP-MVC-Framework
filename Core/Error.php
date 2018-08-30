<?php

namespace Core;

/**
 * Error and exception handler
 *
 * @package Core
 */
class Error
{
    /**
     * Error handler. Convert all errors to Exceptions by throwing an ErrorException.
     *
     * @param int $level Error level
     * @param string $message Error message
     * @param string $file Filename error was raised in
     * @param int $line Line number in the file
     * @throws \ErrorException
     *
     * @return void
     */
    public static function errorHandler($level, $message, $file, $line)
    {
        if(error_reporting() !== 0) { // to keep the 0 operator working
            throw new \ErrorException($message, 0, $level, $file, $level);
        }
    }

    /**
     * Exception handler.
     *
     * @param \Exception $exception The exception
     *
     * @return void
     */
    public static function exceptionHandler($exception)
    {
        echo "<h1>Fatal error</h1>";
        echo "<p>Uncaught exception: '" . get_class($exception) . "'</p>";
        echo "<p>Message: '" . $exception->getMessage() . "'</p>";
        echo "<p>Stack trace: <pre>" . $exception->getTraceAsString() . "</pre></p>";
        echo "<p>Thrown in '" . $exception->getFile() . "' on line " .
            $exception->getLine() . "</p>";
    }
}
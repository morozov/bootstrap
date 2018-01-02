<?php

/**
 * Command line application bootstrap file
 *
 * PHP version 5
 *
 * @category  Bootstrap
 * @package   Bootstrap
 * @author    Sergei Morozov <morozov@tut.by>
 * @copyright 2017 Sergei Morozov
 * @license   http://mit-license.org/ MIT Licence
 * @link      http://github.com/morozov/bootstrap
 */
error_reporting(-1);

set_error_handler(
    function ($errNo, $errStr, $errFile, $errLine) {
        if (!(error_reporting() & ~E_DEPRECATED & ~E_USER_DEPRECATED & $errNo)) {
            return false;
        }

        throw new ErrorException($errStr, $errNo, 0, $errFile, $errLine);
    }
);

set_exception_handler(
    /** @param Exception|Throwable $e */
    function ($e) {
        fwrite(STDERR, sprintf(
            '%s in %s:%d',
            $e->getMessage(),
            $e->getFile(),
            $e->getLine()
        ) . PHP_EOL);
        exit(-1);
    }
);

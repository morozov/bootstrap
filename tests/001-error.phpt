--TEST--
Non-fatal error handling
--FILE--
<?php

require __DIR__ . '/../src/bootstrap.php';

echo $undefined_variable;
?>
--EXPECTF--
Undefined variable: undefined_variable in %s/tests/001-error.php:5

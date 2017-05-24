--TEST--
Non-fatal error handling
--FILE--
<?php

require __DIR__ . '/../src/bootstrap.php';

echo $undefined_variable;
?>
--EXPECT--
Undefined variable: undefined_variable

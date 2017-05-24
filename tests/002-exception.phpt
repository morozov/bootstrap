--TEST--
Exception handling
--FILE--
<?php

require __DIR__ . '/../src/bootstrap.php';

throw new Exception('Something went wrong');
?>
--EXPECT--
Something went wrong

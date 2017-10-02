--TEST--
Exception handling
--FILE--
<?php

require __DIR__ . '/../src/bootstrap.php';

throw new Exception('Something went wrong');
?>
--EXPECTF--
Something went wrong in %s/tests/002-exception.php:5

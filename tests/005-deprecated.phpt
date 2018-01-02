--TEST--
Handling deprecated errors
--FILE--
<?php

require __DIR__ . '/../src/bootstrap.php';

trigger_error('This API is deprecated', E_USER_DEPRECATED);

echo 'Still alive!', PHP_EOL;
?>
--EXPECTF--
Deprecated: This API is deprecated in %s/tests/005-deprecated.php on line %d
Still alive!

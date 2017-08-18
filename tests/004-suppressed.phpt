--TEST--
Handling suppressed errors
--FILE--
<?php

require __DIR__ . '/../src/bootstrap.php';

@mkdir(__DIR__);
?>
--EXPECT--

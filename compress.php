<?php
$phar = new Phar('joomdump.phar', 0, 'joomdump.phar');
$phar->buildFromDirectory(dirname(__FILE__) . '/tmp');
$phar->setStub($phar->createDefaultStub('index.php'));

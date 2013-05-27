<?php
try {
    $phar = new Phar('joomdump.phar');
    $phar->extractTo('./tmp/'); // extract all files
} catch (Exception $e) {
    // handle errors
}

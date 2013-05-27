#!/bin/bash
php -f joomdump.phar -- --tables=content:schema,categories:data#"extension='com_content'" --db=joomla --pass=r00t --user=root --host=localhost --prefix=jos_

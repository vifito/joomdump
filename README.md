joomdump
========

Originally created to dump Joomla database, and simplify extension development.


Usage
-----

* Dump table jos_content, (structure and data):

```bash
php -f joomdump.phar -- --tables=content:dump \
       --db=joomla --pass=r00t --user=root --host=localhost --prefix=jos_
```

* Dump schema of content table, and data information of categories table

```bash
php -f joomdump.phar -- --tables=content:schema,categories:data \
       --db=joomla --pass=r00t --user=root --host=localhost --prefix=jos_
```

* Dump data information of categories table, returning rows that comply condition of filter

```bash
php -f joomdump.phar -- --tables=categories:data#"extension='com_content'" \
       --db=joomla --pass=r00t --user=root --host=localhost --prefix=jos_
 ```

Syntax of tables option
-----------------------

> --tables=TABLENAME[:(dump|data|schema)[#"SQLField='condition'"]]

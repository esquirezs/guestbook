<?php
require_once '../vendor/autoload.php';

    /* http://guestbook.test/?name=Martin   ...Hello Martin!     (just: http://guestbook.test    ...Hello World! */
echo "Hello ".(isset($_GET['name']) ? $_GET['name'] : "World")."!<br/>";


$array = [1, "apple", 2, "foo", "bar"];
var_dump('PHP/var_dump($array)...: ',$array);
dump('SYMFONY/dump($array)...: ',$array);       //Composer installed.!


$database = new medoo([                         //Composer installed.!
'database_type' => 'sqlite',
'database_file' => '../storage/database.db'
]);
dump('SYMFONY/dump($database)...: ',$database);

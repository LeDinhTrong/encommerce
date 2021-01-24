<?php

//Development connection
defined('server') ? null : define("server", "localhost");
defined('user') ? null : define ("user", "root") ;
defined('pass') ? null : define("pass","");
defined('database_name') ? null : define("database_name", "db_ecommerce") ;

//Remote database connection
// defined('server') ? null : define("server", "remotemysql.com");
// defined('user') ? null : define ("user", "Geuku7eZP5") ;
// defined('pass') ? null : define("pass","LtA2FwwuL5");
// defined('database_name') ? null : define("database_name", "Geuku7eZP5") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>
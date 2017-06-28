<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'onlinestore');
   if(!mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD)||!mysql_select_db(DB_DATABASE))
   	die("could not connect");
?>
<?php

define('HOST', 'localhost');
define('DB_NAME', 'warriornation');
define('USER', 'root');
define('PASS', '');

try{
    $db = new PDO("msql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection OK!";
}
catch(Exception $e){
    echo $e;
}
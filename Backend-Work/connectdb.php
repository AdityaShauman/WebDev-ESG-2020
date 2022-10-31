<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'esgdb';

try{
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
}catch(mysqli_sql_exception $e){
    die("DB CONNECT ERROR");
}
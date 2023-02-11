<?php


try{
   $conn = mysqli_connect("localhost".":"."3308", "root", "", "esgdb");; 
}catch(mysqli_sql_exception $e){
    die("DB CONNECT ERROR");
}
<?php

// TODO change the name of this folder to db_connect.php and assign it a database
$sName = 'toBeComplete';
$uName = "toBeComplete";
$pass = "toBeComplete";
$db_name = "toBeComplete";

try {
    $connect = new PDO("mysql:host=$sName; dbname=$db_name", $uName, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    echo "connected to the database"; // <= if the connection is a success                  
}catch (PDOException $e){
    echo "connection failed : " . $e->getMessage(); // if the connection failed
}
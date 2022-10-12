<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_meservices_database';

try 
{
    $conn = new PDO("mysql:host=$server;dbname=$database",$username, $password);
} 
catch (PDOException $e)
{
    die('fail whit ' .$e ->getMessage());
}

?>
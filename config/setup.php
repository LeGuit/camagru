<?php
include "database.php";
$DB_USER="root"; 
$DB_PASSWORD="rootpass"; 

$user='newuser';
$pass='newpass';
$db="CamaDb"; 

    try {
        $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);

        $dbh->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;") 
        or die(print_r($dbh->errorInfo(), true));

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }
?>
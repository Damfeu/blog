<?php

$db_name = "blog";
$server_name = "localhost";
$username = "root";
$password = "";


try {
    $myPDO = new PDO("mysql:host=$server_name; dbname=$db_name; charset=utf8; port=3306" . $password, $username);
    $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur :" .$e->getMessage();
}



try {
    $myPDO = new PDO("mysql:host=$server_name; dbname=$db_name; charset=utf8; port=3306". $password, $username);
    $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //  echo "Connexion réussie";
 }catch (PDOException $e){
    echo"Erreur :" .$e->getMessage();
 }
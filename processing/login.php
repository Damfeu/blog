<?php

use LDAP\Result;
use PgSql\Result as PgSqlResult;

require("/xampp/htdocs/BLOGS/config/database.php");

$username = $_POST["username"];
$password = $_POST["password"];
$hashed_password = md5($password);


$req = $myPDO->query("SELECT* FROM users WHERE username = '$username' AND password = '$hashed_password';");
$result = $req->fetch();

if(isset($result) && $result ) {
    setcookie('username',$username,time()+3600000, '/');
    setcookie('id', $result['id'], time()+3600000, '/');
    header("Location: /BLOGS/index.php");
}else{
    header("Location: /BLOGS/pages/connexion.php?page=connexion&user=unknow");
}

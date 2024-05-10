<?php
$host = "localhost";
$name = "login";
$user = "login";
$passwort = "cloud@olcrossley()";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
 ?>

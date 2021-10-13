<?php

try {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "dishub";
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username , $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} 
catch(PDOException $error) {
        $error->getMessage();
}
?>

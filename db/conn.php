<?php
    
    $host = "localhost";
    $db = "courselogin_db";
    $user = "root";
    $pass = "";
    $charset = "utf8mb4";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    try {
        $pdo = new pdo ($dsn, $user, $pass);
        // echo 'joined';
        $pdo->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    

?>
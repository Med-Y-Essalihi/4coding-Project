<?php 
    // vars of database

    $dsn = 'mysql:host=localhost;dbname=4coding';
    $user = "root";
    $password = "";

    // connexion to databse :

    try{
        $conn = new PDO($dsn,$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $e){
        echo "Error :" .$e->getMessage();
    }
?>
<?php
$servername= "localhost";
$username= "root";
$password= "";
$db_name= "link";



try {
    $conn = new PDO( dsn:"mysql:host=$servername;dbname=".$db_name, $username,$password);

    $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo "Connection faild:" . $e->getMessage();
}
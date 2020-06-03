<?php
$serverName = "localhost";
$db = "CRUD";
$port = "8889";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$db;port=$port", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "----Connexion BDD----";
    echo nl2br("<br/>");
    echo "<b><i>Connected successfully</i></b>";
    echo nl2br("<br/>");
    echo "----------------------------";*/
    }
 catch(PDOException $e)
    {
    echo "----Connexion BDD----";
    echo nl2br("<br/>");
    echo "Connection failed: " . $e->getMessage();
    echo nl2br("<br/>");
    echo "----------------------------";
    }

    //mysqli_connect()
?>
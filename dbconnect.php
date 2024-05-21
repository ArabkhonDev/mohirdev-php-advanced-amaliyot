<?php
$servername = "localhost";
$username = "root";
$password = "Arxil9899$&";
$db = "Mohirdev_php_practikum";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }


try {
    $conn = new PDO('mysql:host=localhost;dbname=Mohirdev_php_practikum', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

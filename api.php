<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// cu64979_db cu64979_dbPass

$sn = "localhost";
$un = "cu64979_db";
$p = "cu64979_dbPass";
$db = "cu64979_db";

$conn = new mysqli($sn, $un, $p, $db);
$sql = "INSERT INTO `orders` (`name`, `phone`, `email`)  VALUES ('$name', '$phone',  '$email')";

if($conn->query($sql) === TRUE){
  echo 'Данные отправлены, мы с вами свяжемся!';
}

$conn->close();
?>

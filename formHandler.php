<?php

include 'db.php';
$connection=$conn;
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$id_ticket = $_POST["tickets"];


$stmt = $connection->prepare("INSERT INTO paiment (firstName, lastName,Mail,phone,id_ticket) VALUES (?, ?,?,?,?)");
$stmt->bind_param("sssss", $firstname, $lastname, $email,$phone,$id_ticket);
$stmt->execute();



$stmt->close();
$conn->close();
header("Location:paiment.php");
exit;
        ?>
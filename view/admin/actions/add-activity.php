<?php

include("connect.php");

$name = $_POST['name'];
$description = $_POST['description'];
$date = $_POST['date'];
$time = $_POST['time'];

if($name == "" || $description == "" || $date == ""){
    header("Location: ../activiteiten.php");
    die();
}

$stmt = $conn->prepare("INSERT INTO tbl_activities (name, description, date, time) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $description, $date, $time);

if($stmt->execute()){
    header("Location: ../activiteiten.php");
    die();
}


?>
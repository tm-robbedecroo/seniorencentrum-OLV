<?php

include("connect.php");
session_start();

$_SESSION["filter"] = $_GET["filter"];

$name = $_POST['name'];
$description = $_POST['description'];
$date = $_POST['date'];
$time = $_POST['time'];
$endtime = $_POST['endtime'];


if($name == "" || $description == "" || $date == ""){
    header("Location: ../activiteiten.php");
    die();
}

$stmt = $conn->prepare("INSERT INTO tbl_activities (name, description, date, time, endtime) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $description, $date, $time, $endtime);

if($stmt->execute()){
    header("Location: ../activiteiten.php");
    die();
}
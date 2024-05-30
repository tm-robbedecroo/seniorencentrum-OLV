<?php

include("connect.php");
session_start();

$_SESSION["filter"] = $_GET["filter"];

$id             = $_POST["id"];
$name           = $_POST["name"];
$description    = $_POST["description"];
$date           = $_POST["date"];
$time           = $_POST["time"];
$endtime        = $_POST["endtime"];

$stmt = $conn->prepare("UPDATE tbl_activities SET name = ?, description = ?, date = ?, time = ?, endtime = ? WHERE id = ?");
$stmt->bind_param("sssssi", $name, $description, $date, $time, $endtime, $id);

if($stmt->execute()){
    header("Location: ../activiteiten.php");
    die();
}
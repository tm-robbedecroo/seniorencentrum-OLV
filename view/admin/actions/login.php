<?php

session_start();
include("connect.php");

$username = $_POST["username"];
$password = md5($_POST["password"]);

$stmt = $conn->prepare("SELECT * FROM tbl_users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();
if($result->num_rows >= 1) {
    //LOGGED IN
    $_SESSION["username"] = $username;
    header("Location: ../activiteiten.php");
} else {
    header("Location: ../index.php");
    die();
}

?>
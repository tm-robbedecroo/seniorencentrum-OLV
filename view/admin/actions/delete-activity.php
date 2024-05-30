<?php

include "connect.php";

session_start();

$_SESSION["filter"] = $_GET["filter"];

$qry = "DELETE FROM tbl_activities WHERE id = '".$_GET['id']."';";
$result = $conn->query($qry);
header("Location: ../activiteiten.php");
die();
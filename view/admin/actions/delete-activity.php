<?php

include "connect.php";

$qry = "DELETE FROM tbl_activities WHERE id = '".$_GET['id']."';";
$result = $conn->query($qry);
header("Location: ../activiteiten.php");
die();

?>
<!doctype html>
<?php include("actions/connect.php"); ?>
<?php
session_start();
if(!isset($_SESSION["username"])){ header("Location: index.php"); }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | Seniorencentrum OLV.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="../css/fonts/bootstrap-icons.woff"/>
    <link rel="stylesheet" type="text/css" href="../css/fonts/bootstrap-icons.woff2"/>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="../images/favicon.png" type="image/gif" />
</head>
<body>

    <nav class="navbar navbar-light bg-light justify-content-between">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto" href="#"><img src="../images/solv-tekst-white.png"></a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="form-wrapper shadow mx-auto py-5">
                    <h3 class="highest_text">VOEG EEN NIEUWE ACTIVITEIT TOE</h3>
                    <form action="actions/add-activity.php" method="post">
                        <input type="text" class="form-control mt-2" name="name" placeholder="naam">
                        <input type="text" class="form-control mt-2" name="description" placeholder="beschrijving">
                        <input type="date" class="form-control mt-2" name="date" placeholder="datum">
                        <input type="time" class="form-control mt-2" name="time" palceholder="startuur">
                        <input type="submit" class="btn btn-success mt-2" style="width: 100%;" value="maak activiteit">
                    </form>
                </div>
            </div>
            <div class="col-md-8 activity-wrapper">

                <div class="row">
                    <div class="col-md-4">
                        <h1><?php echo isset($_POST["showAll"]) ? "Alle activiteiten" : "Opkomende activiteiten"; ?></h1>
                    </div>
                    <form method="post" action="activiteiten.php" class="col-md-8">
                        <input type="checkbox" name="showAll" id="show-all" class="form-check-input" onchange="this.form.submit()" <?php echo isset($_POST["showAll"]) ? "checked" : "" ?>>
                        <label for="show-all" class="form-check-label">Toon alle</label>
                    </form>
                </div>

                <div class="row px-3">

                    <?php

                    $qry = isset($_POST["showAll"]) ? "SELECT * FROM tbl_activities ORDER BY date ASC" : "SELECT * FROM tbl_activities WHERE date >= '".date("Y-m-d")."' ORDER BY date DESC";
                    $result = $conn->query($qry);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            echo "
                            <div class='col-md-6 mb-3'>
                                <div class='activity-item shadow'>
                                    <a class='ai-delete' href='actions/delete-activity.php?id=".$row["id"]."'><i class='bi bi-trash-fill'></i></a>
                                    <h1 class='highest_text'>".$row["name"]."</h1>
                                    <br><br>
                                    <p class='mt-0 mx-0'>".$row["description"]."</p>
                                    <p class='mx-0' style='display: inline; width: max-content;'>".date("d/m/Y", strtotime($row["date"]))." <strong>-</strong> ".($row["time"] == "" ? 'HELE DAG' : $row["time"])."</p>
                                </div>
                            </div>";
                        }
                    } else {
                        echo "<h3 class='highest_text'>Er zijn geen aankomende activiteiten.</h3>";
                    }

                    ?>

                </div>
            </div>
        </div>

    </div>
</body>
</html>
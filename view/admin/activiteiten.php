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
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/fonts/bootstrap-icons.woff"/>
    <link rel="stylesheet" type="text/css" href="../css/fonts/bootstrap-icons.woff2"/>
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="../images/favicon.png" type="image/gif" />
    <title>ADMIN | Seniorencentrum OLV.</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light d-flex justify-content-center">
        <div class="container">
            <a class="navbar-brand mx-auto" href="../index.php"><img src="../images/solv-tekst-white.png"></a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-md-4 mb-4">
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
            <div class="col-md-8 activity-wrapper mb-5">

                <div class="row px-3 mb-4">
                    <div class="col-md-4">
                        <h1 class="highest_text">Activiteiten</h1>
                    </div>
                    <div class="col-md-8">
                        <form method="post" action="activiteiten.php" class="row filters pt-2 text-right">
                            <div class="radio-group col-md-6 col-lg-3">
                                <input type="radio" name="filter" id="show-all" class="form-check-input" value="all" onchange="this.form.submit()" <?php echo !isset($_POST["filter"]) || $_POST["filter"] == "all" ? "checked" : "" ?>>
                                <label for="show-all" class="form-check-label">Toon alle</label>
                            </div>
                            <div class="radio-group col-md-6 col-lg-3">
                                <input type="radio" name="filter" id="show-upcoming" class="form-check-input" value="upcoming" onchange="this.form.submit()" <?php echo isset($_POST["filter"]) && $_POST["filter"] == "upcoming" ? "checked" : "" ?>>
                                <label for="show-upcoming" class="form-check-label">Toon komende</label>
                            </div>
                            <div class="radio-group col-md-6 col-lg-3">
                                <input type="radio" name="filter" id="show-week" class="form-check-input" value="week" onchange="this.form.submit()" <?php echo isset($_POST["filter"]) && $_POST["filter"] == "week" ? "checked" : "" ?>>
                                <label for="show-week" class="form-check-label">Toon deze week</label>
                            </div>
                            <div class="radio-group col-md-6 col-lg-3">
                                <input type="radio" name="filter" id="show-day" class="form-check-input" value="day" onchange="this.form.submit()" <?php echo isset($_POST["filter"]) && $_POST["filter"] == "day" ? "checked" : "" ?>>
                                <label for="show-day" class="form-check-label">Toon vandaag</label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row px-3">

                    <?php

                    $qry = "SELECT * FROM tbl_activities ORDER BY date ASC, time ASC";

                    if(isset($_POST["filter"])){
                        $filter = $_POST["filter"];

                        switch($filter) {
                            case "upcoming":
                                $qry = "SELECT * FROM tbl_activities WHERE date >= '".date("Y-m-d")."' ORDER BY date DESC, time ASC;";
                                break;
                            case "week":
                                $qry = "SELECT * FROM tbl_activities WHERE date >= '".date("Y-m-d")."' AND date <= '".date("Y-m-d", strtotime("next sunday"))."' ORDER BY date DESC, time ASC;";
                                break;
                            case "day":
                                $qry = "SELECT * FROM tbl_activities WHERE date LIKE '".date("Y-m-d")."' ORDER BY time ASC;";
                                break;
                            default:
                                $qry = "SELECT * FROM tbl_activities ORDER BY date ASC, time ASC";
                                break;
                        }
                    }

                    $result = $conn->query($qry);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            echo "
                            <div class='col-md-6 mb-3'>
                                <div class='activity-item shadow ".($row["date"] < date("Y-m-d") ? "old-activity-item" : "")."'>
                                    <a class='ai-delete' href='actions/delete-activity.php?id=".$row["id"]."'><i class='bi bi-trash-fill'></i></a>
                                    <h1 class='highest_text'>".$row["name"]."</h1>
                                    <br><br>
                                    <p class='mt-0 mx-0'>".$row["description"]."</p>
                                    <p class='mx-0' style='display: inline; width: max-content;'>".date("d/m/Y", strtotime($row["date"]))." <strong>-</strong> ".($row["time"] == "" ? 'HELE DAG' : $row["time"])."</p>
                                </div>
                            </div>";
                        }
                    } else {
                        echo "
                        <div class='col-md-6 mb-3'>
                            <h3 class='highest_text'>Er zijn geen aankomende activiteiten.</h3>
                        </div>";
                    }

                    ?>

                </div>
            </div>
        </div>

    </div>
</body>
</html>
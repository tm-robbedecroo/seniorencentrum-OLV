<!doctype html>
<?php include("actions/connect.php"); ?>
<?php
session_start();
if(!isset($_SESSION["username"])) header("Location: index.php");

$filter = "upcoming";
if(isset($_SESSION["filter"])) $filter = $_SESSION["filter"];
if(isset($_POST["filter"])) $filter = $_POST["filter"];
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
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link hover-underline-animation" href="actions/logout.php"><i class="bi bi-box-arrow-left"></i> Uitloggen</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-md-4 mb-4">
                <div class="form-wrapper shadow mx-auto py-5">
                    <h3 class="highest_text">VOEG EEN NIEUWE ACTIVITEIT TOE</h3>
                    <form action="actions/add-activity.php?filter=<?php echo $filter; ?>" method="post">
                        <input type="text" class="form-control mt-2" name="name" placeholder="naam" required>
                        <input type="text" class="form-control mt-2" name="description" placeholder="beschrijving" required>
                        <div class="form-group mt-2 mb-0">
                            <label for="date-add">DATUM</label>
                            <input type="date" class="form-control" id="date-add" name="date">
                        </div>
                        <div class="form-group mt-2 mb-0">
                            <label for="time-add">STARTUUR</label>
                            <input type="time" class="form-control" id="time-add" name="time">
                        </div>
                        <div class="form-group mt-2 mb-0">
                            <label for="endtime-add">EINDUUR</label>
                            <input type="time" class="form-control" id="endtime-add" name="endtime">
                        </div>
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
                                <input type="radio" name="filter" id="show-upcoming" class="form-check-input" value="upcoming" onchange="this.form.submit()" <?php echo  $filter == "upcoming" ? "checked" : "" ?>>
                                <label for="show-upcoming" class="form-check-label">Toon komende</label>
                            </div>
                            <div class="radio-group col-md-6 col-lg-3">
                                <input type="radio" name="filter" id="show-all" class="form-check-input" value="all" onchange="this.form.submit()" <?php echo $filter == "all" ? "checked" : "" ?>>
                                <label for="show-all" class="form-check-label">Toon alle</label>
                            </div>
                            <div class="radio-group col-md-6 col-lg-3">
                                <input type="radio" name="filter" id="show-archive" class="form-check-input" value="archive" onchange="this.form.submit()" <?php echo $filter == "archive" ? "checked" : "" ?>>
                                <label for="show-archive" class="form-check-label">Toon archief</label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row px-3">

                    <?php

                    $qry = "SELECT * FROM tbl_activities WHERE date >= '".date("Y-m-d")."' ORDER BY date DESC, time DESC;";

                    switch($filter) {
                        case "upcoming":
                            $qry = "SELECT * FROM tbl_activities WHERE date >= '".date("Y-m-d")."' ORDER BY date DESC, time DESC;";
                            break;
                        case "archive":
                            $qry = "SELECT * FROM tbl_activities WHERE date < '".date("Y-m-d")."' ORDER BY date DESC, time DESC;";
                            break;
                        default:
                            $qry = "SELECT * FROM tbl_activities ORDER BY date ASC, time ASC";
                            break;
                    }

                    $result = $conn->query($qry);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            echo "
                            <div class='col-md-12 mb-3'>
                                <div class='activity-item shadow ".($row["date"] < date("Y-m-d") ? "old-activity-item" : "")."'>
                                    <a class='ai-edit' href='#' data-toggle='modal' data-target='#editModal' onClick='setContent(".$row["id"].")'><i class='bi bi-pencil-fill'></i></a>
                                    <a class='ai-delete' href='actions/delete-activity.php?id=".$row["id"]."&filter=".$filter."'><i class='bi bi-trash-fill'></i></a>
                                    <h1 class='highest_text'>".$row["name"]."</h1>
                                    <br><br>
                                    <p class='mt-0 mx-0'>".$row["description"]."</p>
                                    <p class='mx-0' style='display: inline; width: max-content;'>".date("d/m/Y", strtotime($row["date"]))." <strong>-</strong> ".$row["time"]." ".($row["endtime"] == "" ? '' : '(voorzien tot '.$row["endtime"].')')."</p>
                                </div>
                            </div>";
                        }
                    } else {
                        echo "
                        <div class='col-md-12 mb-3'>
                            <h3 class='highest_text'>Er zijn geen aankomende activiteiten.</h3>
                        </div>";
                    }

                    ?>

                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">BEWERK ACTIVITEIT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" action="actions/edit-activity.php?filter=<?php echo $filter; ?>" method="post">
                        <div class="form-group">
                            <label for="name">NAAM</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">BESCHRIJVING</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">DATUM</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="time">STARTUUR</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                        <div class="form-group">
                            <label for="endtime">EINDUUR</label>
                            <input type="time" class="form-control" id="endtime" name="endtime">
                        </div>
                        <input type="hidden" name="id" id="activityId">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>

        <?php

        $qry = "SELECT * FROM tbl_activities ORDER BY date ASC, time ASC";
        $result = $conn->query($qry);

        $activities = array();

        while ($row = $result->fetch_assoc()) {
            array_push($activities, $row);
        }

        $result->data_seek(0);

        ?>

        const activities = <?php echo json_encode($activities); ?>;

        function setContent(id) {
            let activity = activities.filter(a => a.id == id)[0];
            console.log(activity);
            document.getElementById("name").value = activity.name;
            document.getElementById("description").value = activity.description;
            document.getElementById("date").value = activity.date;
            document.getElementById("time").value = activity.time;
            document.getElementById("endtime").value = activity.endtime;
            document.getElementById("activityId").value = activity.id;
        }
    </script>
</body>
</html>
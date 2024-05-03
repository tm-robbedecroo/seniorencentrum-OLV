<?php include "admin/actions/connect.php"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div id="calendar" class="mx-auto"></div>
        </div>
        <div class="col-md-8 pt-4">
            <div id="activity-details"></div>
        </div>
    </div>
</div>

<script>

    <?php

    $qry = "SELECT * FROM tbl_activities ORDER BY date ASC";
    $result = $conn->query($qry);

    $activities = array();

    while ($row = $result->fetch_assoc()) {
        array_push($activities, $row);
    }

    $result->data_seek(0);

    ?>

    const activities = <?php echo json_encode($activities); ?>;

    document.addEventListener('DOMContentLoaded', function() {

        const elem = document.getElementById("activity-details");
        const today = new Date().toISOString().slice(0,10);

        const activity = activities.filter(a => a.date === today);

        if(activity.length === 0) {
            elem.innerHTML = "<h1 class='highest_text'>Op deze dag is er geen activiteit gepland.</h1>";
            return;
        }

        const date = new Date(activity[0].date);

        elem.innerHTML = "" +
            "<h1 class='highest_text'>" + activity[0].name + "</h1>" +
            "<p class='m-0'>" + activity[0].description + "</p>" +
            "<p class='mx-0'>" + date.toLocaleDateString("en-US") + " - " + (activity[0].time === "" ? "Hele dag" : activity[0].time) + "</p>";
    });

    const options = {
        actions: {
            clickDay(event, self) {
                const elem = document.getElementById("activity-details");
                const activity = activities.filter(a => a.date === self.selectedDates[0])

                if(activity.length === 0) {
                    elem.innerHTML = "<h1 class='highest_text'>Op deze dag is er geen activiteit gepland.</h1>";
                    return;
                }

                const date = new Date(activity[0].date);

                elem.innerHTML = "" +
                    "<h1 class='highest_text'>" + activity[0].name + "</h1>" +
                    "<p class='m-0'>" + activity[0].description + "</p>" +
                    "<p class='mx-0'>" + date.toLocaleDateString("en-US") + " - " + (activity[0].time === "" ? "Hele dag" : activity[0].time) + "</p>";
            },
        },
        settings: {
            lang: 'nl-BE',
            selected: {
                month: <?php echo date("n") - 1 ?>,
                year: <?php echo date("Y") ?>
            },
        },
        popups: {
            <?php

            while ($row = $result->fetch_assoc()) {
                echo "'".$row["date"]."': {
                    modifier: 'bg-activity'
                },";
            }

            ?>
        }
    }

    const calendar = new VanillaCalendar("#calendar", options);
    calendar.init();
</script>

<?php include "includes/footer.php" ?>
